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
      <?= FH::csrfInput() ?><div class="form-row mb-4">
            <div class="col">
                <!-- First name -->
                <input onclick="hide_errs()" type="text" name="fname" class="form-control" placeholder="First name" required>
            </div>
            <div class="col">
                <!-- Last name -->
                <input type="text" name="lname" class="form-control" placeholder="Last name" required>
            </div>
        </div>

        <!--            ID-->
        <input id="id_input" type="text" oninput="id_Valid()"  name="idNo" class="form-control mb-4" placeholder="Identification Number" required>
        <small class="form-text text-muted mb-3 text-danger" id="err_id"></small>

        <!-- E-mail -->
        <?= FH::inputBlock('text','email',$this->newUser->email,['class'=>'form-control input-sm','placeholder'=>'E-mail'],['class'=>'form-group'],$this->displayErrors) ?>
        <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-3 ">
            All communication are done via email.
        </small>

        <input type="tel" name="mobile" class="form-control mb-4" placeholder="Phone number" >

        <div class="form-row mb-4">
            <div class="col">
                <!-- Last name -->
                <select name="entity" class="form-control mb-2">
                    <option value="Company">Company</option>
                    <option value="Sponsor">Sponsor</option>
                </select>
                <small>Register under</small>
            </div>
            <div class="col">
                <input type="text" name="reference" class="form-control mb-2" placeholder="Sponsor" >
                <small>Enter Sponsor Number (Referral)</small>
            </div>
        </div>

        <hr>
        <p class="form-text text-muted mb-4"> Bank Details</p>
        <div class="form-row mb-4">
            <div class="col">
                <!-- First name -->
                <input type="text" name="Accholder" class="form-control" placeholder="Account Holder" required>
            </div>
            <div class="col">
                <!-- Last name -->
                <input type="number" name="accNo" class="form-control" placeholder="Account Number" required>
            </div>
        </div>
        <div class="form-row mb-4">
            <div class="col">
                <!-- First name -->
                <input type="text" name="bankName" class="form-control" placeholder="Bank" required>
            </div>
            <div class="col">
                <!-- Last name -->
                <input type="text" name="accType" class="form-control" placeholder="Type of Account" required>
            </div>
        </div>
        <div class="form-row mb-4">
            <div class="col">
                <!-- First name -->
                <input type="text" name="branchcode"  class="form-control" placeholder="Branch Code" required>
            </div>
        </div>

        <hr>
        <!-- Password -->
        <input type="password" id="id_pw" name="password" oninput="pw_Valid()" class="form-control mb-3" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" required>
        <small class="form-text text-muted mb-3 text-danger" id="err_pw"></small>
        <!-- Password -->
        <input type="password" id="id_cf" name="confirm" oninput="cf_Valid()" class="form-control" placeholder="confirm Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" required>
        <small class="form-text text-muted mb-3 text-danger" id="err_cf"></small>
      <div class="d-flex justify-content-end">
        <div class="text-dk flex-grow-1">Already have an account? <a href="<?=PROOT?>register/login">Log In</a></div>
        <?= FH::submitTag('Register',['class'=>'btn btn-primary']) ?>
      </div>
    </form>
  </div>
</div>
<script src="<?=PROOT?>js/formValidation.js"></script>
<?php $this->end(); ?>
