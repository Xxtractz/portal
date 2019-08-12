<?php
  namespace App\Controllers;
  use App\Models\Account;
  use Core\Controller;
  use Core\H;
  use Core\Router;

  class HomeController extends Controller {

    public function indexAction() {
        $account = new Account();
        if($this->request->isPost()){
            if($account->subscribe($this->request->get())){
                Router::redirect('home/index');
            }
        }
      $this->view->render('home/index');
    }
  }
