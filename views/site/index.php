<?php

use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<div class="container main-section">
    <div class="row">
        <?php foreach ($auctionItems as $item) { ?>
            <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center">
                <div class="card m-5" style="width: 20rem; border-style:none">
                    <a href="#">
                        <img src="../img/porsche.png " class="card-img-top" alt="...">
                    </a>

                    <div class="card-body">
                        <h5 class="card-title"><?= $item->auctionTitle ?></h5>
                        <p class="card-text"> <?= $item->auctionText ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!--    <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center">-->
        <!--        <div class="card m-5" style="width: 18rem;">-->
        <!--            <img src="../img/porsche.png" class="card-img-top" alt="...">-->
        <!--            <div class="card-body">-->
        <!--                <h5 class="card-title">Card title</h5>-->
        <!--                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
        <!---->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center">-->
        <!--        <div class="card m-5" style="width: 18rem;">-->
        <!--            <img src="../img/porsche.png" class="card-img-top" alt="...">-->
        <!--            <div class="card-body">-->
        <!--                <h5 class="card-title">Card title</h5>-->
        <!--                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
        <!---->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center">-->
        <!--        <div class="card m-5" style="width: 18rem;">-->
        <!--            <img src="../img/porsche.png" class="card-img-top" alt="...">-->
        <!--            <div class="card-body">-->
        <!--                <h5 class="card-title">Card title</h5>-->
        <!--                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
        <!---->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center ">-->
        <!--        <div class="card m-5" style="width: 18rem;">-->
        <!--            <img src="../img/porsche.png" class="card-img-top" alt="...">-->
        <!--            <div class="card-body">-->
        <!--                <h5 class="card-title">Card title</h5>-->
        <!--                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
        <!---->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center">-->
        <!--        <div class="card m-5" style="width: 18rem;">-->
        <!--            <img src="../img/porsche.png" class="card-img-top" alt="...">-->
        <!--            <div class="card-body">-->
        <!--                <h5 class="card-title">Card title</h5>-->
        <!--                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
        <!---->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
    </div>
</div>