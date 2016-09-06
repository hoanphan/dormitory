<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dormitory".
 *
 * @property integer $id_dormitory
 * @property string $name_dormitory
 * @property string $layer_number
 */
class Dormitory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dormitory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_dormitory', 'layer_number'], 'required'],
            [['name_dormitory', 'layer_number'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_dormitory' => Yii::t('app','Id Dormitory'),
            'name_dormitory' =>  Yii::t('app','Name Dormitory'),
            'layer_number' =>  Yii::t('app','Layer Number'),
        ];
    }
}
