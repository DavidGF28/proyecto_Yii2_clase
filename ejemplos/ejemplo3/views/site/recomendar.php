<?php
    use yii\helpers\Html;
    
    echo Html::img("@web/imgs/flor.png", ["class"=>"fotoFlor"]);
    ?>

<div>
    <?=$dato->nombre?>
</div>

<div>
    <?=$dato->descripcion?>
</div>