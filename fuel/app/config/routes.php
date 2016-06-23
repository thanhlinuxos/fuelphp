<?php
return array(
    '_root_'  => 'dashboard/index',  // The default route
    '_404_'   => 'welcome/404',    // The main 404 route

    // Backend
    'acp'   => 'backend/dashboard',
    'acp/user'   => 'backend/user',
    'acp/user/create'   => 'backend/user/create',
    'acp/user/edit/(:num)'   => 'backend/user/edit/$1'
);
