<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblloginAccessSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Login Accesses';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbllogin-access-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add Login Access', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'login_access_id',
            'admin_id',
            's_id',
            'emp_id',
            'student_id',
            'email_id:email',
            'password',
            // 'user_type',
            // 'is_deleted',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
