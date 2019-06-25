<?php


namespace App\Classes;



class Session
{
    //create a new session
    /**
     * @param $name
     * @param $value
     * @return mixed
     * @throws \Exception
     */

    public static function add($name, $value)
    {
        if($name != '' && !empty($name) && $value != '' && !empty($value)){
            return $_SESSION[$name] = $value;
        }

        throw new \Exception('Name and value required');
    }

    /**
     * @param $name
     * @return mixed
     */

    //get value from session

    public static function get($name)
    {
        return $_SESSION[$name];
    }

    //check if session exists
    /**
     * @param $name
     * @return bool
     * @throws Exception
     */
    public static function has($name)
    {
         if($name != '' && !empty($name))
         {
             return (isset($_SESSION[$name])) ? true : false;
         }
         throw new Exception('name is required');
    }

    //remove session

    /**
     * @param $name
     */

    public static function remove($name)
    {
        if(self::has($name))
        {
            unset($_SESSION[$name]);
        }
    }
}