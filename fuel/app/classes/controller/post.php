<?php

class Controller_Post extends Controller_Template
{

	public function action_index()
	{
		$data["posts"] = Model_Post::find();
                print_r($data["posts"]);
                exit;
		$this->template->title = 'Posts &raquo; Action1';
		$this->template->content = View::forge('posts/index', $data);
	}

	public function action_view()
	{
		$data["subnav"] = array('action2'=> 'active' );
		$this->template->title = 'Posts &raquo; Action2';
		$this->template->content = View::forge('posts/view', $data);
	}

	public function action_create()
	{
		$data["subnav"] = array('action3'=> 'active' );
		$this->template->title = 'Posts &raquo; Action3';
		$this->template->content = View::forge('posts/create', $data);
	}

}
