<?php
namespace Controllers;
use \Core\Controller;
class HomeController extends Controller{
    public function index(){
        $this->loadTemplate('home',$dados = array());
    }
}
