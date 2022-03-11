<?php

use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->registerJsFile("@web/js/car-images.js");
$this->title = $carInfo->carMake  . ' ' . $carInfo->carModel;
?>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<div class="container-fluid main-section">
    <h2 class="card-title"> <?= $carInfo->carModelYear . ' ' . $carInfo->carMake  . ' ' . $carInfo->carModel  ?>
    </h2>
    <?php
    $imgName = 'empty.jpg';
    if (!empty($carInfo->images)) {
        $imgName = $carInfo->images[0]->imgName;
    }
    ?>
    <div class="row images">
        <div class="col">
            <?= Html::img('@web/uploads/' . $imgName, ['class' => 'view-car car', 'id' => 'car']) ?>
        </div>
        <div class="col">
            <?php
            for ($i = 1; $i < count($carInfo->images); $i++) {
                if ($i == 4) {
                    echo "<div class='click-for-more-container'>
                                <div class='click-for-more'>
                                    <p class='pt-5 click-for-more-text'>
                                       <strong> Kliknite pre viac </strong>
                                    </p>
                                </div>
                            </div>";
                    echo (Html::img('@web/uploads/' . $carInfo->images[$i]->imgName, ['class' => 'view-car side-car car mb-2 click-for-more-img']));
                    echo "</div>";
                } elseif ($i >= 5) {
                    echo (Html::img('@web/uploads/' . $carInfo->images[$i]->imgName, ['class' => 'view-car side-car car mb-2', 'hidden' => true]));
                } else {
                    echo (Html::img('@web/uploads/' . $carInfo->images[$i]->imgName, ['class' => 'view-car side-car car mb-2']));
                }
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-borderless mt-5 table-specs">
                <thead>
                    <tr class="row mx-0">
                        <th>
                            Značka
                        </th>
                        <th>
                            Model
                        </th>
                        <th>
                            Počet najazdených km
                        </th>
                        <th>
                            Pohánacia sústava
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="row">
                        <td>
                            <?= $carInfo->carMake ?>
                        </td>
                        <td>
                            <?= $carInfo->carModel ?>
                        </td>
                        <td>
                            <?= $carInfo->carMilage . ' ' . 'km' ?>
                        </td>
                        <?php
                        if ($carInfo->drivetrain == 1) {
                            echo "<td>RWD</td>";
                        } elseif ($carInfo->drivetrain == 2) {
                            echo "<td>FWD</td>";
                        } elseif ($carInfo->drivetrain == 3) {
                            echo "<td>AWD</td>";
                        } else {
                            echo "<td>4WD</td>";
                        }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col">
            <table class="table table-borderless mt-5 table-specs">
                <thead>
                    <tr class="row mx-0">
                        <th>
                            Počet valcov
                        </th>
                        <th>
                            Objem Motora(cc)
                        </th>
                        <th>
                            Výkon(kw)
                        </th>
                        <th>
                            Typ prevodovky
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="row">
                        <td>
                            <?= $carInfo->carCylinders ?>
                        </td>
                        <td>
                            <?= $carInfo->carEngineDisplacement ?>
                        </td>
                        <td>
                            <?= $carInfo->carHorsePower . 'KW' ?>
                        </td>
                        <?php
                        if ($carInfo->transmission == 1) {
                            echo "<td>Manuál</td>";
                        } elseif ($carInfo->transmission == 2) {
                            echo "<td>Automat</td>";
                        }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row mt-5">
            <h2> Pozoruhodné možnosti/funkcie</h2>
            <?php
            if (!$carInfo->carFeatures == NULL) {
                foreach ($features as $feature) {
                    echo "<li class='mx-3'>$feature</li>";
                }
            } else {
                echo "<p class = 'mx-2'>Auto nemá žiadne pozoruhodné možnosti/funkcie </p>";
            }

            ?>
        </div>
        <div class="row mt-5">
            <h2>Poškodenie na aute</h2>
            <?php
            if (!$carInfo->damage == NULL) {

                foreach ($carDmg as $dmg) {
                    echo "<li class='mx-3'>$dmg</li>";
                }
            } else {
                echo "<p class = 'mx-2'>Auto nemá žiadne poškodenie </p>";
            }
            ?>
        </div>
        <div class="row mt-5">
            <h2>Úpravy na aute</h2>
            <?php
            if (!$carInfo->modifications == NULL) {
                foreach ($mods as $mod) {
                    echo "<li class='mx-3'>$mod</li>";
                }
            } else {
                echo "<p class = 'mx-2'>Auto nemá žiadne úpravy </p>";
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-borderless mt-5">
                <thead>
                    <tr>
                        <th>
                            Meno
                        </th>
                        <th>
                            Suma
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($auctions as $auction) {
                    ?>
                        <tr>
                            <td>
                                <?= $auction->username ?>
                            </td>
                            <td>
                                <?= $auction->bid . '€' ?>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col">
            <?= Alert::widget() ?>
            <?php
            if (!Yii::$app->user->isGuest) {
            ?>
                <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
                <div class="row mt-5">
                    <div class="col">
                        <?= $form->field($auctionInfo, 'username')->hiddenInput(['value' => $username])->label(false) ?>
                        <?= $form->field($auctionInfo, 'carId')->hiddenInput(['value' => $carInfo->carId])->label(false) ?>
                        <?= $form->field($auctionInfo, 'bid')->textInput(['value' => '', 'placeholder' => 'Zadajte sumu v €', 'autocomplete' => 'off']) ?>
                        <div class="form-group mt-3">
                            <?= Html::submitButton('Odoslať ponuku', ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>
                </div>
            <?php ActiveForm::end();
            } ?>
        </div>
    </div>
</div>