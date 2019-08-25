<?php
namespace Controllers;
use \Core\Controller;
class notfoundController extends Controller{
    public function index(){
        $this->loadView('404',array());
    }
}
 ?>
