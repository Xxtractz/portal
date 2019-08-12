<?php
use Core\FH;
?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="col-md-8 mx-auto pt-lg-5">
    <div class="jumbotron text-center p-5">
    <h3 class="text-center">reset</h3>
    <form class="form" action="<?=PROOT?>register/reset" method="post">
      <?= FH::csrfInput() ?>
      <?= FH::displayErrors($this->displayErrors) ?>
      <?= FH::inputBlock('email','email',$this->login->username,['class'=>'form-control','placeholder'=>'SP Number'],['class'=>'form-group'],$this->displayErrors) ?>
        <div class="flex-grow-1 text-body">Don't have an account? <a href="<?=PROOT?>register/register">Sign Up</a></div>
        <?= FH::submitTag('reset',['class'=>'btn btn-primary']) ?>
      </div>
    </form>
  </div>
</div>
<?php $this->end(); ?>
