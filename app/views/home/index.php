
<?php use App\Models\Account;
use Core\FH;

$this->start('body'); ?>

<?php if (FH::getUser()) {?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <div class="mx-auto pt-lg-5">
                    <div class="jumbotron text-center p-1">
                        <h3 class="text-center text-black-50">Your Membership</h3>
                    </div>
                    <?php if(Account::isMember()) { ?>
                    <div class="col-sm jumbotron p-2">
                        <div class="pl-4">
                            <div class="row">
                                <div class="col">
                                    <p>Current Membership is for :</p>
                                </div>
                                <div class="col">
                                    <p><strong><?= Account::getweek() ?> - Week(s)</strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p>Subscribed on :</p>
                                </div>
                                <div class="col">
                                    <p><strong><?=Account::getStartSub() ?></strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p>Valid Until :</p>
                                </div>
                                <div class="col">
                                    <p><strong><?=Account::getEndSub() ?></strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p>Your Reference Number :</p>
                                </div>
                                <div class="col">
                                    <p><strong><?=Account::getRef() ?></strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } else { ?>
                    <div class="col-sm jumbotron p-4">
                        <form class="form" action="" method="post">
                            <?= FH::csrfInput() ?>
                            <div class="form-group">
                                <label for="activity">Please select how long you want to be active for</label>
                                <select multiple class="form-control" name="week" required>
                                    <option value="1">1 - Week</option>
                                    <option value="2">2 - Weeks</option>
                                    <option value="3">3 - Weeks</option>
                                    <option value="4">4 - Weeks</option>
                                    <option value="8">8 - Weeks</option>
                                </select>
                                <div class="d-flex justify-content-end mt-2">
                                    <?= FH::submitTag('Subscribe',['class'=>'btn btn-primary']) ?>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="mx-auto pt-lg-5 ">
                    <div class="jumbotron text-center p-1">
                        <h3 class="text-center text-black-50">Your Downliners</h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mx-auto">
                            <div style="height: 300px;overflow: auto" class="shadow-lg">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="th-lg h5-responsive table-success sticky-top mb-0">
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
                                        <td>JACOB MAEPA</td>
                                    </tr>
                                    <tr>
                                        <td>GONTSE SWARATLHE</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <br>
                        <div class="col-sm-6 mx-auto">
                            <div style="height: 300px;overflow: auto" class="shadow-lg">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="th-lg h5-responsive table-danger sticky-top">
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
