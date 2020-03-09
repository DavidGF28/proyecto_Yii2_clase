<?php

use yii\grid\GridView;
use yii\helpers\Html;



echo GridView::widget([
    'dataProvider' => $dataProvider,
     'columns' => [
        'id',
         'nombre',
         [
            'attribute'=>'descripcion',
            'content'=>function($data){
                if(mb_strlen($data->descripcion)>10){
                    return mb_substr($data->descripcion, 0,10). "...";
                }
                return $data->descripcion;
            }
        ],
        [
            'label'=>'foto',
            'format'=>'raw',
            'contentOptions'=>['style'=>'text-align:center'],
            'value' => function($data){
                return Html::a(
                        Html::img("@web/imgs/" . $data->foto,
                        [
                            'alt'=>$data->nombre,
                            'class'=>'foto1',
                        ]),
                        ['site/mostrarcategoria',
                            'id'=>$data->id]
                        );
            }
        ],
	],
]);