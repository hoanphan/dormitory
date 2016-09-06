<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "list_department".
 *
 * @property integer $id_department
 * @property string $name_department
 * @property integer $id_rank
 * @property integer $status
 */
class ListDepartment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'list_department';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_department', 'id_rank'], 'required'],
            [['id_rank', 'status'], 'integer'],
            [['name_department'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_department' => 'Id Department',
            'name_department' => 'Name Department',
            'id_rank' => 'Id Rank',
            'status' => 'Status',
        ];
    }
    public function getTextRank($id_rank)
    {
        $department=Rank::findOne(['id'=>$id_rank]);
        if($department!=null)
            return $department->name_rank;
        else
            return 'Unknown';

    }
    public function getTextSatus($id_status)
    {
        $arr=array(0=>'Inactive',1=>'Active');
        if(isset($arr[$id_status]))
            return $arr[$id_status];
        else
            return 'Unknown';
    }
}
