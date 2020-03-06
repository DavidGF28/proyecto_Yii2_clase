<?php
use yii\helpers\Html;
?>

<div class="col-lg-6">
    <div class="thumbnail">
        <?= Html::img("@web/imgs/" . $foto,[
            "class"=>"foto1",
        ]); ?>
      <div class="caption">
        <h3><?= $titulo ?></h3>
        <p><?= $nombre ?></p>
        <p><?= $descripcion ?></p>
      </div>
    </div>
  </div>