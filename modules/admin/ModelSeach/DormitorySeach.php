<?php

namespace app\modules\admin\ModelSeach;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dormitory;

/**
 * DormitorySeach represents the model behind the search form about `app\models\Dormitory`.
 */
class DormitorySeach extends Dormitory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_dormitory'], 'integer'],
            [['name_dormitory', 'layer_number'], 'safe'],
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
        $query = Dormitory::find();

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
            'id_dormitory' => $this->id_dormitory,
        ]);

        $query->andFilterWhere(['like', 'name_dormitory', $this->name_dormitory])
            ->andFilterWhere(['like', 'layer_number', $this->layer_number]);

        return $dataProvider;
    }
}
