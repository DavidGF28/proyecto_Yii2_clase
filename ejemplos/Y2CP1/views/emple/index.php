<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Emples';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emple-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Emple', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'emp_no',
            'apellido',
            'oficio',
            'dir',
            'fecha_alt',
            //'salario',
            //'comision',
            //'dept_no',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
