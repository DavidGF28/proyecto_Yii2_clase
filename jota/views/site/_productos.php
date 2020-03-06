<?php
use yii\helpers\Html;
use app\widgets\miniaturas\Miniaturas;


echo Miniaturas::widget([
    "foto"=>$model->foto,
    "titulo"=>$model->id,
    "nombre"=>$model->nombre,
    "descripcion"=>$model->descripcion,
]);
