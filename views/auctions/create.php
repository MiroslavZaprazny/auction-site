<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Auctions */
/* @var $user app\models\User */
/* @var $cars app\models\Cars */

$this->title = 'Create Auctions';
?>
<div class="auctions-create">

    <?= $this->render('_form', [
        // 'model' => $model,
        // 'user' => $user,
        'car' => $car
    ]); ?>