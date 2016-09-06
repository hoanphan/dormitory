<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ListStudent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="list-student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'HoDem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TenThuongGoi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DaQuaLop')->textInput() ?>

    <?= $form->field($model, 'NgaySinh')->textInput() ?>

    <?= $form->field($model, 'GioiTinh')->textInput() ?>

    <?= $form->field($model, 'NoiSinh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'QueQuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HoTenBo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Anh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MaDanToc')->textInput() ?>

    <?= $form->field($model, 'MaTonGiao')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
