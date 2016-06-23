<?php
use Orm\Model;

class Model_User extends Model
{
    protected static $_properties = array(
        'id',
        'username',
        'password',
        'email',
        'created_at',
        'updated_at'
    );
    
    protected  static$_observers = array(
        'Orm\Observer_CreatedAt' => array(
            'events' => array('before_insert'),
            'mysql_timestamp' => false,
        ),
        'Orm\Observer_UpdatedAt' => array(
            'events' => array('before_save'),
            'mysql_timestamp' => false,
        ),
    );
    
    public static function validate($factory) {
        $val = Validation::forge($factory);
        $val->add_field('username', 'Username', 'required');
        $val->add_field('password', 'Password', 'required');
        $val->add_field('email', 'Password', 'valid_email');
        
        return $val;
    }
    
    public static function filter_data($input = array())
    {
        $data = array();
        foreach ($input as $k => $v)
        {
            if(DBUtil::field_exists('users', array($k)))
            {
                $data[$k] = $v;
            }
        }
        return $data;
    }
}
