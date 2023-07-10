<?php

class Controller
{
    public $service;
    private $vars;
    public function __construct()
    {
        
    }
    public function set($vars){
        $this->vars = $vars;

    }
    public function render($controller,$action)
    {
        include "./views/elements/header.php";
        if (sizeof($this->vars)>0) {
            foreach ($this->vars as $key => $value) {
                $$key = $value;
            }
        }
        
        include "./views/$controller/$action.php";
        include "./views/elements/footer.php";

    }
}
