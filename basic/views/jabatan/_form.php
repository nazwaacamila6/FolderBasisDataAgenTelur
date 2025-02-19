<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\jabatan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jabatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_Jabatan')->textInput() ?>

    <?= $form->field($model, 'Jabatan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
