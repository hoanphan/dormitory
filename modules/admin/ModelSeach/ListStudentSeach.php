<?php

namespace app\modules\admin\modelSeach;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ListStudent;

/**
 * ListStudentSeach represents the model behind the search form about `app\models\ListStudent`.
 */
class ListStudentSeach extends ListStudent
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaHocSinh', 'DaQuaLop', 'GioiTinh', 'MaDanToc', 'MaTonGiao'], 'integer'],
            [['HoDem', 'Ten', 'TenThuongGoi', 'NgaySinh', 'NoiSinh', 'QueQuan', 'HoTenBo', 'Anh'], 'safe'],
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
        $query = ListStudent::find();

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
            'MaHocSinh' => $this->MaHocSinh,
            'DaQuaLop' => $this->DaQuaLop,
            'NgaySinh' => $this->NgaySinh,
            'GioiTinh' => $this->GioiTinh,
            'MaDanToc' => $this->MaDanToc,
            'MaTonGiao' => $this->MaTonGiao,
        ]);

        $query->andFilterWhere(['like', 'HoDem', $this->HoDem])
            ->andFilterWhere(['like', 'Ten', $this->Ten])
            ->andFilterWhere(['like', 'TenThuongGoi', $this->TenThuongGoi])
            ->andFilterWhere(['like', 'NoiSinh', $this->NoiSinh])
            ->andFilterWhere(['like', 'QueQuan', $this->QueQuan])
            ->andFilterWhere(['like', 'HoTenBo', $this->HoTenBo])
            ->andFilterWhere(['like', 'Anh', $this->Anh]);

        return $dataProvider;
    }
}
