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

    <?php $form = ActiveForm::begin(); ?>

    <h2 class="form-header">
        Povedzte nám o svojom aute
    </h2>

    <p class="pb-4 form-text ">
        Budeme od Vás ešte potrebovať technické parametre Vášho auta
    </p>

    <div class="row mt-4">
        <div class="form-items mb-3">
            <?= $form->field($carInfo, 'carCylinders',)->textInput(['placeholder' => 'Napíšte značku auta... napr. Opel, Toyota']) ?>
        </div>
        <div class="form-items mb-3">
            <?= $form->field($carInfo, 'carEngineDisplacement')->textInput(['placeholder' => 'Napíšte model auta... napr. Astra, Yaris']) ?>
        </div>
        <div class="form-items mb-3 ">
            <?= $form->field($carInfo, 'carHorsePower')->textInput(['placeholder' => 'Napr. 1999, 2015, 2019']) ?>
        </div>

        <!-- <div class="row mb-1">
            <div class="form-items col-sm-3 col-lg-6">
                <?= $form->field($carInfo, 'carDamage')->textarea(['placeholder' => 'Popíšte mechanické poškodenie auta', 'id' => 'popup', 'style' => 'display: none; resize:none;', 'rows' => '4']) ?>
                <button type="button" onclick="clickMe()" class="btn btn-outline-dark btn-sm">Ano</button>
            </div>
            <div class="form-items col-sm-3 col-lg-6">
                Je auto alebo bolo v minulosti upravovane
                <button type="button" onclick="clickMe2()" class="btn btn-outline-dark btn-sm">Ano</button>
                <textarea type="text" id="popup2" style="display: none; resize:none;" class="form-control mt-2 " rows="4" placeholder="Popíšte úpravy na vozidle"></textarea>
            </div>
        </div> -->
        <div class="form-items">
            <div class="form-group mt-3">
                <?= Html::submitButton('Odoslať', ['class' => 'btn btn-success']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>

    </div>