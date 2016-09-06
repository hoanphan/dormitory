<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rank".
 *
 * @property integer $id
 * @property integer $name_rank
 * @property integer $status
 */
class Rank extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rank';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_rank'], 'required'],
            [[ 'status'], 'integer'],
            [[ 'name_rank'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app','ID'),
            'name_rank' =>  Yii::t('app','Name Rank'),
            'status' =>  Yii::t('app','Status'),
        ];
    }
    public function getTextStatus($value)
    {

        $arr=array(0=>'Inactive',1=>'Active');

        if(isset($arr[$value]))
            return $arr[$value];
        else
            return 'Unknown';
    }
}
