<?php

class Controller_Backend_User extends Controller_Template
{
    public $template = 'backend/layout';
    
    public function action_index()
    {
        $data = array();
        $data['rows'] = Model_User::find('all');
        $this->template->title = 'User';
        $this->template->container = View::forge('backend/user/index', $data);
    }
    
    public function action_create()
    {
        $data = array(
            'error' => array()
        );
        if(Input::method() === 'POST')
        {
            $val = Model_User::validate('create');
            if($val->run())
            {
                
            }
            else
            {
                $data['error'] = $val->error();
            }
           
        }
        $this->template->title = 'Create User';
        $this->template->container = View::forge('backend/user/create', $data);
    }
}
