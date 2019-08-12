<?php


namespace App\Models;

use Core\FH;
use Core\H;
use Core\Model;
use Core\SendMail;

class Account extends Model
{
    protected static $_table = 'membership';
    public $id,$fname,$lname,$username,$referralSPno,
        $startofsub,$endofsub,$week,$ref;
    const blackListedFormKeys = ['id'];

    public static function findByUsername($username) {
        return self::findFirst(['conditions'=> "username = ?", 'bind'=>[$username]]);
    }

    public function getReference(){
        $str = "1234567890";
        $random = substr(str_shuffle($str), 0, 6);
        $ref = "EPS-".$random;
        return $ref;
    }

    public static function isMember(){
        if(self::findByUsername(FH::getUser()->username))
            return true;
        return false;
    }

    public static function getWeek(){
        return self::findByUsername(FH::getUser()->username)->week;
    }

    public static function getStartSub(){
        return self::findByUsername(FH::getUser()->username)->startofsub;
    }
    public static function getEndSub(){
        return self::findByUsername(FH::getUser()->username)->endofsub;
    }
    public static function getRef(){
        return self::findByUsername(FH::getUser()->username)->ref;
    }
    public function subscribe($params){
        $user = Users::$currentLoggedInUser;
        $this->assign($params, Account::blackListedFormKeys);
        $this->fname = $user->fname;
        $this->lname = $user->lname;
        $this->username = $user->username;
        $this->referralSPno = $user->reference;
        $this->startofsub = H::getStartOfSubscription($this->week);
        $this->endofsub = H::getEndofsubscription($this->week);
        $this->ref = $this->getReference();
        if($this->save()){
            SendMail::subscribe($user->email, $this->fname,$this->lname,$this->week,$this->ref);
            return true;
        }
        return false;
    }

}