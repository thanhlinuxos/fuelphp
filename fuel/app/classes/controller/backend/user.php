<?php

class Controller_Backend_User extends Controller_Template
{
    public $template = 'backend/layout';
    
    public function action_index()
    {
        echo Agent::browser();
            echo '-';
            echo Agent::browser();
            exit;
            
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
                $data = Model_User::filter_data(Input::post());
                $row = Model_User::forge($data);
                if($row->save())
                {
                    Session::set_flash('success', 'Created user #' . $user->id . '.');
                    Response::redirect('acp/user');
                }
                else
                {
                    Session::set_flash('error', 'Could not create user.');
                }
            }
            else
            {
                $data['error'] = $val->error();
            }
           
        }
        $this->template->title = 'Create User';
        $this->template->container = View::forge('backend/user/create', $data);
    }
    
    public function action_edit($id = NULL)
    {
        is_null($id) and Response::redirect('acp/user');
        
        if(!$user = Model_User::find($id))
        {
            Session::set_flash('error', 'Could not find user #' . $id);
            Response::redirect('acp/user');
        }
        
        $data = array(
            'error' => array()
        );
        
        $val = Model_User::validate('edit');
        if($val->run())
        {
            $data = Model_User::filter_data(Input::post());
            $row = Model_User::forge($data);
            print_r($user);
            echo '<hr>';
            print_r($data);
            echo '<hr>';
            print_r($row);
            exit;
        }
        else
        {
            if(Input::method() == 'POST')
            {
                
            }
            $this->template->set_global('user', $user, false);
        }
        $this->template->title = 'Edit User';
        $this->template->container = View::forge('backend/user/edit', $data);
    }
}
