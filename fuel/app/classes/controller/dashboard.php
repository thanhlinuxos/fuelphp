<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.8
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2016 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Dashboard extends Controller
{
    public function action_index()
    {
        $result = DB::query('SELECT * FROM `th_users`')->execute();
        //print_r($result->as_array());
        //exit;
        $data = array(
        );
        //assign views as variables, forced rendering
        $views = array();
        $views['title'] = 'Fuel';
        $views['container'] = View::forge('layout/dashboard', $data)->render();
        return View::forge('layout/layout', $views)->render();
    }

	
}
