<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->registerJsFile("@web/js/buttonClick.js");
$this->title = 'Pokračovanie';
?>
<div class="container-fluid my-4">

    <?php $form = ActiveForm::begin(); ?>

    <h2 class="form-header">
        Povedzte nám o svojom aute
    </h2>

    <p class="pb-4 form-text ">
        Budeme od Vás ešte potrebovať technické parametre Vášho auta
    </p>

    <div class="row mt-4">
        <div class="form-items mb-3">
            <?= $form->field($carInfo, 'carCylinders',)->textInput(['placeholder' => 'Napíšte počet valcov... Napr. 4, 6, 8', 'autocomplete' => 'off', 'required' => true]) ?>
        </div>
        <div class="form-items mb-3">
            <?= $form->field($carInfo, 'carEngineDisplacement')->textInput(['placeholder' => 'Napíšte objem motora... Napr. 2000, 3500, 900', 'autocomplete' => 'off', 'required' => true]) ?>
        </div>
        <div class="form-items mb-3 ">
            <?= $form->field($carInfo, 'carHorsePower')->textInput(['placeholder' => 'Napíšte výkon auta v kw... Napr. 80, 150, 400', 'autocomplete' => 'off', 'required' => true]) ?>
        </div>
        <div class="form-items">
            <div class="form-group mb-3">
                <select class="form-select" name="Cars[drivetrain]" id="drivetrain-type">
                    <option value="0">
                        Vyberte poháňaciu sústavu
                    </option>
                    <?php
                    foreach ($drivetrainTypes as $drivetrain) {
                        echo "<option value = '{$drivetrain->id}'> {$drivetrain->type} </option>";
                    } ?>
                </select>
            </div>
        </div>
        <div class="form-items">
            <div class="form-group mb-3">
                <select class="form-select" name="Cars[transmission]" id="transmission-type">
                    <option value="0">
                        Vyberte typ prevodovky
                    </option>
                    <?php
                    foreach ($trans as $tran) {
                        echo "<option value = '{$tran->id}'> {$tran->type} </option>";
                    } ?>
                </select>
            </div>
        </div>


        <div class="form-items pt-3">
            <?= $form->field($carInfo, 'damage')->textarea(['placeholder' => 'Popíšte mechanické poškodenie auta', 'id' => 'popup', 'style' => 'display: none; resize:none;', 'rows' => '4']) ?>
            <div class="form-group row pt-2">
                <div class="col-lg-2">
                    <input type="checkbox" class="btn-check" id="flaws_yes" autocomplete="off">
                    <label class="btn btn-outline-dark" for="flaws_yes" onclick="clickMe()">Ano</label>
                </div>
                <div class="col-lg-2">
                    <input type="checkbox" class="btn-check" id="flaws_no" name="Cars[carDamage]" autocomplete="off " value="0">
                    <label class="btn btn-outline-dark" for="flaws_no">Nie</label>
                </div>
            </div>
        </div>
        <div class="form-items pt-3">
            <?= $form->field($carInfo, 'modifications')->textarea(['placeholder' => 'Popíšte úpravy robené na aute', 'id' => 'popup2', 'style' => 'display: none; resize:none;', 'rows' => '4']) ?>
            <div class=" form-group row pt-2">
                <div class="col-lg-2">
                    <input type="checkbox" class="btn-check" id="modifications_yes"" autocomplete=" off">
                    <label class="btn btn-outline-dark" for="modifications_yes" onclick="clickMe2()">Ano</label>
                </div>
                <div class="col-lg-2">
                    <input type="checkbox" class="btn-check" id="modifications_no" name='Cars[modifications]' value="0" autocomplete="off">
                    <label class="btn  btn-outline-dark" for="modifications_no">Nie</label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-items">
    <div class="form-group mt-3">
        <?= Html::submitButton('Odoslať formulár', ['class' => 'btn btn-success']) ?>
    </div>
</div>

<?php ActiveForm::end(); ?>
</div>
<?php
// $csrf = "'" . Yii::$app->request->csrfParam . "':'" . Yii::$app->request->getCsrfToken() . "'";
// $js = <<<JS
//     $(function() {
//         $('.dattable').DataTable({
//             order: []
//         });
//     });
// JS;
// $this->registerJS($js);
