<?php

class User
{
    // Déclaration des attributs
    public $prenom;
    public $nom;
    private $age;
    private $email;
    private $password;
    private $login;
    private $is_admin;

    public function getLogin() {
        return $this->login;
    }
    public function setLogin($login) {
        $this->login = $login;
    }

    public function setAge($age) {
        if($age > 18) {
            $this->age = $age;
        } else {
//            echo "âge interdit";
            throw new Exception("L'utilisateur doit être majeur !");
        }
    }

    /**
     * Vérifier le format d'un email
     * @param string|null $email
     * @throws Exception
     */
    public function setEmail(?string $email) {
        $is_valid = false;
        if(filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $is_valid = true;
        }
        if($is_valid) {
            $e = explode("@",$email);
            if(!checkdnsrr($e[1],'MX')) $is_valid = false;
        }
        if($is_valid) {
            $this->email = $email;
        } else {
            throw new Exception('Email invalide');
        }
    }


    public function getPassword() {
        return $this->password;
    }

    /**
     * Définir un mot de passe
     * @param $password
     * @throws Exception
     */
    public function setPassword($password) {
        if(strlen($password) < 8 ) {
            throw new Exception("Mot de passe trop court. Mini 8 caractères");
        }
        $this->password = password_hash($password,PASSWORD_ARGON2ID);
    }

    public function setIsAdmin(bool $is_admin) {
        $this->is_admin = $is_admin;
    }

    public function getIsAdmin() {
        return $this->is_admin;
    }



} // fermeture class
