<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nation".
 *
 * @property integer $id
 * @property string $name
 */
class Nation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' =>  Yii::t('app','Id Nation'),
            'name' => Yii::t('app','name nation'),
        ];
    }
}
