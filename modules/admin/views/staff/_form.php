<style>
    #w1
    {
        height: 35px;
    }
</style>
<?php
use kartik\tabs\TabsX;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\Select2;
use app\models\Nation;
use kartik\widgets\DateTimePicker;
use kartik\file\FileInput;
use  yii\helpers\ArrayHelper;
use app\models\Dormitory;
$form = ActiveForm::begin();
$items =[];
if($model->imager==null) {
    $items = [
        [
            'label' => '<i class="glyphicon glyphicon-home"></i>' . Yii::t('app', ' Key information'),
            'content' => $form->field($model, 'id_staff')->textInput(['maxlength' => true, 'disabled' => "disabled"]) .
                $form->field($model, 'fullname')->textInput(['maxlength' => true]) .
                $form->field($model, 'id_nation')->widget(Select2::className(), [
                    'data' => \yii\helpers\ArrayHelper::map(Nation::find()->asArray()->all(), 'id', 'name'),
                    'options' => ['placeholder' => 'Select a nation ...'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]) .
                $form->field($model, 'day_birth')->widget(DateTimePicker::className(), [
                    'language' => 'vi',
                    'value' => '01/01/1970',
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'dd/mm/yyyy'
                    ]
                ]) .
                $form->field($model, 'coefficients_salary')->textInput().
                $form->field($model, 'id_regency')->widget(Select2::className(), [
                    'data' => \yii\helpers\ArrayHelper::map(\app\models\Regency::find()->where(['status'=>1])->asArray()->all(), 'id', 'name'),
                    'options' => ['placeholder' => 'Select a regency ...'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]) .
                $form->field($model, 'address')->textInput(['maxlength' => true]) .
                $form->field($model, 'sex')->dropDownList([0 => Yii::t('app', 'Men'), 1 => Yii::t('app', 'women')]) .
                Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'])
            ,
            'active' => true
        ],
        [
            'label' => '<i class="glyphicon glyphicon-user"></i>' . Yii::t('app', ' Subsidiary information'),
            'content' =>
                $form->field($model, 'Certificate_number')->textInput(['maxlength' => true]).
                $form->field($model, 'home_town')->textInput(['maxlength' => true]) .
                $form->field($model, 'imager')->fileInput()->widget(FileInput::className(), [
                    'pluginOptions' => [
                        'showCaption' => false,
                        'showRemove' => false,
                        'showUpload' => false,
                        'browseClass' => 'btn btn-primary btn-block',
                        'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
                        'browseLabel' => 'Select Photo'
                    ],
                    'options' => ['accept' => 'image/*']
                ]) .
                $form->field($model, 'dormitory')->widget(Select2::class, [
                    'data' => ArrayHelper::map(Dormitory::find()->asArray()->all(), 'id_dormitory', 'name_dormitory'),
                    'size' => Select2::SMALL,
                    'options' => ['placeholder' => Yii::t('app', 'Select a dormitory ...'), 'multiple' => true],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]) .
                Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']),

        ],
    ];
}
else
{
    $items = [
        [
            'label' => '<i class="glyphicon glyphicon-home"></i>' . Yii::t('app', ' Key information'),
            'content' => $form->field($model, 'id_staff')->textInput(['maxlength' => true, 'disabled' => "disabled"]) .
                $form->field($model, 'fullname')->textInput(['maxlength' => true]) . $form->field($model, 'id_nation')->widget(Select2::className(), [
                    'data' => \yii\helpers\ArrayHelper::map(Nation::find()->asArray()->all(), 'id', 'name'),
                    'options' => ['placeholder' => 'Select a state ...'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]) .
                $form->field($model, 'day_birth')->widget(DateTimePicker::className(), [
                    'language' => 'vi',
                    'value' => '01/01/1970',
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'dd/mm/yyyy'
                    ]
                ]) .
                $form->field($model, 'sex')->dropDownList([0 => Yii::t('app', 'Men'), 1 => Yii::t('app', 'women')]) .
                Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'])
            ,
            'active' => true
        ],
        [
            'label' => '<i class="glyphicon glyphicon-user"></i>' . Yii::t('app', ' Subsidiary information'),
            'content' => $form->field($model, 'address')->textInput(['maxlength' => true]) .
                $form->field($model, 'home_town')->textInput(['maxlength' => true]) .
                $form->field($model, 'imager')->fileInput()->widget(FileInput::className(), [
                    'pluginOptions' => [
                        'initialPreview'=>[
                            "$model->imager",
                        ],
                        'initialPreviewAsData'=>true,
                        'initialPreviewConfig' => [
                            ['caption' => $model->fullname.'.jpg', 'size' => '873727'],
                        ],
                        'maxFileSize'=>2800,
                        'showCaption' => false,
                        'showRemove' => false,
                        'showUpload' => false,
                        'browseClass' => 'btn btn-primary btn-block',
                        'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
                        'browseLabel' => 'Select Photo'
                    ],
                    'options' => ['accept' => 'image/*']
                ]) .
                $form->field($model, 'dormitory')->widget(Select2::class, [
                    'data' => ArrayHelper::map(Dormitory::find()->asArray()->all(), 'id_dormitory', 'name_dormitory'),
                    'size' => Select2::SMALL,
                    'options' => ['placeholder' => Yii::t('app', 'Select a dormitory ...'), 'multiple' => true],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]) .
                Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']),

        ],
    ];
}
echo TabsX::widget([
    'height' => TabsX::SIZE_LARGE,
    'items' => $items,
    'position' => TabsX::POS_ABOVE,
    'encodeLabels' => false
]);
ActiveForm::end();
?>