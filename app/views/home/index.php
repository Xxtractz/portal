
<?php use Core\FH;

$this->start('body'); ?>

<?php if (FH::getUser()) {?>
    <div class="row">
        <div class="col-4 mx-auto pt-lg-5">
            <div class="jumbotron text-center p-5">
                <h3 class="text-center">Select your duration of activity</h3>
                <hr>
                <form class="form" action="" method="post">
                    <?= FH::csrfInput() ?>
                    <div class="row">
                        <div class="col">
                            <!-- Group of default radios - option 1 -->
                            <div class="ml-auto form-check custom-radio">
                                <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios">
                                <label class="custom-control-label" for="defaultGroupExample1">1 - Week </label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Group of default radios - option 2 -->
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="groupOfDefaultRadios" checked>
                                <label class="custom-control-label" for="defaultGroupExample2">2 - Weeks</label>
                            </div>
                            <!-- Group of default radios - option 3 -->
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="defaultGroupExample3" name="groupOfDefaultRadios">
                                <label class="custom-control-label" for="defaultGroupExample3">3 - Weeks</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Group of default radios - option 4 -->
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="defaultGroupExample4" name="groupOfDefaultRadios">
                                <label class="custom-control-label" for="defaultGroupExample4">4 - Weeks</label>
                            </div>
                            <!-- Group of default radios - option 8 -->
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="defaultGroupExample8" name="groupOfDefaultRadios">
                                <label class="custom-control-label" for="defaultGroupExample8">8 - Weeks</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-6 mx-auto pt-lg-5 ">
            <div class="jumbotron text-center p-5 ">
                <h3 class="text-center">Downliners</h3>
                <hr>
                <div class="row mh-50">
                    <div class="col">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th class="th-lg h5-responsive table-success">
                                    Active Downliners
                                </th>
                            </tr>
                            </thead>
                            <tr>
                                <td>KATLEGO MATHABELA</td>
                            </tr>
                            <tr>
                                <td>JACOB MAEPA</td>
                            </tr>
                            <tr>
                                <td>GONTSE SWARATLHE</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th class="th-lg h5-responsive table-danger">
                                    Inactive Downliners
                                </th>
                            </tr>
                            </thead>
                            <tr>
                                <td>KATLEGO MATHABELA</td>
                            </tr>
                            <tr>
                                <td>JACOB MAEPA</td>
                            </tr>
                            <tr>
                                <td>GONTSE SWARATLHE</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } else {?>
        <div class="col-md-8 mx-auto pt-lg-5">
            <div class="jumbotron text-center p-5">
                <h1 class="h3-responsive font-weight-bold">Eagle Payout System Portal</h1>
                <br>
                <a id="freebies-jumbotron-download" href="<?=PROOT?>register/login"  class="btn btn-ptc btn-md btn-rounded waves-effect waves-light">Login</a>
                <a id="freebies-jumbotron-download" href="<?=PROOT?>register/register"   class="btn btn-ptc btn-md btn-rounded waves-effect waves-light">Register</a>
                <hr>
                <a class="fa-1x fa fa-home" href="https://eaglepayoutsystem.co.za/"> Home </a>
            </div>
        </div>
<?php } ?>
<?php $this->end(); ?>
