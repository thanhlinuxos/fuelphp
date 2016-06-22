<?php

class Controller_Backend_Dashboard extends Controller_Template
{
    public $template = 'backend/layout';
    
    public function action_index()
    {
        $data = array();
        $this->template->title = 'Dashboard';
        $this->template->container = View::forge('backend/dashboard', $data);
    }
}
