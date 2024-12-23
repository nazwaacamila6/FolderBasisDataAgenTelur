<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\detailtransaksi */

$this->title = 'Update Detailtransaksi: ' . $model->id_Detailtransaksi;
$this->params['breadcrumbs'][] = ['label' => 'Detailtransaksis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_Detailtransaksi, 'url' => ['view', 'id' => $model->id_Detailtransaksi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detailtransaksi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
