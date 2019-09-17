<?php
namespace Controllers;
use \Core\Controller;
use \Models\Auth;
class AjaxController extends controller
{

  public static function index(){

  }

  public static function userAuth(){
    $auth = new Auth();
    if(isset($_POST['username']) && isset($_POST['password'])){
      if($auth->authUser($_POST['username'], $_POST['password']) == true){
        $data = array('login' => 1);
        echo json_encode($data);
        header('HTTP/1.1 200 OK');
      }else{
        echo "ERRO!";
        header('HTTP/1.1 404 Not Found');
      }
    }else{
      header('HTTP/1.1 404 Not Found');
      exit;
    }
  }
}
