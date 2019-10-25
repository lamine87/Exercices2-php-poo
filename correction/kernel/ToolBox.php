<?php


class ToolBox
{

    /**
     * Extraire et sécuriser les données d'un formulaire
     * @param array $datas_form
     * @param array $keys
     * @return array
     */
    public static function extract_datas_form(array $datas_form,array $keys) {
//    print_r( array_keys($datas_form));
//    print_r($keys);
//    die();
        // Comparer les clés du tableau $datas_form($_POST) avec les clés attendus $keys > si elles sont différentes >
        // la function return false
        $keys_form = array_keys($datas_form);
        $difference = array_diff($keys_form,$keys);
//    print_r($difference);
//    die();
//   $keys;
        // Si dans le tableau, on a au moins une valeur, c'est que les clés émises par le form sont différentes des clés
        // attendues > dans ce cas on return false
        if(count($difference) > 0) {
//        echo "different";
            return false;
        }
        // Si c'est ok > avec une boucle on parcourt le tableau $datas_form et pour chaque value on test si vide ou pas.
        // Si vide > on stocke dans le tableau de sortie de la function ($datas) la clé et la valeur vide
        // si pas vide > on stocke dans le tableau la clé et la valeur nettoyée avec un trim
        $datas = [];
        foreach($datas_form as $key => $data) {
            if(empty($data)) {
                $datas[$key] = null;
            } else {
                $datas[$key] = trim($data);
            }
        }
        return $datas;
    }

    /**
     * Stocker un message flash
     * @param array $messages
     * @return void
     */
    public static function setFlash(array $messages) :void {
        // vérifier si la session existe
        if(!isset($_SESSION)) {
            session_start();
        }
        // Stockage dans la session du tableau contenant les messages de l'utilisateur
        $_SESSION['flash'] = [
            'messages' =>$messages
        ];
    }

    /**
     * Afficher les messages flash
     */
    public static function getFlash() :void {
//    // vérifier si la session existe
//    if(!isset($_SESSION)) {
//        session_start();
//    }
        // La session contient des messages ?
        if(isset($_SESSION['flash']['messages'])) {
            // Si oui, on parcours le tableau pour afficher le/les messages stockés en session
            foreach($_SESSION['flash']['messages'] as $message) {
                $color = $message['type'];
                $message = $message['message'];
                echo "<div class='alert alert-$color'>$message</div>";
            }
            // puis suppression du/des messages de la session
            unset($_SESSION['flash']['messages']);
        }
    }

}