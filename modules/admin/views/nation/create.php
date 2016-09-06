<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Nation */

$this->title = 'Create Nation';
$this->params['breadcrumbs'][] = ['label' => 'Nations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
