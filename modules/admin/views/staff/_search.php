<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\ModelSeach\StaffSeach */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="staff-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_staff') ?>

    <?= $form->field($model, 'fullname') ?>

    <?= $form->field($model, 'id_nation') ?>

    <?= $form->field($model, 'Certificate_number') ?>

    <?php // echo $form->field($model, 'coefficients_salary') ?>

    <?php // echo $form->field($model, 'day_birth') ?>

    <?php // echo $form->field($model, 'imager') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'home_town') ?>

    <?php // echo $form->field($model, 'dormitory') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'id_regency') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
