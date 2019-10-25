<?php


class AuthController
{
    public static $login;
    public static $password;

    /**
     * Identifier un user
     * @param $datas
     * @param $uri
     * @throws Exception
     */
    public function login($datas,$uri) {
//        var_dump(self::$password);
//        die();
        if($datas['login'] == self::$login && password_verify($datas['password'], self::$password)) {
            session_start();
            $_SESSION['is_logged'] = true;
            header('Location: '.$uri);
            exit();
        } else {
            throw new Exception("Impossible de vous identifier");
        }

    }

}