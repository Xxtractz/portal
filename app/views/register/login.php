<?php
use Core\FH;
?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="col-md-8 mx-auto pt-lg-5">
    <div class="jumbotron text-center p-5">
    <h3 class="text-center">Log In</h3>
    <form class="form" action="<?=PROOT?>register/login" method="post">
      <?= FH::csrfInput() ?>
      <?= FH::displayErrors($this->displayErrors) ?>
      <?= FH::inputBlock('text','username',$this->login->username,['class'=>'form-control','placeholder'=>'SP Number'],['class'=>'form-group'],$this->displayErrors) ?>
      <?= FH::inputBlock('password','password',$this->login->password,['class'=>'form-control','placeholder'=>'Password'],['class'=>'form-group'],$this->displayErrors) ?>
      <?= FH::checkboxBlock('Remember Me','remember_me',$this->login->getRememberMeChecked(),[],['class'=>'form-group'],$this->displayErrors) ?>
      <div class="d-flex justify-content-end">
        <div class="flex-grow-1 text-body">Don't have an account? <a href="<?=PROOT?>register/register">Sign Up</a></div>
        <?= FH::submitTag('Login',['class'=>'btn btn-primary']) ?>
      </div>
    </form>
  </div>
</div>
<?php $this->end(); ?>
