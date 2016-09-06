<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dormitory_management".
 *
 * @property integer $id
 * @property integer $id_dormitory
 * @property string $id_staff
 * @property integer $status
 */
class DormitoryManagement extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dormitory_management';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_dormitory', 'id_staff'], 'required'],
            [['id_dormitory', 'status'], 'integer'],
            [['id_staff'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app','ID'),
            'id_dormitory' => Yii::t('app','Id Dormitory'),
            'id_staff' => Yii::t('app','Id Staff'),
            'status' => Yii::t('app','Status'),
        ];
    }
    public function getTextDormitory($id_dormitory)
    {
        $dormitory=Dormitory::findOne($id_dormitory);
        if(isset($dormitory))
            return $dormitory->name_dormitory;
    }
    public function getTextStaff($id_staff)
    {
        $staff=Staff::findOne(['id_staff'=>$id_staff]);
        if($staff!=null)
            return $staff->fullname;
        else
            return 'Unknown';
    }
    public function getTextStatus($id_status)
    {
        $arr=array(0=>'Inactive',1=>'Active');
        if(isset($arr[$id_status]))
            return $arr[$id_status];
        else
            return 'Unknown';
    }
}
