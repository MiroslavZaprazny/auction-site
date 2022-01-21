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
        $imgName = $car->carMake;

        if ($car->load(Yii::$app->request->post()) && $car->validate()) {

            if ($car->file = UploadedFile::getInstance($car, 'carImage')) {

                $car->file->saveAs('/web/uploads/' . $imgName . ' ' . $car->file->extension);

                $car->carImage = 'uploads/' . $imgName . ' ' . $car->file->extension;
            }
            $car->save();

            return $this->render('continue', [
                'carInfo' => $car
            ]);
        }

        return $this->render('create', [
            'carInfo' => $car
        ]);
    }

    public function actionView(int $id)
    {
        $item = Cars::findOne(['carId' => $id]);

        return $this->render('view', [
            'carInfo' => $item
        ]);
    }
}
