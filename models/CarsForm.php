<?php

// namespace app\models;

// use app\models\Cars as ModelsCars;
// use yii\base\Model;
// use yii\db\ActiveRecord;

// class CarsForm extends ActiveRecord
// {

//     public $carMake;
//     public $carModel;
//     public $carTrasmission;
//     public $carFeatures;
//     public $carMilage;

//     /**
//      * {@inheritdoc}
//      */
//     public function create()
//     {
//         $model = new ModelsCars;
//         $model->carMake = $this->carMake;
//         $model->carModel = $this->carModel;
//         $model->carTrasmission = $this->carTrasmission;
//         $model->carFeatures = $this->carFeatures;
//         $model->carMilage = $this->carMilage;

//         if ($model->save()) {
//             return true;
//         }
//     }

//     public function rules()
//     {
//         return [

//             [['carMake', 'carModel', 'carTransmission', 'carFeatures', 'carMilage'], 'required']
//         ];
//     }
// }
