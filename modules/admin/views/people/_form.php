<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datecontrol\DateControl;
/* @var $this yii\web\View */
/* @var $model app\models\People */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="people-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'name')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'surname')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'nickname')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'birthday')->widget(DateControl::classname(), [
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

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'quote')->textInput() ?>

    <?= $this->render('../common/_images',['model' => $model]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
