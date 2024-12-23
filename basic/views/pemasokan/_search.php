<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PemasokanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemasokan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_Pemasokan') ?>

    <?= $form->field($model, 'id_Supplier') ?>

    <?= $form->field($model, 'id_Telur') ?>

    <?= $form->field($model, 'Tanggal_dipasok') ?>

    <?= $form->field($model, 'Jumlah_pasok') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
