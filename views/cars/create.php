<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Auctions */
/* @var $user app\models\User */
/* @var $cars app\models\Cars */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Vytvorenie aukcie';

?>

<div class="form my-4">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);  ?>
    <h2 class="form-header">
        Povedzte nám o svojom aute
    </h2>
    <p class="pb-4 form-text ">
        Dajte nám nejaké základné informácie aute, ktoré by ste chceli predať.
        Budeme tiež potrebovať podrobnosti o stave názvu auta, ako aj 10 fotografií,
        ktoré zdôrazňujú stav exteriéru a interiéru auta.
    </p>
    <div class="row mt-4">
        <div class="form-items mb-3">
            <?= $form->field($carInfo, 'carMake',)->textInput(['placeholder' => 'Napíšte značku auta... napr. Opel, Toyota']) ?>
        </div>
        <div class="form-items mb-3">
            <?= $form->field($carInfo, 'carModel')->textInput(['placeholder' => 'Napíšte model auta... napr. Astra, Yaris']) ?>
        </div>
        <div class="form-items mb-3 ">
            <?= $form->field($carInfo, 'carModelYear')->textInput(['placeholder' => 'Napr. 1999, 2015, 2019']) ?>
        </div>
        <div class="form-items mb-3 ">
            <?= $form->field($carInfo, 'carMilage')->textInput(['placeholder' => 'Napr. 25900, 195358']) ?>
        </div>
        <div class="form-items mb-4">
            <?= $form->field($carInfo, 'carFeatures')->textInput(['placeholder' => 'Napr. Vyhrievaný volant, Parkovacie senzory']) ?>
        </div>
        <div class="form-items mb-1 upload-btn-wrapper">
            <?= $form->field($img, 'imageFiles[]')->fileInput(['multiple' => true]) ?>
        </div>
        <div class="form-items">
            <div class="form-group mt-3">
                <?= Html::submitButton('Pokarčovať', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>