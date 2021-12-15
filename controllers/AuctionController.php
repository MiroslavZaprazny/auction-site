<?php
//
//namespace app\controllers;
//
//use yii\web\Controller;
//use app\models\Auction;
//
//Class AuctionController extends Controller{
//
//    public function actionIndex(){
//        $query =Auction::Find();
//
//        $auctionText= $query->orderBy('id ASC');
//        return $this->render('index',[
//           'actionText'=>$auctionText
//        ]);
//
//    }
//}