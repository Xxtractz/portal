<?php


namespace App\Models;

use Core\Model;

class Account extends Model
{
    protected static $_table = 'membership';

    public function getReference(){
        $str = "1234567890";
        $random = substr(str_shuffle($str), 0, 6);
        $ref = "EPS-".$random;
        return $ref;
    }

    public function subscribe($params){

        if($this->save()){
            SendMail::verify();
            return true;
        }
        return false;
    }

}