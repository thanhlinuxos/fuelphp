<?php
use Fuel\Core\View;
use Fuel\Core\Response;
use Fuel\Core\Input;

class Controller_Backend_User extends \Fuel\Core\Controller_Hybrid
{
    public $template = 'backend/layout';
    protected $format = 'json';
    private $data = array(
        'success' => FALSE,
        'error' => array()
    );
    
    public function action_index()
    {            
        $data = array();
        $data['rows'] = Model_User::find('all');
        $this->template->title = 'User';
        $this->template->container = View::forge('backend/user/index', $data);
    }
    
    public function action_create()
    {
        $this->template->title = 'Create User';
        $this->template->container = View::forge('backend/user/create', $this->data);
    }
    
    public function post_create()
    {
        $val = Model_User::validate('create');
        if($val->run())
        {
            $data = Model_User::filter_data(Input::post());
            $row = Model_User::forge($data);
            if($row->save())
            {
                $this->data['success'] = TRUE;
                Session::set_flash('success', 'Created successfully user #' . $row->id);
            }
        }
        else
        {
            $this->data['error'] = $val->error_message();
        }
        $this->response($this->data);
    }

    public function action_edit($id = NULL)
    {
        is_null($id) and Response::redirect('acp/user');
        
        if(!$user = Model_User::find($id))
        {
            Session::set_flash('error', 'Could not find user #' . $id);
            Response::redirect('acp/user');
        }
        
        $this->template->set_global('user', $user, false);
        $this->template->title = 'Edit User';
        $this->template->container = View::forge('backend/user/edit', $this->data);
    }
    
    public function post_edit($id = NULL)
    {
        $val = Model_User::validate('edit');
        if($val->run())
        {
            $post = array(
                'username' => $val->validated('username'),
                'password' => $val->validated('password'),
                'email' => $val->validated('email')
            );
            if (!empty($val->validated('password'))) {
                //$post['password'] = Model_Service_Util::hash_password($val->validated('password'));
            }
            
            if(Model_User::update_data($id, $post))
            {
                $this->data['success'] = TRUE;
                Session::set_flash('success', 'Created successfully user #' . $id);
            }
            else
            {
                $this->data['error'] = array('faild' => 'Can not update user #'.$id);
            }
        }
        else
        {
            $this->data['error'] = $val->error_message();
        }
        $this->response($this->data);
    }
    
    public function delete()
    {
        
    }
}
