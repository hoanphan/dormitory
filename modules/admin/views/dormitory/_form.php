<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\modules\admin\assets\AppAsset;
$bundle=AppAsset::register($this);

/* @var $this yii\web\View */
/* @var $model app\models\Dormitory */
/* @var $form yii\widgets\ActiveForm */
?>
<link rel="stylesheet" href="<?=$bundle->baseUrl?>/css/chosen.min.css" />
<div class="dormitory-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_dormitory')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'layer_number')->textInput(['maxlength' => true,'id'=>'spinner3']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script src="<?=$bundle->baseUrl?>/js/fuelux.spinner.min.js"></script>
<script>
    $(document).ready(function () {
        $('#spinner3').ace_spinner({value:0,min:0,max:100,step:1, on_sides: true, icon_up:'ace-icon fa fa-plus bigger-110', icon_down:'ace-icon fa fa-minus bigger-110', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
    })
</script>