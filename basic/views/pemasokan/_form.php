<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\pemasokan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemasokan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_Pemasokan')->textInput() ?>

    <?= $form->field($model, 'id_Supplier')->textInput() ?>

    <?= $form->field($model, 'id_Telur')->textInput() ?>

    <?= $form->field($model, 'Tanggal_dipasok')->textInput() ?>

    <?= $form->field($model, 'Jumlah_pasok')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
