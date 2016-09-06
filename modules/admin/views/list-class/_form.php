<?php

use kartik\depdrop\DepDrop;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\widgets\Select2;
use app\models\Rank;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\ListClass */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="list-class-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_class')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_rank')->widget(Select2::className(),[
        'data'=>ArrayHelper::map(Rank::find()->where(['status'=>1])->asArray()->all(),'id','name_rank')
    ]) ?>
       <?= $form->field($model, 'id_department')->widget(DepDrop::classname(), [
       
        'type' => DepDrop::TYPE_SELECT2,
        'select2Options'=>['pluginOptions'=>['allowClear'=>true]],
        'pluginOptions'=>[
        'depends'=>['listclass-id_rank'],
        'url' => Url::toRoute(['list-class/child']),
        'loadingText' => 'Loading child department ...',
        ]
        ]);?>


    <?= $form->field($model, 'status')->widget(\kartik\widgets\SwitchInput::className(),['data'=>[0=>'NO','YES']]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
