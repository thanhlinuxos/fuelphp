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
 * My\Number Class
 *
 * @package	Fuel
 * @subpackage	My
 * @category	Core
 * @author	Thanh Nguyen
 */
class Number
{
    public static function currency_vnd($num = 0)
    {
        $num = number_format($num, "0", ",", ".");
        $num .= " VNĐ";
        return $num;
    }
    
    public static function currency_dola($num = 0)
    {
        $num = number_format($num, "2", ".", ",");
        $num = "$".$num;
        return $num;
    }
}