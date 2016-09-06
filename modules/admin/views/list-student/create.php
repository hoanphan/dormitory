<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ListStudent */

$this->title = 'Create List Student';
$this->params['breadcrumbs'][] = ['label' => 'List Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="list-student-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
