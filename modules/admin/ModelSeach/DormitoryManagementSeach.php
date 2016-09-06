<?php

namespace app\modules\admin\ModelSeach;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DormitoryManagement;

/**
 * DormitoryManagementSeach represents the model behind the search form about `app\models\DormitoryManagement`.
 */
class DormitoryManagementSeach extends DormitoryManagement
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_dormitory', 'status'], 'integer'],
            [['id_staff'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = DormitoryManagement::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_dormitory' => $this->id_dormitory,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'id_staff', $this->id_staff]);

        return $dataProvider;
    }
}
