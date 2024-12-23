<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\pengguna */

$this->title = 'Update Pengguna: ' . $model->id_Pengguna;
$this->params['breadcrumbs'][] = ['label' => 'Penggunas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_Pengguna, 'url' => ['view', 'id' => $model->id_Pengguna]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengguna-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
