<?php
use yii\helpers\Html;
?>
<div class="col-lg-6">
    <div class="thumbnail">
        <?= Html::img("@web/imgs/" . $model->foto,[
            "class"=>"foto1",
        ]); ?>
      <div class="caption">
        <h3><?= $model->id ?></h3>
        <p><?= $model->nombre ?></p>
        <p><?= $model->descripcion ?></p>
      </div>
    </div>
  </div>