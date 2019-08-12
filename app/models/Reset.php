<?php
namespace App\Models;
use Core\Model;
use Core\Validators\RequiredValidator;

class Reset extends Model {
  public $email;
  protected static $_table = 'users';

  public function validator(){
    $this->runValidation(new RequiredValidator($this,['field'=>'email','msg'=>'Email is required.']));
  }

}
