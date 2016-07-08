<?php
use Orm\Model;

class Model_User extends Model
{
    protected static $_table_name = 'users';
    protected static $_primary_key = ['id'];

    protected static $_properties = array(
        'id',
        'username',
        'password',
        'email',
        'created_at',
        'updated_at'
    );
    
    protected static$_observers = array(
        'Orm\Observer_CreatedAt' => array(
            'events' => array('before_insert'),
            'mysql_timestamp' => false,
        ),
        'Orm\Observer_UpdatedAt' => array(
            'events' => array('before_save'),
            'mysql_timestamp' => false,
        ),
    );
    
    public static function validate_data($factory) {
        $val = Validation::forge($factory);
        $val->add_field('username', 'Username', 'required');
        $val->add_field('password', 'Password', 'required');
        $val->add_field('email', 'Email', 'valid_email');
        
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
    
    public static function update_data($id, $data)
    {
        try {
            //$data['updated_at'] = Date::forge()->get_timestamp();
            $query = Model_User::find($id);
            $query->set($data);
            $query->save();
        } catch (Exception $e) {
            Log::write('ERROR', $e->getMessage());
            return false;
        }

        return true;
    }
}
