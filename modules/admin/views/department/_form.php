<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\Select2;
use kartik\widgets\SwitchInput;
use app\models\Rank;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\ListDepartment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="list-department-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_department')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_rank')->widget(Select2::className(),[
        'options'=>[
         'prompt'=>Yii::t('app','Select rank')
        ],
        'data'=>ArrayHelper::map(Rank::find()->where(['status'=>1])->asArray()->all(),'id','name_rank')
    ]) ?>

    <?= $form->field($model, 'status')->widget(SwitchInput::className(),['data'=>[0=>'Inactive',1=>'Active']]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
