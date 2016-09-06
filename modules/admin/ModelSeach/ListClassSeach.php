<?php

namespace app\modules\admin\modelSeach;

use app\models\Rank;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ListClass;

/**
 * ListClassSeach represents the model behind the search form about `app\models\ListClass`.
 */
class ListClassSeach extends ListClass
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_class', 'id_rank', 'id_department', 'status'], 'integer'],
            [['name_class'], 'safe'],
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
        $query = ListClass::find();

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
            'id_class' => $this->id_class,
            'id_rank' => $this->id_rank,
            'id_department' => $this->id_department,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name_class', $this->name_class]);

        return $dataProvider;
    }
    public function getTextRank($id_rank)
    {
        $rank=Rank::findOne($id_rank)->name_rank;
        if($rank!=null)
        {
            return $rank;
        }
        else
            return 'Unknown';
    }
}
