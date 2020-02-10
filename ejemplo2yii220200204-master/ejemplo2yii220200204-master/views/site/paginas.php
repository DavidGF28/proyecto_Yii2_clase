<?php
use yii\widgets\ListView;

/* @var $this yii\web\View */
$this->title = 'My Yii Application';

echo ListView::widget([
    'dataProvider' => $data,
    'itemView' => '_paginas',
]);
?>
