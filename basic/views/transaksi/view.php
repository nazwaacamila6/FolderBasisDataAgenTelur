<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\transaksi */

$this->title = $model->id_Transaksi;
$this->params['breadcrumbs'][] = ['label' => 'Transaksis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="transaksi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_Transaksi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_Transaksi], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_Transaksi',
            'id_Telur',
            'id_Pengguna',
            'id_Pelanggan',
            'Jumlah_transaksi',
            'Tanggal_transaksi',
        ],
    ]) ?>

</div>
