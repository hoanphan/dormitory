<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dormitory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dormitory-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_dormitory')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'layer_number')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
