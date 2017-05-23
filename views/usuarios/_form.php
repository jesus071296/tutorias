<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuarios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'apellido_materno')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'apellido_paterno')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'edad')->textInput() ?>

    <?= $form->field($model, 'genero')->textInput() ?>

    <?= $form->field($model, 'direccion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'telefono')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'estado')->dropDownList($estados) ?>

    <?= $form->field($model, 'ciudad')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'email')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'nu_clase')->dropDownList($clase) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
