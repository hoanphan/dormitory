<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\District */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Districts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="district-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'mode'=>'view',
        'bordered'=>true,
        'condensed'=>true,
        'hover'=>true,
        'hAlign'=>DetailView::ALIGN_CENTER,
        'deleteOptions'=>[
            'url'=> ['update', 'id' => $model->id]
        ],
        'panel'=>[
            'heading'=>'ID#'.$model->id,
            'type'=>DetailView::TYPE_PRIMARY,
        ],
        'attributes' => [
            [
                'group'=>true,
                'label'=>'Thông tin chính',
                'rowOptions'=>['class'=>'infor']
            ],
            [
                'attribute'=>'id',
                'type'=>DetailView::INPUT_HIDDEN,
                'value'=>$model->id
            ],
            [
                'attribute'=>'id_city',
                'value'=>$model->getTextCity($model->id_city),
                'type'=>DetailView::INPUT_SELECT2,
                'widgetOptions' => [

                        'data'=>\yii\helpers\ArrayHelper::map(\app\models\City::find()->asArray()->all(),'id','name')

                ],
            ],
            'name',
        ],
    ]) ?>
    <h1>Tỉnh thành</h1>
    <p>
        <?= Html::a('Thêm tỉnh thành', ['create'], ['class' => 'btn btn-success btn-add-payment']) ?>
    </p>
    <div class="payment" style="display: none;">
        <div class="col-xs-12">
            <div class="row">
                <div class="space-6"></div>
                <?php $form = ActiveForm::begin(); ?>
                <input type="hidden" name="project_id" value="<?= $model->id ?>">
                <div class="project-form">
                    <div class="col-md-6">


                        <?= $form->field($city, 'name')->textInput() ?>
                        <button class="btn btn-info btn-submit-payment" type="submit">
                            <i class="ace-icon fa fa-check bigger-110"></i>
                            Lưu lại
                        </button>

                        &nbsp; &nbsp; &nbsp;
                        <button class="btn btn-cancel" type="reset">
                            <i class="ace-icon fa fa-ban bigger-110"></i>
                            Hủy bỏ
                        </button>

                    </div>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>

</div>
<script>
    $(document).ready(function () {
        $(document).on("click", ".btn-add-payment", function() {
            $(this).slideUp();
            $("div.payment").slideDown();
            return false;
        });
        $(document).on("click", ".btn-cancel", function() {
            var payment = $(this).closest(".payment");
            payment.slideUp();
            $(".btn-add-payment").slideDown();
            payment.find("input:not([type='hidden']), textarea, select").val("").parent().removeClass("has-success has-error").find(".help-block").html("");
            return false;
        });
    })
</script>
