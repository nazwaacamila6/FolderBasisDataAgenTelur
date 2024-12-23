<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\telur */

$this->title = 'Create Telur';
$this->params['breadcrumbs'][] = ['label' => 'Telurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="telur-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
