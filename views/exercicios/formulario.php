<?php

use \yii\bootstrap5\ActiveForm;
use \yii\helpers\Html;

?>

<h2>Formulario de cadastro - Yii2</h2>
<hr>

<?php $form = ActiveForm::begin() ?>

    <?= $form->field($model, 'nome') ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'idade') ?>

    <div class="form-group">

        <?= Html::submitButton('Enviar Dados', ['class' => 'btn btn-success']) ?>

    </div>

<?php ActiveForm::end() ?>