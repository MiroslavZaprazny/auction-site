<?php

namespace app\models;

use yii\db\ActiveRecord;

class Cars extends ActiveRecord
{

    public $file;

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

            [['carMake', 'carModel',/*'carFeatures',*/ 'carMilage', 'carModelYear'], 'required'],
            [['carMake', 'carModel', 'carImage'], 'string'],
            [['file'], 'file']
        ];
    }

    public function attributeLabels()
    {
        return [
            'carMake' => 'Znacka Auta',
            'carModel' => 'Model Auta',
            'carTransmission' => 'Prevodovka Auta',
            'carFeatures' => 'Pozoruhodné možnosti/funkcie',
            'carMilage' => 'Najazdenné kilometre',
            'carModelYear' => 'Rok Výroby'

        ];
    }
}
