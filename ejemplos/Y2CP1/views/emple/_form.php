<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Emple */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="emple-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'emp_no')->textInput() ?>

    <?= $form->field($model, 'apellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'oficio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dir')->textInput() ?>

    <?= $form->field($model, 'fecha_alt')->textInput() ?>

    <?= $form->field($model, 'salario')->textInput() ?>

    <?= $form->field($model, 'comision')->textInput() ?>

    <?= $form->field($model, 'dept_no')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
