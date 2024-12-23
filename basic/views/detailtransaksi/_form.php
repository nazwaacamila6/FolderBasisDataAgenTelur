<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\detailtransaksi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detailtransaksi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_Detailtransaksi')->textInput() ?>

    <?= $form->field($model, 'id_Transaksi')->textInput() ?>

    <?= $form->field($model, 'Jumlahpemtelur')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
