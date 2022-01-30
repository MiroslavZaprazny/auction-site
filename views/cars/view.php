<?php

use Codeception\Lib\Interfaces\Web;
use Symfony\Polyfill\Intl\Idn\Info;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\UploadedFile;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="container-fluid main-section">
    <h2 class="card-title"> <?= $carInfo->carModelYear . ' ' . $carInfo->carModel . ' ' . $carInfo->carMake ?>
    </h2>
    <div>
        <?= Html::img('@web/' . $carInfo->carImage) ?>
    </div>
    <div class="row">
        <table class="table table-borderless">
            <thead>
                <tr>
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
                <tr>
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
                    <td>
                        <?= $carInfo->carDrivetrain ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="row">
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th>
                        Výkon
                    </th>
                    <th>
                        Objem Motora
                    </th>
                    <th>
                        Prevodovka
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <?= $carInfo->carHorsePower . ' ' . 'KW' ?></td>
                    <td><?= $carInfo->carEngineDisplacement . 'L' ?> </td>
                    <td><?= $carInfo->carTransmission ?> </td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="row m-t-20 m-l-10">
        <div class="col">
            <?= $form->field($auctionInfo, 'auctionPrice')->textInput(['autofocus' => true]) ?>
            <button type="submit" class="btn btn-success mr-1">
                <i class="mdi mdi-content-save m-r-5"></i><?= Yii::t('app', 'Uložiť') ?>
            </button>
        </div>
    </div>
    <table class="table table-borderless">
        <thead>
            <tr>
                <th>
                    Cena
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?= $userInfo ?>
                </td>
                <td>
                    <?= $auctionInfo->auctionPrice ?>
                </td>
            </tr>
        </tbody>
    </table>

</div>
<?php ActiveForm::end(); ?>