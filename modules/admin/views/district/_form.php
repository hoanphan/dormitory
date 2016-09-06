<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use app\models\City;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\District */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="district-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_city')->widget(Select2::className(),[
        'theme'=>Select2::THEME_KRAJEE,

            'data'=> ArrayHelper::map(City::find()->asArray()->all(),'id','name'),
             'options' => [


        ],

    ]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
