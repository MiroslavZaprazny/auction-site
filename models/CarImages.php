<?php

namespace app\models;

use yii\db\ActiveRecord;

class CarImages extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'carImages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['createdAt'], 'datetime'],
            [['carId', 'status'], 'integer'],
            [['imgName'], 'string']
        ];
    }
}
