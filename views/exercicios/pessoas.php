<?php

use yii\widgets\LinkPager;

?>

<h1>Pessoas</h1>

<hr>

<ul>

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
    // $options => ['class' => 'pagination'],
    'linkOptions' => ['class' => 'page-link btn btn-primary'],
    'options' => ['class' => 'pagination'],
    'prevPageLabel' => '<span aria-hidden="true">&laquo;</span>', 
    'nextPageLabel' => '<span aria-hidden="true">&raquo;</span>', 
]); 