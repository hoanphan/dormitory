<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "liststudent".
 *
 * @property string $MaHocSinh
 * @property string $HoDem
 * @property string $Ten
 * @property string $TenThuongGoi
 * @property integer $DaQuaLop
 * @property string $NgaySinh
 * @property integer $GioiTinh
 * @property string $NoiSinh
 * @property string $QueQuan
 * @property string $HoTenBo
 * @property string $Anh
 * @property integer $MaDanToc
 * @property integer $MaTonGiao
 */
class Liststudent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'liststudent';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DaQuaLop', 'GioiTinh', 'MaDanToc', 'MaTonGiao'], 'integer'],
            [['NgaySinh'], 'safe'],
            [['HoDem', 'NoiSinh', 'QueQuan', 'HoTenBo'], 'string', 'max' => 50],
            [['Ten'], 'string', 'max' => 10],
            [['TenThuongGoi'], 'string', 'max' => 30],
            [['Anh'], 'string', 'max' => 200],
            [  [['MaHocSinh'], 'string', 'max' => 7],]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaHocSinh' => Yii::t('app','id student'),
            'HoDem' => Yii::t('app','last name'),
            'Ten' => Yii::t('app','fist name'),
            'TenThuongGoi' => Yii::t('app','full name'),
            'DaQuaLop' => Yii::t('app','through class'),
            'NgaySinh' => Yii::t('app','date of birth'),
            'GioiTinh' => Yii::t('app','Sex'),
            'NoiSinh' => Yii::t('app','birthplace'),
            'QueQuan' => Yii::t('app','hometown'),
            'HoTenBo' => Yii::t('app','farther name'),
            'Anh' => Yii::t('app','picture'),
            'MaDanToc' => Yii::t('app','id nation'),
            'MaTonGiao' => Yii::t('app','religiousness'),
        ];
    }
}
