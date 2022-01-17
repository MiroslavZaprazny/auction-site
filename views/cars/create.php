<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Auctions */
/* @var $user app\models\User */
/* @var $cars app\models\Cars */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="form my-4">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form/data']]); ?>

    <h2 class="form-header">
        Povedzte nám o svojom aute
    </h2>


    <p class="pb-4 form-text ">
        Dajte nám nejaké základné informácie aute, ktoré by ste chceli predať.
        Budeme tiež potrebovať podrobnosti o stave názvu auta, ako aj 10 fotografií,
        ktoré zdôrazňujú stav exteriéru a interiéru auta.
    </p>

    <div class="row mb-4">
        <div class="col">
            <div class="form-items">
                <?= $form->field($carInfo, 'carMake',)->textInput(['placeholder' => 'Napíšte značku auta... napr. Opel, Toyota']) ?>
            </div>
        </div>

        <div class="col">
            <div class="form-items">
                <?= $form->field($carInfo, 'carModel')->textInput(['placeholder' => 'Napíšte model auta... napr. Astra, Yaris']) ?>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-items mb-3 ">
                <?= $form->field($carInfo, 'carModelYear')->textInput(['placeholder' => 'Napr. 1999, 2015, 2019']) ?>
            </div>
        </div>

        <div class="col">
            <div class="form-items mb-3 ">
                <?= $form->field($carInfo, 'carMilage')->textInput(['placeholder' => 'Napr. 25900, 195358']) ?>
            </div>
        </div>
    </div>

    <div class="form-items mb-4">
        <?= $form->field($carInfo, 'carFeatures')->textInput(['placeholder' => 'Napr. Vyhrievaný volant, Parkovacie senzory']) ?>
    </div>

    <div class="form-items mb-1">
        <?= $form->field($carInfo, 'carImage')->fileInput([])
        ?>
    </div>

    <div class="row mb-1">
        <div class="form-items col-sm-3 col-lg-6">
            <?= $form->field($carInfo, 'carDamage')->textarea(['placeholder' => 'Popíšte mechanické poškodenie auta', 'id' => 'popup', 'style' => 'display: none; resize:none;', 'rows' => '4']) ?>
            <button type="button" onclick="clickMe()" class="btn btn-outline-dark btn-sm">Ano</button>
        </div>
        <div class="form-items col-sm-3 col-lg-6">
            Je auto alebo bolo v minulosti upravovane
            <button type="button" onclick="clickMe2()" class="btn btn-outline-dark btn-sm">Ano</button>

            <textarea type="text" id="popup2" style="display: none; resize:none;" class="form-control mt-2 " rows="4" placeholder="Popíšte úpravy na vozidle"></textarea>
        </div>
    </div>

    <div class="form-group mt-3">
        <?= Html::submitButton('Pokarčovať', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>