<?php

namespace app\models;

use yii\db\ActiveRecord;

class Transmission extends ActiveRecord
{
    const MANUAL = 1;
    const AUTOMATIC = 2;

    public static function tableName()
    {
        return 'transmission';
    }
}
