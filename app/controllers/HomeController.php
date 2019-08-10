<?php
  namespace App\Controllers;
  use App\Models\Users;
  use Core\Controller;

  class HomeController extends Controller {

    public function indexAction() {
      $this->view->render('home/index');
    }
    
  }
