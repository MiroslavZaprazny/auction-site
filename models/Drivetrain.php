<?php

namespace app\models;

use yii\db\ActiveRecord;

class Drivetrain extends ActiveRecord
{
    const RWD = 1;
    const FWD = 2;
    const AWD = 3;
    const fourWD = 4;
    /**
     * {@inheritdoc}
     */

    public static function tableName()
    {
        return 'drivetrain';
    }
}
