<?php
use Fuel\Core\Controller_Hybrid;
use Fuel\Core\View;
use Fuel\Core\Response;
use Fuel\Core\Input;
use Fuel\Core\Lang;

class Controller_Frontend_Base extends Controller_Hybrid
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
        Lang::load('front_end');
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
                $this->template = 'frontend/login';
                break;
            default :
                $this->template = 'frontend/layout';
        }
    }
}