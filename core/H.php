<?php
namespace Core;

use App\Models\Users;
use DateInterval;
use DateTime;

class H {
  public static function dnd($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
  }

  public static function currentPage() {
    $currentPage = $_SERVER['REQUEST_URI'];
    if($currentPage == PROOT || $currentPage == PROOT. strtolower(DEFAULT_CONTROLLER) .'/index') {
      $currentPage = PROOT . strtolower(DEFAULT_CONTROLLER);
    }
    return $currentPage;
  }

  public static function gettoken(){
        $str = "1234567890asdfghjklpoiuytrewqzxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM";
        $random = substr(str_shuffle($str), 0, 12);
        return $random;
    }
    public static function getStartOfSubscription(){
      return date("d/m/Y");
    }

    /**
     * @param $week
     * @return string
     * @throws \Exception
     */
    public static function getEndofsubscription($week){
        $today = date("Y/m/d");
        $date = new DateTime("".$today."");
        $date->add(new DateInterval('P'.($week*7).'D'));
        return $date->format('d/m/Y');
    }

  public static function getObjectProperties($obj){
    return get_object_vars($obj);
  }

  public static function buildMenuListItems($menu,$dropdownClass=""){
    ob_start();
    $currentPage = self::currentPage();
    foreach($menu as $key => $val):
      $active = '';
      if($key == '%USERNAME%'){
        $key = (Users::currentUser())? "Hello " .Users::currentUser()->fname : $key;
      }
      if(is_array($val)): ?>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=$key?></a>
          <div class="dropdown-menu <?=$dropdownClass?>">
            <?php foreach($val as $k => $v):
              $active = ($v == $currentPage)? 'active':''; ?>
              <?php if(substr($k,0,9) == 'separator'): ?>
                <div role="separator" class="dropdown-divider"></div>
              <?php else: ?>
                <a class="dropdown-item <?=$active?>" href="<?=$v?>"><?=$k?></a>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
        </li>
      <?php else:
        $active = ($val == $currentPage)? 'active':''; ?>
        <li class="nav-item"><a class="nav-link <?=$active?>" href="<?=$val?>"><?=$key?></a></li>
      <?php endif; ?>
    <?php endforeach;
    return ob_get_clean();
  }
}
