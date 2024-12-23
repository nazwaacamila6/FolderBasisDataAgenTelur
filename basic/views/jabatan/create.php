<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\jabatan */

$this->title = 'Create Jabatan';
$this->params['breadcrumbs'][] = ['label' => 'Jabatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jabatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
