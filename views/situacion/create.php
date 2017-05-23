<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Situacion */

$this->title = Yii::t('app', 'Create Situacion');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Situacions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="situacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
