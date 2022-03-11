<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Auctions;
use app\models\Drivetrain;
use app\models\Cars;
use app\models\CarImages;
use app\models\Transmission;
use app\models\UploadForm;
use yii\web\UploadedFile;
use Yii;
use yii\helpers\Url;

class CarsController extends Controller
{

    public $enableCsrfValidation = false;

    public function actionCreate()
    {
        $car = new Cars();
        $imgs = new UploadForm();

        if ($car->load(Yii::$app->request->post())) {
            $imgs->imageFiles = UploadedFile::getInstances($imgs, 'imageFiles');
            if ($car->save()) {
                $imgs->upload($car->carId, $car->carMake);
                return $this->redirect(Url::to(['/cars/continue']));
            }
        }
        return $this->render('create', [
            'carInfo' => $car,
            'img' => $imgs
        ]);
    }

    public function actionContinue()
    {
        $car = Cars::find()->orderBy(['carId' => SORT_DESC])->one();
        $drivetrainTypes = Drivetrain::find()->all();
        $transmissions = Transmission::find()->all();

        if ($car->load(Yii::$app->request->post())) {
            if ($car->save()) {
                return $this->redirect('/site/index');
            } else {
                var_dump($car->getErrors(), 56789, true);
                exit;
            }
        }
        return $this->render('continue', [
            'carInfo' => $car,
            'drivetrainTypes' => $drivetrainTypes,
            'trans' => $transmissions
        ]);
    }

    public function actionView(int $id)
    {
        $item = Cars::findOne(['carId' => $id]);
        $auction = new Auctions();

        //riadok najvysieho Bidu konkretneho auta
        $highestBidRow = Auctions::find()->where(['=', 'carId', $id])->orderBy(['bid' => SORT_DESC])->one();

        // logika aukcneho systemu
        if (Yii::$app->request->isPost) {
            $data = Yii::$app->request->post();
            $bid = $data['Auctions']['bid'];

            if ($highestBidRow == NULL && (int)$bid != 0) {
                $auction->load(Yii::$app->request->post());
                $auction->save();
            } elseif ($highestBidRow != NULL && $highestBidRow->bid < (int)$bid) {
                $auction->load(Yii::$app->request->post());
                $auction->save();
            } else {
                Yii::$app->session->setFlash('error', 'Nedostatok prostriedkov, skúste znova');
            }
        }

        $carDmg = $item->damage;
        $carDmg = explode(',', $item->damage);

        $modifications = $item->modifications;
        $modifications = explode(',', $item->modifications);

        $features = $item->carFeatures;
        $features = explode(',', $item->carFeatures);

        $auctions = Auctions::find()->where(['=', 'carId', $id])->all();

        return $this->render('view', [
            'carInfo' => $item,
            'auctionInfo' => $auction,
            'username' =>  Yii::$app->user->isGuest ? 'guest' : Yii::$app->user->identity->username,
            'auctions' => $auctions,
            'carDmg' => $carDmg,
            'mods' => $modifications,
            'features' => $features
        ]);
    }
}
