<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\Select2;
use app\models\Dormitory;
use yii\helpers\ArrayHelper;
use kartik\widgets\SwitchInput;
/* @var $this yii\web\View */
/* @var $model app\models\DormitoryManagement */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dormitory-management-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_dormitory')->widget(Select2::className(),[
        'data'=>ArrayHelper::map(Dormitory::find()->asArray()->all(),'id_dormitory','name_dormitory'),
        'options' => ['placeholder' => 'Select a dormitory ...', 'multiple' => true],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])->label('Kí túc xá') ?>

    <?= $form->field($model, 'id_staff')->widget(Select2::className(),[
        'data'=>ArrayHelper::map(\app\models\Staff::find()->asArray()->all(),'id_staff','fullname'),
        'options' => ['placeholder' => 'Select a staff ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])->label('Tên nhân viên') ?>

    <?= $form->field($model, 'status')->widget(SwitchInput::className(),['data'=>[0=>'No',1=>'Yes']]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
