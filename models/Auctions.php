<?php

namespace app\models;

use yii\web\UploadedFile;
use yii\db\ActiveRecord;


/**
 * This is the model class for table "auctions".
 *
 * @property int $auctionId
 * @property string $auctionText
 * @property string|null $auctionTitle
 * @property int|null $created_at
 * @property string|null $created_by
 */
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
            [['auctionPrice'], 'required'],
            [['auctionPrice'], 'string']
        ];
    }

    /**
     * {@inheritdoc}
     */
}
