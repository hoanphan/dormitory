<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\SwitchInput;
/* @var $this yii\web\View */
/* @var $model app\models\Rank */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rank-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_rank')->textInput() ?>

    <?= $form->field($model, 'status')->widget(SwitchInput::className(),['data'=>[0=>'Inactive',1=>'Active']]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
