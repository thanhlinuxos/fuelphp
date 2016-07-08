<?php

class Controller_Backend_Dashboard extends Controller_Backend_Base
{
    public function action_index()
    {
        $this->template->container = View::forge('backend/dashboard', $this->data);
    }
}
