<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\UploadedFile;
use app\models\Cars;
/* @var $this yii\web\View */

$this->title = 'Prehľad Aukcií';
?>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
<div class="container main-section">
    <h1>Prehľad Aukcií</h1>
    <div class="row">
        <?php foreach ($carInfo as $info) {
            $imgName = 'empty.jpg';
            if (!empty($info->images)) {
                $imgName = $info->images[0]->imgName;
            }
        ?>
            <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center">
                <div class="card m-5" style="width: 20rem; border-style:none">
                    <div class="card-body">
                        <div class="col">
                            <span>
                                <?= Html::a(Html::img('@web/uploads/' . $imgName, ['class' => 'carImg']), ['cars/view', 'id' => $info->carId], ['class' => 'label label-primary']) ?>
                                <p class="card-text px-2">Ponuka: <?= $info->getMaxBid() ?>€</p>
                            </span>
                        </div>
                        <div class="col pt-2">
                            <h5 class="card-title px-2"> <?= $info->carModelYear . ' ' . $info->carMake . ' ' . $info->carModel ?> </h5>
                            <p class="card-text px-2"><?= $info->carMilage . ' km' ?> </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php }
        ?>
        <?php ActiveForm::end(); ?>
    </div>
</div>