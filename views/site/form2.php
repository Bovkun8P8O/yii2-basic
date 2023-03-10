<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'Name') ?>
<?= $form->field($model, 'Birthday') ?>
<?//= $form->field($model, 'Address') ?>
<?//=$form->field($model, 'Sex') ?>
<?//= $form->input('checkbox')($model, 'Driver\'s license') ?>
<?//= $form->input('checkbox')($model, '11th grade certificate') ?>
<?//= $form->input('checkbox')($model, 'Diploma') ?>
<?//= $form->input('select')($model, 'Universiy') ?>
<?//= $form->input('radio')($model, 'Budget/Contract') ?>
<?//= $form->input('radio')($model, 'Full-time/Part-time education') ?>
<?//= $form->input('checkbox')($model, 'Scientific degree') ?>

<div class="form-group">
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>