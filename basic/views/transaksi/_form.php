<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\transaksi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaksi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_Transaksi')->textInput() ?>

    <?= $form->field($model, 'id_Telur')->textInput() ?>

    <?= $form->field($model, 'id_Pengguna')->textInput() ?>

    <?= $form->field($model, 'id_Pelanggan')->textInput() ?>

    <?= $form->field($model, 'Jumlah_transaksi')->textInput() ?>

    <?= $form->field($model, 'Tanggal_transaksi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
