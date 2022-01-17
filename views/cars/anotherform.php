<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Auctions */
/* @var $user app\models\User */
/* @var $cars app\models\Cars */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="container-fluid my-4">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form/data']]); ?>

    <h2 class="form-header">
        Povedzte nám o svojom aute
    </h2>


    <p class="pb-4 form-text ">
        Budeme ešte od Vás potrebovať technické parametre Vášho auta
    </p>

    <div class="row mb-4">
        <div class="col">
            <div class="form-items">

            </div>
        </div>

        <div class="col">
            <div class="form-items">

            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-items mb-3 ">
            </div>
        </div>

        <div class="col">
            <div class="form-items mb-3 ">

            </div>
        </div>
    </div>

    <div class="form-items mb-4">

    </div>

    <div class="form-items mb-1">
    </div>



    <div class="form-group mt-3">
        <?= Html::submitButton('Odoslať', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>