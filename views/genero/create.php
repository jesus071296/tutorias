<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Genero */

$this->title = Yii::t('app', 'Create Genero');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Generos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="genero-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
