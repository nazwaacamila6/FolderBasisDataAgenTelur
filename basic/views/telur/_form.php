<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\telur */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="telur-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_Telur')->textInput() ?>

    <?= $form->field($model, 'Jenis_telur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'JumlahTelur')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
