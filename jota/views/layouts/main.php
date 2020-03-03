<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;




AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'encodeLabels'=> false,
        'items' => [
            ['label' => '<i class="glyphicon glyphicon-home"></i> Inicio', 'url' => ['/site/index']],
            ['label' => '<i class="glyphicon glyphicon-eur"></i> Ofertas', 'url' => ['/site/ofertas']],
            ['label' => '<i class="glyphicon glyphicon-barcode"></i> Productos', 'url' => ['/site/productos']],
            ['label' => '<i class="glyphicon glyphicon-shopping-cart"></i> Categorias', 'url' => ['/site/categorias']],
            ['label' => '<i class="glyphicon glyphicon-list"></i> Nosotros','items' => [
                ['label' => '<i class="glyphicon glyphicon-map-marker"></i> Donde Estamos', 'url' => ['/site/donde']],
                ['label' => '<i class="glyphicon glyphicon-user"></i> Quienes Somos', 'url' => ['/site/donde']],
                ['label' => '<i class="glyphicon glyphicon-barcode"></i> Nuestros Productos', 'url' => ['/site/donde']],
                '<li class="divider">&nbsp</li>',
                ['label' => '<i class="glyphicon glyphicon-info-sign"></i> Informacion', 'url' => ['/site/donde']],    
            ]],
            ['label' => '<i class="glyphicon glyphicon-phone-alt"></i> Contacto', 'url' => ['/site/contacto']],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
