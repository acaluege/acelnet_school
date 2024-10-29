<?php

class App
{
    protected $controller = "home"; 
    protected $method = "index"; 
    protected $params = array();
    
    public function __construct()
    {
        $URL = $this->getURL();
        
        //Find:class
        if(file_exists("../private/controllers/".$URL[0].".php"))
        {
            $this->controller = ucfirst($URL[0]);
            unset($URL[0]);            
        }
        
        //Find:class instanciada
        require "../private/controllers/".$this->controller.".php";
        $this->controller = new $this->controller();
        
        //Find:metodo da class instanciada
        if(isset($URL[1]))
        {
            if(method_exists($this->controller, $URL[1]))
            {
                $this->method = ucfirst($URL[1]);
                unset($URL[1]);
            }
        }
        
        
        $URL = array_values($URL);
        $this->params = $URL;
        
        //Find:parametro in classe and method
        call_user_func_array([$this->controller,$this->method], $this->params);
    }
    
    //1ºPega a URL e filtra a URI
    private function getURL()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : "home";
        return explode("/", filter_var(trim($url,"/")), FILTER_SANITIZE_URL);
    }
}
