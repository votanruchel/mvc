<?php
namespace Controllers;
use \Core\Controller;

class PanelController extends Controller{
    public function index(){
        $data = array();
        if(!isset($_SESSION['userLogin']) && empty($_SESSION['userLogin'])){
            //header("Location: " . BASE_URL . 'panel/login');
            //exit;
        }
        $this->loadPanelTemplate('panel/panelHome', $data);
    }
    public function login(){
        $data = array();
        $this->loadTemplate('panelLogin',$data);
    }
    public function logout(){

    }
}