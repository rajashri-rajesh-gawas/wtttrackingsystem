<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TblloginAccess */

$this->title = 'Add Login Access';
// $this->params['breadcrumbs'][] = ['label' => 'Tbllogin Accesses', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbllogin-access-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
