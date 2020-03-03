<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

?>

<?php
if(Yii::$app->session->hasFlash("enviadaInformacion")){
?>
<div class="row">
<div class="alert alert-success">
    Solicitud de contacto enviada
</div>
</div>
<?php
}
?>



<div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'nombre')
                        ->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'apellidos') ?>
                
                    <?= $form->field($model, 'correo') ?>

                    <?= $form->field($model, 'temas')->dropDownList(
                        $model->valores,
                        ['prompt'=>'Selecciona un tema']
                        );
                ?>

                    <?= $form->field($model, 'asunto')
                        ->textarea(['rows' => 6]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
