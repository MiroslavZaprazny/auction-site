<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap5\ActiveForm */
/* @var $model app\models\SignupForm */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Sign up';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1 class="form-header"><?= Html::encode($this->title) ?></h1>

    <p class="form-text">Please fill out the following fields to signup:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'signup-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-12\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col col-form-label'],
        ],
    ]); ?>

    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['placeholder' => 'email.example@gmail.com']) ?>

    <?= $form->field($model, 'userFullName')->textInput(['placeholder' => 'Napr. Janko Mrkvička']) ?>

    <?= $form->field($model, 'password')->passwordInput() ?>

    <?= $form->field($model, 'password_repeat')->passwordInput() ?>

    <div class="form-group">
        <div class="pt-2">
            <?= Html::submitButton('Sign up', ['class' => 'btn btn-outline-dark', 'name' => 'login-button']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>