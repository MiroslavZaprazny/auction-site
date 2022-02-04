<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="container-fluid main-section">
    <h2 class="card-title"> <?= $carInfo->carModelYear . ' ' . $carInfo->carMake  . ' ' . $carInfo->carModel  ?>
    </h2>
    <div>
        <?= Html::img('@web/' . $carInfo->carImage, ['class' => 'viewCarImg']) ?>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-borderless mt-5 table-specs">
                <thead>
                    <tr class="row mx-0">
                        <th>
                            Znacka
                        </th>
                        <th>
                            Model
                        </th>
                        <th>
                            Počet najazdenych km
                        </th>
                        <th>
                            Karoseria
                        </th>
                        <th>
                            Pohanacia sustava
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
                        <td>
                            <?= $carInfo->carBodyStyle ?>
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
                            Objem Motora
                        </th>
                        <th>
                            Výkon(kw)
                        </th>
                        <th>
                            Prevodovka
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
                            <?= $carInfo->carHorsePower ?>
                        </td>
                        <td>
                            <?= $carInfo->carTransmission ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h2 class="mt-3">Prečo sa majitel rozhodol o predaji auta?</h2>
        <h2 class="mt-5">Poskodenie na aute</h2>
        <?php
        if (!$carInfo->carDamage == 0) {

            foreach ($carDmg as $dmg) {
                echo "<li>$dmg</li>";
            }
        } else {
            echo "<p>Auto nema ziadne poskodenie </p>";
        }
        ?>
    </div>
    <?php
    if (!Yii::$app->user->isGuest) {
    ?>
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
        <div class="row mt-5">
            <div class="col">
                <?= $form->field($auctionInfo, 'username')->hiddenInput(['value' => $username])->label(false) ?>
                <?= $form->field($auctionInfo, 'carId')->hiddenInput(['value' => $carInfo->carId])->label(false) ?>
                <?= $form->field($auctionInfo, 'bid')->textInput(['value' => '', 'placeholder' => 'Zadajte sumu v €']) ?>
                <button type="submit" class="btn btn-success mt-3">
                    <i class="mdi mdi-content-save m-r-5"></i><?= Yii::t('app', 'Uložiť') ?>
                </button>
            </div>
        </div>
    <?php ActiveForm::end();
    } ?>
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