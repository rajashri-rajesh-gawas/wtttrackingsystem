<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\TblloginAccess */

// $this->title = $model->login_access_id;
// $this->params['breadcrumbs'][] = ['label' => 'Tbllogin Accesses', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbllogin-access-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->login_access_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->login_access_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <a class="btn btn-primary btn-md" href="<?php echo Url::toRoute('tbllogin-access/index');?>">Back</a>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'login_access_id',
            'admin_id',
            's_id',
            'emp_id',
            'student_id',
            'email_id:email',
            'password',
            'user_type',
            // 'is_deleted',
        ],
    ]) ?>

</div>
