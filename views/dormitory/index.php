<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\ModelSeach\DormitorySeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dormitories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dormitory-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dormitory', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_dormitory',
            'name_dormitory',
            'layer_number',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
