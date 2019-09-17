<?php
namespace Controllers;
use \Core\Controller;
use \Models\Auth;
class PanelController extends Controller{
    public function index(){
        $data = array();
        if(!isset($_SESSION['userLogin']) && empty($_SESSION['userLogin'])){
            header("Location: " . BASE_URL . 'panel/login');
            exit;
        }
        $this->loadPanelTemplate('panel/panelHome', $data);
    }
    public function login(){
        $data = array();
        if (!isset($_SESSION['userLogin']) && empty($_SESSION['userLogin'])) {
            $this->loadTemplate('panelLogin', $data);
        }else{
            header("Location: " . BASE_URL . 'panel/');
        }
        
    }
    public function logout(){    
        unset($_SESSION['userLogin']);
        header("Location: " . BASE_URL . 'panel/login');
    }
}