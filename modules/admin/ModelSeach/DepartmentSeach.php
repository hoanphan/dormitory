<?php

namespace app\modules\admin\modelSeach;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ListDepartment;

/**
 * DepartmentSeach represents the model behind the search form about `app\models\ListDepartment`.
 */
class DepartmentSeach extends ListDepartment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_department', 'id_rank', 'status'], 'integer'],
            [['name_department'], 'safe'],
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
        $query = ListDepartment::find();

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
            'id_department' => $this->id_department,
            'id_rank' => $this->id_rank,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name_department', $this->name_department]);

        return $dataProvider;
    }
}
