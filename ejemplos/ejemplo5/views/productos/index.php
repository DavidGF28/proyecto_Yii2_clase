<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Productos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Productos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'nombre',
            ['label'=>'imagen de producto',
             'attribute'=>'foto',
             'format'=>'raw',
             'contentOptions'=>['style'=>'text-align:center'],
             'value'=>function($d){
                    return Html::img("@web/imgs/" . $d->foto,['width'=>'100px']);
                }

             ],
            'fecha',
            ['label'=>'datos almacen',
             'attribute'=>'almacen',
             'format'=>'raw',
                'value'=>function($d){
                    return $d->almacen . 
                            '<br>' . 
                            $d->almacen0->nombre .
                            '<br>' .
                            $d->almacen0->direccion;
                }
            ],        
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
