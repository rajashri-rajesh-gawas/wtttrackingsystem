<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Tbladmin */

$this->title = 'Create Tbladmin';
$this->params['breadcrumbs'][] = ['label' => 'Tbladmins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbladmin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
