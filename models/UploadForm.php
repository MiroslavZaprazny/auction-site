<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;
use app\models\CarImages;

class UploadForm extends Model
{
    /**
     * @var UploadedFile[]
     */
    public $imageFiles;

    public function rules()
    {
        return [
            [['imageFiles'], 'file', 'skipOnEmpty' => false, 'extensions' => 'jpg', 'maxFiles' => 10],
        ];
    }

    public function upload(int $carId, string $imgName)
    {
        $randomNum = rand(1, 1000);
        if ($this->validate()) {
            foreach ($this->imageFiles as $i => $file) {
                $file->saveAs('uploads/' . $imgName . $randomNum . $i . '.' . $file->extension);
                $img = new CarImages();
                $img->carId = $carId;
                $img->imgName = $imgName . $randomNum . $i . '.' . $file->extension;
                $img->save();
            }
            return true;
        } else {
            return false;
        }
    }
}
