<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Auctions;
use app\models\Drivetrain;
use app\models\Cars;
use yii\web\UploadedFile;
use Yii;

class CarsController extends Controller
{

    public $enableCsrfValidation = false;

    public function actionCreate()
    {
        $car = new Cars();
        if ($car->load(Yii::$app->request->post()) && $car->validate()) {
            if ($car->file = UploadedFile::getInstance($car, 'carImage')) {
                $imgName = $car->carMake;
                $car->carImage = 'uploads/' . $imgName . '.' . $car->file->extension;

                if ($car->save()) {
                    $car->file->saveAs('uploads/' . $imgName . '.' . $car->file->extension);
                    return $this->redirect(['continue',]);
                } else {
                    print_r($car->getErrors());
                }
                // $session->set('car', $car);

            }
        }
        return $this->render('create', [
            'carInfo' => $car,
        ]);
    }

    public function actionContinue()
    {
        $this->enableCsrfValidation = false;
        $car = Cars::find()->orderBy(['carId' => SORT_DESC])->one();
        $auction = new Auctions();
        $drivetrainTypes = Drivetrain::find()->all();

        if ($car->load(Yii::$app->request->post())) {
            if ($car->save()) {
                $auction->created_at =  (new \DateTime('now'))->format('Y-m-d H:i:s');
                $auction->save();
            }
            return $this->redirect('/site/index');
        }
        return $this->render('continue', [
            'carInfo' => $car,
            'drivetrainTypes' => $drivetrainTypes
        ]);
    }

    public function actionView(int $id)
    {
        $item = Cars::findOne(['carId' => $id]);
        $auction = new Auctions();

        //riadok najvysieho Bidu
        $highestBidRow = Auctions::find()->where(['=', 'carId', $id])->orderBy(['bid' => SORT_DESC])->one();

        // logika aukcneho systemu
        if ($highestBidRow == NULL) {
            $auction->load(Yii::$app->request->post());
            $auction->save();
        }
        if (!$highestBidRow == NULL && Yii::$app->request->isPost) {
            $data = Yii::$app->request->post();
            $bid = $data['Auctions']['bid'];
            if ($highestBidRow->bid < (int)$bid) {
                $auction->load(Yii::$app->request->post());
                $auction->save();
            } else {
                echo "not enoough moneys";
            }
        }
        $auctions = Auctions::find()->where(['=', 'carId', $id])->all();

        $carDmg = $item->carDamage;
        $carDmg = explode(',', $item->carDamage);

        return $this->render('view', [
            'carInfo' => $item,
            'auctionInfo' => $auction,
            'username' =>  Yii::$app->user->isGuest ? 'guest' : Yii::$app->user->identity->username,
            'auctions' => $auctions,
            'carDmg' => $carDmg
        ]);
    }
}
