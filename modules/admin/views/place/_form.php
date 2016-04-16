<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datecontrol\DateControl;
/* @var $this yii\web\View */
/* @var $model app\models\Place */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="place-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-8">
            <?= $form->field($model, 'name')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'start_date')->widget(DateControl::classname(), [
                    'saveFormat' => 'php:U',
                    'language' => 'it',
                    'type' => 'datetime',
                    'options' => [
                        'removeButton' => false
                    ]
                ]
            );
            ?>
        </div>
    </div>

    <?= $form->field($model, 'history')->widget(\yii\redactor\widgets\Redactor::className(), []) ?>

    <?= $this->render('../common/_map',['model' => $model, 'form' => $form, 'name' => 'place']) ?>
    <?= $form->field($model, 'lat')->textInput() ?>
    <?= $form->field($model, 'lng')->textInput() ?>

    <?= $this->render('../common/_images',['model' => $model]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
