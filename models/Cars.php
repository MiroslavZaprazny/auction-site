<?php

namespace app\models;

use Yii;

use yii\db\ActiveRecord;

class Cars extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $file;

    public static function tableName()
    {
        return 'cars';
    }

    public function rules()
    {
        return [

            // [['carMake', 'carModel', 'carMilage', 'carModelYear'], 'required'],
            [['carMake', 'carModel', 'carImage'], 'string'],
            [['carMilage', 'carModelYear'], 'integer'],
            [['file'], 'file', 'extensions' => 'png, jpg']
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
