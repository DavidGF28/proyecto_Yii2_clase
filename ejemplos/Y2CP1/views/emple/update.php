<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Emple */

$this->title = 'Update Emple: ' . $model->emp_no;
$this->params['breadcrumbs'][] = ['label' => 'Emples', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->emp_no, 'url' => ['view', 'id' => $model->emp_no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="emple-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
