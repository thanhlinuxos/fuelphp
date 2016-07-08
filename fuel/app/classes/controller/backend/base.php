<?php
use Fuel\Core\Controller_Hybrid;
use Fuel\Core\View;
use Fuel\Core\Response;
use Fuel\Core\Input;
use Fuel\Core\Lang;
use Fuel\Core\Config;

class Controller_Backend_Base extends Controller_Hybrid
{
    protected $format = 'json';
    protected $controller;
    protected $action;
    protected $data = array(
        'success' => FALSE,
        'error' => array()
    );
    
    
    public function before()
    {
        $this->controller = Request::active()->controller;
        $this->action = Request::active()->action;
        Config::set('language', 'vi');
        Lang::load('back_end');
        $this->render_template();
        parent::before();
        $this->set_title();
        $this->menu_active();
    }
    
    
    
    public function after($response)
    {
        $response = parent::after($response);
        return $response;
    }
    
    private function render_template()
    {
        switch($this->action) {
            case 'login':
                $this->template = 'backend/login';
                break;
            default :
                $this->template = 'backend/layout';
        }
    }
    
    private function set_title()
    {
        if (is_object($this->template)) {
            $title = Lang::get($this->controller . '.' . $this->action . '_title');
            $this->template->title = $title ? $title : 'FuelPHP';
        }
    }
    
    private function menu_active()
    {
        if (is_object($this->template)) {
            $tmp = explode('_',$this->controller);
            $this->template->menu_active = strtolower(end($tmp));
        }
    }
}