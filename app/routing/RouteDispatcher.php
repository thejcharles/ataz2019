<?php


namespace App;

use AltoRouter;


class RouteDispatcher
{
    protected $match;
    protected $method;
    protected $controller;

    public function __construct(AltoRouter $router)
    {
        $this->match = $router->match();

        if($this->match){
           list($controller, $method) = explode('@', $this->match['target']);
           $this->controller = $controller;
           $this->method = $method;

           if(is_callable(array(new $this->controller, $this->method))){
               call_user_func_array(array(new $this->controller, $this->method), array($this->match['params']));

           }
           else {
               echo "the method {$this->method} is not found in ($this->controller}";
           }
        } else {
            header($_SERVER['SERVER_PROTOCOL']. '404 Not Found');
            view('errors/404');
        }


    }
}