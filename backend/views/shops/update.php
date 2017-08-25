<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Shops */

$this->title = 'Update Shops: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Shops', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdShop, 'url' => ['view', 'id' => $model->IdShop]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shops-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
