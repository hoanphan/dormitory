<?php

namespace app\modules\admin\ModelSeach;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Staff;

/**
 * StaffSeach represents the model behind the search form about `app\models\Staff`.
 */
class StaffSeach extends Staff
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_nation', 'sex', 'id_regency'], 'integer'],
            [['id_staff', 'fullname', 'Certificate_number', 'day_birth', 'imager', 'address', 'home_town', 'dormitory'], 'safe'],
            [['coefficients_salary'], 'number'],
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
        $query = Staff::find();

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
            'id_nation' => $this->id_nation,
            'coefficients_salary' => $this->coefficients_salary,
            'day_birth' => $this->day_birth,
            'sex' => $this->sex,
            'id_regency' => $this->id_regency,
        ]);

        $query->andFilterWhere(['like', 'id_staff', $this->id_staff])
            ->andFilterWhere(['like', 'fullname', $this->fullname])
            ->andFilterWhere(['like', 'Certificate_number', $this->Certificate_number])
            ->andFilterWhere(['like', 'imager', $this->imager])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'home_town', $this->home_town])
            ->andFilterWhere(['like', 'dormitory', $this->dormitory]);

        return $dataProvider;
    }
}
