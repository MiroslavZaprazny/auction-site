<?php

namespace app\models;

use yii\db\ActiveRecord;

class Cars extends ActiveRecord
{
    public $carMake;
    public $carModel;
    public $carTrasmission;
    public $carFeatures;
    public $carMilage;


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cars';
    }

    public function rules()
    {
        return [

            [['carMake', 'carModel', 'carTransmission', /*'carFeatures',*/ 'carMilage'], 'required'],
            [['carMake', 'carModel', 'carTransmission',], 'string']
        ];
    }

    public function create()
    {

        $model = new Cars();
        $model->carMake = $this->carMake;
        $model->carModel = $this->carModel;
        $model->carTrasmission = $this->carTrasmission;
        /*$model->carFeatures = $this->carFeatures;*/
        $model->carMilage = $this->carMilage;

        if ($model->save()) {
            return true;
        }
    }

    public function attributeLabels()
    {
        return [
            'carMake' => 'Znacka Auta',
            'carModel' => 'Model Auta',
            'carTransmission' => 'Prevodovka Auta',
            'carFeatures' => 'Pozoruhodné možnosti/funkcie',
            'carMilage' => 'Najazdenné kilometre'

        ];
    }
}
