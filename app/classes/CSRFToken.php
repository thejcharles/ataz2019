<?php


namespace App\Classes;


class CSRFToken
{
    /** Generate token
     * @return mixed
     * @throws \Exception
     */
    public static function _token()
    {
//        Session::remove('token'); exit;
        if(!Session::has('token')) {
            $randomToken = base64_encode(openssl_random_pseudo_bytes(32));
            Session::add('token', $randomToken);
        }
        return Session::get('token');
    }

    /** Verify CSRFToken
     * @param $requestToken
     * @return bool
     * @throws \Exception
     */

    public static function verifyCSRFToken($requestToken)
    {
        if(Session::has('token') && Session::get('token') === $requestToken){
            Session::remove('token');
            return true;
        }
        return false;
    }
}