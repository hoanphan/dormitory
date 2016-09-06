<?php

use app\models\Dormitory;
use kartik\widgets\Select2;
use kartik\widgets\SwitchInput;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use kartik\detail\DetailView;
use app\models\Nation;
use app\models\Regency;
/* @var $this yii\web\View */
/* @var $model app\models\Staff */

$this->title = $model->id_staff;
$this->params['breadcrumbs'][] = ['label' => 'Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-view">


    <?= DetailView::widget([
        'mode' => DetailView::MODE_VIEW,
        'bordered' => true,
        'striped' => true,
        'condensed' => true,
        'responsive' => true,
        'hover' => true,
        'hAlign' => 'right',
        'vAlign' => 'middle',
        'fadeDelay' => 809,
        'model' => $model,
        'deleteOptions' => ['delete', 'id' => $model->id],
        'panel' => [
            'heading' => '<i class="fa fa-books"></i> ' . Yii::t('app', 'Staff Details')
            , 'type' => DetailView::TYPE_SUCCESS,
            'footer' => false,
        ],

        'attributes' => [
            [
                'group'=>true,
                'label'=>'Thông tin chính',
                'rowOptions' => ['class' => DetailView::TYPE_INFO],
            ],
            [
                'attribute' => 'id_staff',
                'type' => DetailView::INPUT_HIDDEN,
                'label' => Yii::t('app', 'id staff'),
                'valueColOptions' => ['style' => 'width:70%']
            ],
            [
                'attribute' => 'fullname',
                'type' => DetailView::INPUT_TEXT,

                'valueColOptions' => ['style' => 'width:70%']
            ],
            [
                'attribute' => 'id_nation',
                'type' => DetailView::INPUT_SELECT2,
                'value'=>$model->getTextNation($model->id_nation),
                'widgetOptions' => [
                    'data' => ArrayHelper::map(Nation::find()->asArray()->all(), 'id', 'name')
                ],
                'valueColOptions' => ['style' => 'width:70%']
            ],
            [
                'attribute'=>'Certificate_number',
                'type'=>DetailView::INPUT_TEXT,
                'valueColOptions' => ['style' => 'width:70%'],
            ]
            ,
            [
                'attribute'=>'coefficients_salary',
                'type'=>DetailView::INPUT_TEXT,
                'valueColOptions' => ['style' => 'width:70%'],
            ]
            ,

            [
                'attribute' => 'day_birth',
                'type' => DetailView::INPUT_DATE,
                'widgetOptions' => [
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => ['date','php:dd/mm/yyyy']
                    ]
                ],
                'valueColOptions' => ['style' => 'width:70%']
            ],
            [

                'attribute' => 'imager',
                'type' => DetailView::INPUT_HIDDEN,

                'format' => 'html',
                'value' => '<a><img style="width: 100px;height: 150px;" src="' . $model->imager . '"></a>',
                'valueColOptions' => ['style' => 'width:70%']
            ],
            [

                'attribute' => 'address',
                'type' => DetailView::INPUT_TEXT,
                'valueColOptions' => ['style' => 'width:70%']
            ],

            [
                'attribute' => 'home_town',
                'type' => DetailView::INPUT_TEXT,
                'valueColOptions' => ['style' => 'width:70%']
            ],

            [
                'attribute' => 'sex',
                'type' => DetailView::INPUT_SELECT2,
                'value'=>$model->getTextStatus($model->sex),
                'widgetOptions' => [
                    'data' => [0=>Yii::t('app','Men'),1=>Yii::t('app','Women')]
                ],
                'valueColOptions' => ['style' => 'width:70%']
            ],
            [
                'attribute'=>'id_regency',
                'type'=>DetailView::INPUT_SELECT2,
                'value'=>$model->getTextRegioncy($model->id_regency),
                'widgetOptions' => [
                    'data' => ArrayHelper::map(Regency::find()->where(['status'=>1])->asArray()->all(),'id','name')
                ],
                'valueColOptions' => ['style' => 'width:70%']
            ],
        ],
    ]) ?>

</div>
<h1>Quản lí kí túc</h1>
<p>
    <?= Html::a('Thêm quản lí kí túc xá','', ['class' => 'btn btn-success btn-add-payment']) ?>
</p>
<div class="payment" style="display: none;">
    <div class="col-xs-12">
        <div class="row">
            <div class="space-6"></div>
            <?php $form = ActiveForm::begin(); ?>
            <input type="hidden" name="project_id" value="<?= $model->id ?>">
            <div class="project-form">
                <div class="col-md-6">

                    <?=$form->field($manager, 'id_staff')->widget(Select2::className(),[
                        'data'=>ArrayHelper::map(Dormitory::find()->asArray()->all(),'id_dormitory','name_dormitory'),
                        'pluginOptions' => [
                            'allowClear' => true,
                            'multiple'=>true
                        ],
                    ]) ?>

                    <?= $form->field($manager, 'status')->widget(SwitchInput::className(),['data'=>[0=>'NO',1=>'YES']])?>

                    <div class="col-md-offset-3 col-md-6">
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
            </div>



            <?php ActiveForm::end(); ?>
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
