<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\pemasokan */

$this->title = 'Update Pemasokan: ' . $model->id_Pemasokan;
$this->params['breadcrumbs'][] = ['label' => 'Pemasokans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_Pemasokan, 'url' => ['view', 'id' => $model->id_Pemasokan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pemasokan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
