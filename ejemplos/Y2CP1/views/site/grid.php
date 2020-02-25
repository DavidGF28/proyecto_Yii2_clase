<?php
use yii\grid\GridView;
?>


<?php
echo GridView::widget([
    'dataProvider'=>$adp,
    'columns'=>$columns,
]);
?>