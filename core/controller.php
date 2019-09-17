<?php
namespace Core;
class Controller{
    //Carrega apenas o view
    public function loadView($viewName, $viewData = array()){
        extract($viewData);
        require 'Views/'.$viewName.'.php';
    }
    //Carrega o template e envia o nome da view, serve para chamar uma view ja com o template
    public function loadTemplate($viewName, $viewData = array()){
        require 'Views/template.php';
    }

    //Carrega o template e envia o nome da view, serve para chamar uma view ja com o template
    public function loadPanelTemplate($viewName, $viewData = array())
    {
        require 'Views/panel/panelTemplate.php';
    }
    //Funcao que eh usada dentro do template para carregar a view
    public function loadViewInTemplate($viewName, $viewData = array()){
        extract($viewData);
        require 'Views/'.$viewName.'.php';
    }
    public function loadViewPanelInTemplate($viewName, $viewData = array())
    {
        extract($viewData);
        require 'Views/' . $viewName . '.php';
    }
}
