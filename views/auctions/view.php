<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\UploadedFile;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>



<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form/data']]); ?>
<div class="container main-section">
    <h2 class="card-title"> <?= $auctionItems->auctionTitle ?></h2>
    <p class="card-text"> </p>
    <p class="card-text"> </p>

    <div class="row">
        <div class="col">
            <table>
                <th>Znacka
                <td> </td>
                </th>
                <th>Model
                <td> </td>
                </th>
                <th>Najazdene km
                <td> </td>
                </th>
                <th>Karoseria
                <td> </td>
                </th>
            </table>
        </div>
        <div class="col">
            <table>
                <th>Motor
                <td> </td>
                </th>
                <th>Poháňacia sústava
                <td> </td>
                </th>
                <th>Prevodovka
                <td> </td>
                </th>
                <th>Vokajsia Farba
                <td> </td>
                </th>
            </table>
        </div>
    </div>
    <?php ActiveForm::end(); ?>