<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\TblloginAccess */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="col-md-offset-6">
    <a class="btn btn-primary btn-md" href="<?php echo Url::toRoute('tbllogin-access/index');?>">View Login Details</a>
</div>
<div class="tbllogin-access-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'admin_id')->textInput() ?>

    <?= $form->field($model, 's_id')->textInput() ?>

    <?= $form->field($model, 'emp_id')->textInput() ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <?= $form->field($model, 'email_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_type')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'is_deleted')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <a class="btn btn-danger" href="<?php echo Url::toRoute('site/index');?>">Cancel</a>
    </div>

    <?php ActiveForm::end(); ?>

</div>
