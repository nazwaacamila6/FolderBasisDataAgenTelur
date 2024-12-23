<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\transaksi */

$this->title = 'Update Transaksi: ' . $model->id_Transaksi;
$this->params['breadcrumbs'][] = ['label' => 'Transaksis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_Transaksi, 'url' => ['view', 'id' => $model->id_Transaksi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transaksi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
