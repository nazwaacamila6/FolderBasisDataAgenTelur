<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\supplier */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supplier-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_Supplier')->textInput() ?>

    <?= $form->field($model, 'Nama_supplier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'No_telepon')->textInput() ?>

    <?= $form->field($model, 'Alamat')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
