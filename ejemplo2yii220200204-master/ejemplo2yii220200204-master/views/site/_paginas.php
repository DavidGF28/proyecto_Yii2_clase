<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="<?=Yii::getAlias("@web")?>/imgs/Sachi.png" alt="Sachi">
        <?= yii\helpers\Html::img("@web/imgs/Shinon.png",['alt'=>"Shinon"])?>
        <div class="caption">
            <h3 class="reglal"><?=$model->id?></h3>
            <p><?=$model->nombre?></p>
            <p><?=$model->apellidos?></p>
        </div>
    </div>
</div>