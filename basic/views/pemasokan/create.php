<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\pemasokan */

$this->title = 'Create Pemasokan';
$this->params['breadcrumbs'][] = ['label' => 'Pemasokans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemasokan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
