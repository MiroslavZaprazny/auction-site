<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Auctions;
use app\models\User;
use app\models\Cars;
use app\models\CarsForm;
use yii\web\UploadedFile;
use Yii;

class CarsController extends Controller
{
    public function actionCreate()
    {
        $car = new Cars();
        if ($car->load(Yii::$app->request->post()) && $car->validate()) {
            if ($car->file = UploadedFile::getInstance($car, 'carImage')) {
                $imgName = $car->carMake;
                $car->carImage = 'uploads/' . $imgName . '.' . $car->file->extension;
                $car->save();
                $car->file->saveAs('uploads/' . $imgName . '.' . $car->file->extension);
            }
            return $this->redirect(['continue',]);
        }
        return $this->render('create', [
            'carInfo' => $car
        ]);
    }

    public function actionContinue()
    {
        $car = new Cars();
        if ($car->load(Yii::$app->request->post())) {
            $car->save();
            return $this->redirect('/site/index');
        }
        return $this->render('continue', [
            'carInfo' => $car
        ]);
    }

    public function actionView(int $id)
    {
        $item = Cars::findOne(['carId' => $id]);
        $auctions = new Auctions();
        $userName = '';
        if ($auctions->load(Yii::$app->request->post())) {
            $userName = Yii::$app->user->identity->username;
            $auctions->save();
        }
        return $this->render('view', [
            'carInfo' => $item,
            'auctionInfo' => $auctions,
            'userInfo' => $userName
        ]);
    }
}
