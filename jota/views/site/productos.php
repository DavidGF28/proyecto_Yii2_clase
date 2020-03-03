<?php

use yii\widgets\ListView;
?>
<div class="row">
<?= ListView::widget([
    'dataProvider' => $data,
    'itemView' => '_productos',
]);
?>
</div>
