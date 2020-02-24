<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Depart */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="depart-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dept_no')->textInput() ?>

    <?= $form->field($model, 'dnombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'loc')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
