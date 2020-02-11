<?php
    use yii\grid\GridView;

echo GridView::widget([
    'dataProvider'=> $datos,
    'columns' => [
        'id',
        'nombre',
        'descripcion',
    ],
]);
    ?>
