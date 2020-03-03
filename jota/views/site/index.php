<?php
use yii\helpers\html;

$this->title = 'My Yii Application';
$this->registerCssFile("@web/css/mio.css",
        ['depends'=>[yii\bootstrap\BootstrapAsset::className()]
        ]);
//$this->registerJsFile("@web/css/mio.js",
//        ['depends'=>[yii\bootstrap\JqueryAsset::className()]
//        ]);
?>

<div>
    <h1><?= $titulo ?></h1>
</div>
<div>
    <?= Html::img("@web/imgs/" . $foto ,[
        "class"=>"foto1"
    ]) ?>
</div>
<div>
    <div><?= $texto ?></div>
</div>
