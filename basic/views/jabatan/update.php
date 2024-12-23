<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\jabatan */

$this->title = 'Update Jabatan: ' . $model->id_Jabatan;
$this->params['breadcrumbs'][] = ['label' => 'Jabatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_Jabatan, 'url' => ['view', 'id' => $model->id_Jabatan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jabatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
