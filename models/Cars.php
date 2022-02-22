<?php

namespace app\models;

use yii\db\ActiveRecord;

class Cars extends ActiveRecord
{

    /**
     * @var UploadedFile[]
     */

    public $imageFiles;

    public static function tableName()
    {
        return 'cars';
    }

    public function rules()
    {
        return [

            // [['carMake', 'carModel', 'carMilage', 'carModelYear'], 'required'],
            [['carMake', 'carModel', 'drivetrain', 'damage', 'modifications', 'transmission', 'carFeatures'], 'string'],
            [['carMilage', 'carModelYear', 'carEngineDisplacement', 'carCylinders', 'carHorsePower'], 'integer'],
            // [['imageFiles'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg,jpeg', 'maxFiles' => 10],
            [[
                'carMake', 'carModel', 'drivetrain', 'damage', 'modifications', 'transmission', 'carMilage',
                'carModelYear', 'carEngineDisplacement', 'carCylinders', 'carHorsePower'
            ], 'safe']

        ];
    }

    public function attributeLabels()
    {
        return [
            'carMake' => 'Znacka Auta',
            'carModel' => 'Model Auta',
            'carFeatures' => 'Pozoruhodné možnosti/funkcie',
            'carMilage' => 'Najazdenné kilometre',
            'carModelYear' => 'Rok Výroby',
            'carEngineDisplacement' => 'Objem motora(cc)',
            'carHorsePower' => 'Výkon motora(kw)',
            'carCylinders' => 'Počet valcov',
            'modifications' => 'Bolo vaše auto upravované? ',
            'damage' => 'Je vaše auto poškodené'

        ];
    }

    public function getImages()
    {
        return $this->hasMany(CarImages::class, ['carId' => 'carId']);
    }

    public function getAuctions()
    {
        return $this->hasMany(Auctions::class, ['carId' => 'carId']);
    }

    public function getMaxBid()
    {
        $auctions = $this->getAuctions()->all();
        $maxBid=0;
        foreach($auctions as $auction){
            if($auction->bid > $maxBid){
                $maxBid = $auction->bid;
            }
        }
        return $maxBid;
    }
}
