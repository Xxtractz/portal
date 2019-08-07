<?php
use Core\FH;
?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="col-md-8 mx-auto pt-lg-5">
  <div class="jumbotron text-center p-5">
    <h3 class="text-center">Register Here!</h3><hr>
    <form class="form" action="" method="post">
      <?= FH::csrfInput() ?>
        <div class="form-row mb-4">
            <div class="col">
                <!-- First name -->
                <?= FH::inputBlock('text','First Name','fname',$this->newUser->fname,['class'=>'form-control input-sm'],['class'=>'form-group'],$this->displayErrors) ?>
            </div>
            <div class="col">
                <!-- Last name -->
                <?= FH::inputBlock('text','Last Name','lname',$this->newUser->lname,['class'=>'form-control input-sm'],['class'=>'form-group'],$this->displayErrors) ?>
            </div>
        </div>
      <?= FH::inputBlock('text','Email','email',$this->newUser->email,['class'=>'form-control input-sm'],['class'=>'form-group'],$this->displayErrors) ?>
      <?= FH::inputBlock('password','Password','password',$this->newUser->password,['class'=>'form-control input-sm'],['class'=>'form-group'],$this->displayErrors) ?>
      <?= FH::inputBlock('password','Confirm Password','confirm',$this->newUser->confirm,['class'=>'form-control input-sm'],['class'=>'form-group'],$this->displayErrors) ?>
      <div class="d-flex justify-content-end">
        <div class="text-dk flex-grow-1">Already have an account? <a href="<?=PROOT?>register/login">Log In</a></div>
        <?= FH::submitTag('Register',['class'=>'btn btn-primary']) ?>
      </div>
    </form>
  </div>
</div>
<?php $this->end(); ?>
