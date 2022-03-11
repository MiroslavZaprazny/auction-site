<?php

namespace app\models;

use yii\db\ActiveRecord;

class Auctions extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'auctions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['createdAt'], 'datetime'],
            [['carId', 'username'], 'string'],
            [['bid'], 'integer']
        ];
    }

    public function attributeLabels()
    {
        return [
            'bid' => 'Zadajte ponuku'
        ];
    }
}
