<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Emple */

$this->title = 'Create Emple';
$this->params['breadcrumbs'][] = ['label' => 'Emples', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emple-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
