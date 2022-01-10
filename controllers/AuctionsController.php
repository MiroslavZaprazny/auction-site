<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Auctions;
use app\models\User;
use app\models\Cars;
use app\models\CarsForm;
use yii\web\UploadedFile;
use Yii;

class AuctionsController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCreate()
    {
        // $model = new Auctions();
        // $user = new User();
        // $cars = new Cars();

        /* if ($this->request->isPost) */ {

            //     if ($cars->load($this->request->post()) && $cars->save() /*&& $model->load($this->request->post()) && $model->save()*/) {

            //         return $this->render('/site/index', [
            //             // 'model' => $model,
            //             'user' => $user,
            //             'cars' => $cars
            //         ]);
            //     }



            // $user->load($this->request->post()) && $user->save()



            /*$imgName = $model->auctionTitle;

                $model->file = UploadedFile::getInstance($model, 'file');

                $model->file->saveAs('uploads/' . $imgName . $model->auctionImg->extension);

                $model->auctionImg = 'uploads/' . $imgName . $model->auctionImg->extension;
            */

            $car = new Cars();

            if ($car->load($this->request->post()) && $car->save()) {

                return $this->redirect('/site/index');
            }
        }

        return $this->render('create', [
            // 'model' => $model,
            // 'user' => $user,
            'car' => $car
        ]);
    }

    public function actionView()
    {
        $items = Auctions::find()->all();

        return $this->render('view', [
            'auctionItems' => $items,
        ]);
    }

    public function actionAnotherForm()
    {
        $cars = new Cars();

        return $this->render('anotherform', [
            'cars' => $cars
        ]);
    }
}
