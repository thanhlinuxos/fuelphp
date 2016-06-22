<?php

class Controller_Backend_User extends Controller_Template
{
    public $template = 'backend/layout';
    
    public function action_index()
    {
        $data = array();
        $this->template->title = 'User';
        $this->template->container = View::forge('backend/user/index', $data);
    }
}
