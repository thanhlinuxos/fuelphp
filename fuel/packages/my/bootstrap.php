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

\Autoloader::add_classes(array(
    'My\\Directory'     => __DIR__ . '/classes/directory.php',
    'My\\Number'        => __DIR__ . '/classes/number.php',
    'My\\String'        => __DIR__ . '/classes/string.php'
));