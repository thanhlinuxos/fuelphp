<?php
use Fuel\Core\View;
use Fuel\Core\Response;
use Fuel\Core\Input;
use Fuel\Core\Lang;

class Controller_Backend_Base extends \Fuel\Core\Controller_Hybrid
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
        Lang::load('back_end', 'en');
        var_dump(Lang::get('Controller_Backend_User'));exit;
        $this->render_template();
        parent::before();
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
                $this->template->title = 'Login';
                break;
            default :
                $this->template = 'backend/layout';
                $this->template->title = Lang::get($this->controller . '.' . $this->action . '_title');
        }
    }
}