<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\UploadedFile;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form/data']]); ?>
<div class="container main-section">
    <div class="row">
        <?php foreach ($auctionItems as $item) { ?>
            <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center">
                <div class="card m-5" style="width: 20rem; border-style:none">

                    <?php //Html::img($item->auctionImg) 
                    ?>



                    <div class="card-body">

                        <div class="col">
                            <span>
                                <?=
                                Html::a('Fotka', ['auctions/view', 'id' => $item->auctionId], ['class' => 'label label-primary']);
                                ?>
                            </span>
                        </div>

                        <div class="col pt-5">
                            <h5 class="card-title px-2"><?= $item->auctionTitle ?> </h5>
                            <p class="card-text px-2"> <?= $item->auctionText ?> </p>
                            <p class="card-text px-2"> <?= $item->auctionPrice . '€' ?> </p>

                        </div>

                    </div>
                </div>
            </div>
        <?php } ?>
        <?php ActiveForm::end(); ?>
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