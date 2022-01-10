<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Auctions */
/* @var $user app\models\User */
/* @var $cars app\models\Cars */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="form py-4">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form/data']]); ?>

    <h2 class="form-header">
        Povedzte nám o svojom aute
    </h2>


    <p class="pb-5 form-text ">
        Dajte nám nejaké základné informácie o sebe a aute, ktoré by ste chceli predať.
        Budeme tiež potrebovať podrobnosti o stave názvu auta, ako aj 10 fotografií,
        ktoré zdôrazňujú stav exteriéru a interiéru auta.
    </p>

    <div class="row pb-4">
        <div class="col">
            <div class="form-items">
                <?= $form->field($car, 'carMake',)->textInput(['placeholder' => 'Napíšte značku auta... napr. Opel, Toyota'],) ?>
            </div>
        </div>

        <div class="col">
            <div class="form-items">
                <?= $form->field($car, 'carModel')->textInput(['placeholder' => 'Napíšte model auta... napr. Astra, Yaris']) ?>
            </div>
        </div>
    </div>

    <div class="form-items pb-4">
        <?= $form->field($car, 'carFeatures')->textInput(['placeholder' => 'Napr. Vyhrievaný volant, Parkovacie senzory']) ?>
    </div>

    <div class="form-items pb-3 ">
        <?= $form->field($car, 'carMilage')->textInput(['placeholder' => 'Napr. 25900, 195358']) ?>
    </div>

    <div class="form-items pb-1">
        <?php
        // <?= $form->field($model, 'file')->fileInput([]) 
        ?>
    </div>

    <div class="row pb-1">
        <div class="form-items col-sm-3 col-lg-6">
            <?= $form->field($car, 'carFeatures')->textarea(['placeholder' => 'Popíšte mechanické poškodenie auta', 'id' => 'popup', 'style' => 'display: none; resize:none;', 'rows' => '4']) ?>
            <button type="button" onclick="clickMe()" class="btn btn-primary btn-sm">Ano</button>
            <button class="btn btn-primary btn-sm">No</button>
        </div>
        <div class="form-items col-sm-3 col-lg-6">
            Je auto alebo bolo v minulosti upravovane
            <button type="button" onclick="clickMe2()" class="btn btn-primary btn-sm">Ano</button>
            <button class="btn btn-primary btn-sm">No</button>

            <textarea type="text" id="popup2" style="display: none; resize:none;" class="form-control mt-2 " rows="4" placeholder="Popíšte úpravy na vozidle"></textarea>
        </div>
    </div>

    <div class="form-group pt-3">
        <?= Html::submitButton('Odoslať', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>