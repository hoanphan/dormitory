<?php

namespace app\models;

use Yii;
use yii\helpers\BaseUrl;
use yii\helpers\Url;

/**
 * This is the model class for table "staff".
 *
 * @property integer $id
 * @property string $id_staff
 * @property string $fullname
 * @property integer $id_nation
 * @property string $Certificate_number
 * @property double $coefficients_salary
 * @property string $day_birth
 * @property string $imager
 * @property string $address
 * @property string $home_town
 * @property string $dormitory
 * @property integer $sex
 * @property integer $id_regency
 */
class Staff extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'staff';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_staff', 'fullname', 'id_nation', 'coefficients_salary', 'day_birth',  'address', 'id_regency'], 'required'],
            [['id_nation', 'sex', 'id_regency'], 'integer'],
            [['coefficients_salary'], 'number'],
            [['day_birth'], 'safe'],
            [['id_staff', 'fullname', 'imager', 'address', 'home_town', 'dormitory'], 'string', 'max' => 255],
            [['Certificate_number'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app','ID'),
            'id_staff' =>  Yii::t('app','Id Staff'),
            'fullname' => Yii::t('app','Fullname'),
            'id_nation' => Yii::t('app','Id Nation'),
            'Certificate_number' => Yii::t('app','Certificate Number'),
            'coefficients_salary' => Yii::t('app','Coefficients Salary'),
            'day_birth' => Yii::t('app','Day Birth'),
            'imager' => Yii::t('app','Imager'),
            'address' => Yii::t('app','Address'),
            'home_town' => Yii::t('app','Home Town'),
            'dormitory' => Yii::t('app','Dormitory'),
            'sex' => Yii::t('app','Sex'),
            'id_regency' => Yii::t('app','Id Regency'),
        ];
    }
    public function getTextNation($id_nation)
    {
        $nation=Nation::findOne($id_nation);
        if($nation!=null)
            return $nation->name;
        else
            return "Unknown";
    }
    public function getUrlPicture($url)
    {
        if($url!=null)
          return BaseUrl::home().Yii::$app->params['uploadPath'].$url;
        else
            return BaseUrl::home().Yii::$app->params['uploadPath'].'profile-pic.jpg';
    }
    public function getTextStatus($id_sex)
    {
        $arr=array(0=>Yii::t('app','Men'),1=>Yii::t('app','Women'));
        if(isset($arr[$id_sex]))
            return $arr[$id_sex];
        else
            return 'Unknown';
    }
    public static function getStaff($id)
    {
        return Staff::findOne(['id_staff'=>$id]);
    }
    public static function createIdStaff()
    {
        $count=Staff::find()->count()+1;
        $str='';
        if($count<10)
            $str='NV0'.$count;
        else
            $str='NV'.$count;
        while (self::getStaff($str))
        {
            $count++;
            if($count<10)
                $str='NV0'.$count;
            else
                $str='NV'.$count;
        }
        return $str;

    }
    private static function forgetDate($data)
    {
        $indexDay=strpos($data,'/');
        $day=substr($data,0,$indexDay);
        $indexMon=strripos($data,'/');
        $month=substr($data,$indexDay+1,$indexMon-$indexDay-1);
        $year=substr($data,$indexMon+1,strlen($data)-$indexMon);
        return date_create($day.'-'.$month.'-'.$year);
    }
    public function getTextRegioncy($id)
    {
        $regency=Regency::findOne($id);
        if($regency==null)
            return 'Unknown';
        else
            return $regency->name;
    }
    public static function convertDate($data)
    {
        $date=self::forgetDate($data);
        return date_format($date,'y-m-d');
    }
}
