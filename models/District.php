<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "distric".
 *
 * @property integer $id
 * @property integer $id_city
 * @property string $name
 */
class District extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'distric';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_city', 'name'], 'required'],
            [['id_city'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app','ID'),
            'id_city' => Yii::t('app','City'),
            'name' => Yii::t('app','Name'),
        ];
    }
    public function getTextCity($id_city)
    {
        $model=City::findOne($id_city)->name;
        if($model!=null)
            return $model;
        else
            return 'Unknown';
    }
}
