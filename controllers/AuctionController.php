<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Cars;

class AuctionController extends Controller
{
    public function actionView(int $id)
    {
        $item = Cars::findOne(['carId' => $id]);
        return $this->render('/cars/view');
    }
}