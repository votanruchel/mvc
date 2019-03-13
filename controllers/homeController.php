<?php
class homeController extends controller{
    public function index(){
        $m = new Myc();
        $m->inserir();
        $this->loadTemplate('home',$dados = array());
    }

    public function teste(){
        echo "this is test";
    }
}
