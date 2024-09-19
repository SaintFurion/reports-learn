<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <?php $form = ActiveForm::begin([
                'fieldConfig' => [
                    'errorOptions' => ['class' => 'invalid-feedback'],
                ],
            ]) ?>

            <?= $form->field($model, 'username', ['template' => '{input} <div class="input-group-append"><div class="input-group-text"><span class="fas fa-envelope"></span></div></div>{error}', 'options' => ['class' => 'input-group mb-3']])->textInput(['placeholder' => 'Email', 'autofocus' => true, 'type'=>'email']) ?>

            <?= $form->field($model, 'password', ['template' => '{input} <div class="input-group-append"><div class="input-group-text"><span class="fas fa-lock"></span></div></div>{error}', 'options' => ['class' => 'input-group mb-3']])->passwordInput(['placeholder' => 'Password']) ?>

            <div class="row">
                <div class="col-8">
                    <?= $form->field($model, 'rememberMe', ['template' => "<div class=\"icheck-primary\">{input} <label for=\"loginform-rememberme\">Remember me</label></div>"])->textInput(['class'=>"",'type'=>'checkbox']) ?>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <?= Html::submitButton('Sign In', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                </div>
                <!-- /.col -->
            </div>
            <?php ActiveForm::end() ?>

            <p class="mb-1">
                <a href="forgot-password.html">I forgot my password</a>
            </p>
            <p class="mb-0">
                <a href="register.html" class="text-center">Register a new membership</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->