<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap5\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Prihláste sa ';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="site-login">
        <h1 class="pt-3 form-header"><?= Html::encode($this->title) ?></h1>

        <p class="pt-1 form-text">Pre prihlásenie vyplnte nasledujúce polia:</p>

        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'layout' => 'horizontal',
            'fieldConfig' => [
                'template' => "{label}\n<div class=\"col-lg-12\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                'labelOptions' => ['class' => 'col col-form-label'],
            ],
        ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>


        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\" custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>

        <div class="form-group">
            <div class="col">
                <?= Html::submitButton('Prihláste sa', ['class' => 'btn btn-outline-dark', 'name' => 'login-button']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>
</div>