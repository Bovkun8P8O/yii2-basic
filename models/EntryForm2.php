<?php

namespace app\models;

use yii\base\Model;

class EntryForm2 extends Model
{
    public $name;
    public $birthday;
    public $country;
    public $city;
    public $email;
    public $phone;
    public $addressRegistration;
    public $addressResidence;

    public function rules()
    {
        return [
            [['name', 'birthday', 'country', 'city', 'email', 'phone', 'addressRegistration', 'addressResidence'], 'required'],
            ['email', 'email'],
        ];
    }
}