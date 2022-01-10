<?php

namespace app\models;

use yii\base\Model;
use yii\helpers\VarDumper;

class SignupForm extends Model
{

    public $username;
    public $email;
    public $userFullName;
    public $password;
    public $password_repeat;

    public function rules()
    {
        return [

            [['username', 'password', 'password_repeat', 'email', 'userFullName'], 'required'],
            ['username', 'string', 'min' => 4, 'max' => 14],
            [['password', 'password_repeat'], 'string', 'min' => 3],
            ['password_repeat', 'compare', 'compareAttribute' => 'password'],
            [['email'], 'email'],
            [['username', 'email'], 'unique']
        ];
    }

    public function signup()
    {
        $user = new User;
        $user->username = $this->username;
        $user->userFullName = $this->userFullName;
        $user->password = \Yii::$app->security->generatePasswordHash($this->password);
        $user->email = $this->email;
        $user->access_token = \Yii::$app->security->generateRandomString();
        $user->auth_key = \Yii::$app->security->generateRandomString();

        if ($user->save()) {
            return true;
        }


        \Yii::error('User was not saved' . VarDumper::dumpAsString($user->errors));
    }
}
