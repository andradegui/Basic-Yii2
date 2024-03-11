<?php

use yii\widgets\LinkPager;

?>

<h1>Pessoas</h1>

<hr>

<ul class="pagination">

    <?php foreach($pessoas as $pessoa) :?>

        <li>

            <?= $pessoa->nome . ' - ' .  $pessoa->email ?> <br>

            <small>
                <?= $pessoa->cidade . ' (' . $pessoa->estado . ')'?>
            </small>

        </li>

    <?php endforeach ?>

</ul>

<?= LinkPager::widget([
    'pagination' => $pagination,
    'options' => ['class' => 'pagination'],
]); 