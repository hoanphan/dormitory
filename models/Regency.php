<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "regency".
 *
 * @property integer $id
 * @property string $name
 * @property integer $status
 */
class Regency extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'regency';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 252],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app','ID'),
            'name' => Yii::t('app','Name'),
            'status' => Yii::t('app','Status'),
        ];
    }
    public function getTextStatus($value)
    {
        $arr=array(1=>'Active',0=>'Inactive');
        if (isset($arr[$value]))
            return $arr[$value];
        else
            return 'Unknown';
    }
}
