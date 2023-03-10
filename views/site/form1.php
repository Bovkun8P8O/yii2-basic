<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'Name') ?>
<?= $form->field($model, 'Birthday') ?>
<?= $form->field($model, 'Country') ?>
<?= $form->field($model, 'City') ?>
<?= $form->field($model, 'Email') ?>
<?= $form->field($model, 'Phone') ?>
<?= $form->field($model, 'Address of registration') ?>
<?= $form->field($model, 'Address of residence') ?>

<div class="form-group">
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>