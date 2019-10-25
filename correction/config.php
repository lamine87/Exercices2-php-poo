<?php
require_once "controllers/AuthController.php";
require_once "../User.php";
//$user = new User();
//$user->setLogin('toto');
//$user->setPassword('123456789');
//$user->setIsAdmin(true);
//if($user->getIsAdmin()) {
    AuthController::$login ='toto';
    AuthController::$password = password_hash('123456789',PASSWORD_ARGON2ID);
//}
