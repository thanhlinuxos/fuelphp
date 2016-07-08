<?php
/**
 * Fuel
 *
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.8
 * @author     Thanh Nguyen
 * @license    MIT License
 * @copyright  2016
 * @link       
 */

namespace My;
/**
 * My\Directory Class
 *
 * @package	Fuel
 * @subpackage	My
 * @category	Core
 * @author	Thanh Nguyen
 */
class Directory
{
    public static function create_directory($directory = '')
    {
        $path_array = explode("/", $directory); 
		
        $path = substr(UPLOADPATH, 0, -1);

        for($i=0; $i<count($path_array); $i++)
        {
            if($path_array[$i] != "")
            {
                $path .= "/".$path_array[$i];

                if(!is_dir($path))
                {
                    @mkdir($path, 0777);
                    @chmod($path, 0777);
                }
            }	
        }

        return $path;
    }
}