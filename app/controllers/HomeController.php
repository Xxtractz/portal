<?php
  namespace App\Controllers;
  use App\Models\Users;
  use Core\Controller;
  use Core\H;

  class HomeController extends Controller {

    public function indexAction() {
        if($this->request->isPost()){
            H::dnd($this->request->get());
        }
      $this->view->render('home/index');
    }
  }
