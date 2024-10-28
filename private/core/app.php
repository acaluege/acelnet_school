<?php

class App
{
    protected $controller = "home"; //take url class
    protected $method = "index"; //take url method
    protected $params = array(); //take url array
    
    public function __construct()
    {
        //2º 
        $URL = $this->getURL();
        if(file_exists("../private/controllers/".$URL[0].".php")){
        $this->controller = $URL[0];
        }
        
        require "../private/controllers/".$this->controller.".php";
        $this->controller = new $this->controller();
        
    }
    
    //1ºPega a URL e filtra a URI
    private function getURL()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : "home";
        return explode("/", filter_var(trim($url,"/")), FILTER_SANITIZE_URL);
    }
}
