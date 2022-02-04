<?php

namespace app\models;

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
            [['carMake', 'carModel', 'carImage', 'drivetrain', 'carDamage'], 'string'],
            [['carMilage', 'carModelYear', 'carEngineDisplacement', 'carCylinders', 'carHorsePower'], 'integer'],
            [['file'], 'file', 'extensions' => 'png, jpg, jpeg']
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
            'carModelYear' => 'Rok Výroby',
            'carEngineDisplacement' => 'Objem motora(cc)',
            'carHorsePower' => 'Výkon motora(kw)',
            'carCylinders' => 'Počet valcov'

        ];
    }
}
