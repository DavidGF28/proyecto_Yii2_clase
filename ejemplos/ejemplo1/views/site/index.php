<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Yii::$app->name;
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Ejemplo numero1</h1>

        <p class="lead">Trabajando con aplicaciones en Yii2</p>

        <p><a class="btn btn-lg btn-success" href="<?=Url::to(['pelicula/index'])?>">Gestion de Peliculas</a></p>
        <p>
            <?= Html::a('Gestion de Actores', ['actor/index'] ,['class' => "btn btn-lg btn-success"]) ?>
        </p>
    </div>
    
</div>
