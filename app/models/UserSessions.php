<?php
namespace App\Models;
use Core\Model;
use Core\Session;
use Core\Cookie;

class UserSessions extends Model {

  public $id,$user_id,$session,$user_agent;
  protected static $_table = 'user_sessions';

  public function beforeSave(){
    $this->timeStamps();
  }

  public static function getFromCookie() {
    if(Cookie::exists(REMEMBER_ME_COOKIE_NAME)) {
      $userSession = self::findFirst([
        'conditions' => "user_agent = ? AND session = ?",
        'bind' => [Session::uagent_no_version(), Cookie::get(REMEMBER_ME_COOKIE_NAME)]
      ]);
    }
    if(!empty($userSession))
        return $userSession;
  }
}
