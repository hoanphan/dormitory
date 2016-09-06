<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Dormitory */

$this->title = 'Create Dormitory';
$this->params['breadcrumbs'][] = ['label' => 'Dormitories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dormitory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
