<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Church */

$this->title = 'Create Church';
$this->params['breadcrumbs'][] = ['label' => 'Churches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="church-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
