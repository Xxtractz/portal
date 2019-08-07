
<?php use Core\FH;

$this->start('body'); ?>

<?php if (\Core\FH::getUser()) {?>
    <div class="col-md-8 mx-auto pt-lg-5">
        <div class="jumbotron text-center p-5">
            <h3 class="text-center">Choose</h3>
            <form class="form" action="" method="post">
                <?= FH::csrfInput() ?>
                <div class="d-flex justify-content-end">
                </div>
            </form>
        </div>
    </div>
    <?php } else {?>
        <div class="col-md-8 mx-auto pt-lg-5">
            <div class="jumbotron text-center p-5">
                <h1 class="h3-responsive font-weight-bold">Eagle Payout System Portal</h1>
                <br>
                <a id="freebies-jumbotron-download" href="register/login"  class="btn btn-ptc btn-md btn-rounded waves-effect waves-light">Login</a>
                <a id="freebies-jumbotron-download" href="register/register"   class="btn btn-ptc btn-md btn-rounded waves-effect waves-light">Register</a>
                <hr>
                <a class="fa-1x fa fa-home" href="https://eaglepayoutsystem.co.za/"> Home </a>
            </div>
        </div>
<?php } ?>
<?php $this->end(); ?>
