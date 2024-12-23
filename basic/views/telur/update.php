<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\telur */

$this->title = 'Update Telur: ' . $model->id_Telur;
$this->params['breadcrumbs'][] = ['label' => 'Telurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_Telur, 'url' => ['view', 'id' => $model->id_Telur]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="telur-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
