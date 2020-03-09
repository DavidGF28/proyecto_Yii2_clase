<?php
use yii\widgets\DetailView;
use yii\helpers\Html;
use yii\grid\GridView;

echo DetailView::widget([
    'model' => $modelo,
    'attributes' => [
        'id',       
        'nombre',
        'descripcion',                                
        [                                                  
            'label' => 'foto',
            'format'=>'raw',
            'value' => Html::img("@web/imgs/".$modelo->foto,[
                'class'=>'foto2',
            ]),
            'contentOptions' => ['style' => 'text-align:center'],     
        ],
   ],
]);

echo GridView::widget([
    'dataProvider' => $dataProvider,
     'columns' => [
        'id',
         'nombre',
         'precio',
         'descripcion',
        [
            'label'=>'foto',
            'format'=>'raw',
            'contentOptions'=>['style'=>'text-align:center'],
            'value' => function($data){
                return Html::img("@web/imgs/" . $data->foto,
                        [
                            'alt'=>$data->nombre,
                            'class'=>'foto1',
                        ]);
            }
        ],
	],
]);
