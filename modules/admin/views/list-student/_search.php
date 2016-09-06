<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\modelSeach\ListStudentSeach */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="list-student-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'MaHocSinh') ?>

    <?= $form->field($model, 'HoDem') ?>

    <?= $form->field($model, 'Ten') ?>

    <?= $form->field($model, 'TenThuongGoi') ?>

    <?= $form->field($model, 'DaQuaLop') ?>

    <?php // echo $form->field($model, 'NgaySinh') ?>

    <?php // echo $form->field($model, 'GioiTinh') ?>

    <?php // echo $form->field($model, 'NoiSinh') ?>

    <?php // echo $form->field($model, 'QueQuan') ?>

    <?php // echo $form->field($model, 'HoTenBo') ?>

    <?php // echo $form->field($model, 'Anh') ?>

    <?php // echo $form->field($model, 'MaDanToc') ?>

    <?php // echo $form->field($model, 'MaTonGiao') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
