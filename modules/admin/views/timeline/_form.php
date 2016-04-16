<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datecontrol\DateControl;

/* @var $this yii\web\View */
/* @var $model app\models\Timeline */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="timeline-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'person')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\People::find()->all(),'id','surname')) ?>

    <?= $form->field($model, 'date')->widget(DateControl::classname(), [
            'saveFormat' => 'php:U',
            'language' => 'it',
            'type' => 'datetime',
            'options' => [
                'removeButton' => false
            ]
        ]
    );
    ?>
    
    <?= $this->render('../common/_images',['model' => $model]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
