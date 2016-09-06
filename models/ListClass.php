<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "listclass".
 *
 * @property integer $id_class
 * @property string $name_class
 * @property integer $id_rank
 * @property integer $id_department
 * @property integer $status
 */
class ListClass extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'listclass';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'name_class', 'id_rank', 'id_department'], 'required'],
            [['id_class', 'id_rank', 'id_department', 'status'], 'integer'],
            [['name_class'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_class' => 'Id Class',
            'name_class' => 'Name Class',
            'id_rank' => 'Id Rank',
            'id_department' => 'Id Department',
            'status' => 'Status',
        ];
    }
    public function getTextDepartment($id_department)
    {
        $department=ListDepartment::findOne($id_department)->name_department;
        if(isset($department))
            return $department;
        else
            return 'Unknown';
    }
    public function getTextRank($id_rank)
    {
        $rank=Rank::findOne($id_rank)->name_rank;
        if(isset($rank))
        {
            return $rank;
        }
        else
            return 'Unknown';
    }
    public function getTextSatus($status)
    {
        $arr=array(0=>'Inactive',1=>'Active');
        if(isset($arr[$status]))
            return $arr[$status];
        else
            return 'Unknown';
    }
}
