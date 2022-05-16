<?php

namespace Controllers;


class Users extends Controller
{
    protected $modelName = \Models\Users::class;


    // ===================================================================================================
    // ===============================        deconnexion    ===========================================
    // ===================================================================================================

    public function logOut()
    {
        if (!isset($_SESSION)) {

            session_start();
        }
        $a = $_COOKIE['PHPSESSID'];
        //selectionne le cookie et le supprime
        //puis détruit la session
        setcookie($a);
        session_unset();
        session_destroy();


        header('location: index.php?controller=article&task=index');
    }
    // ===================================================================================================
    // ===============================        connexion    ===========================================
    // ===================================================================================================

    // connexion user
    public function connexion()
    {
        $mail = filter_input(INPUT_POST, 'mail');
        //-----------------------------------------
        $a = filter_input(INPUT_POST, 'password');
        //------------------------
        $password = htmlspecialchars(filter_input(INPUT_POST, 'password'));
        if ($mail && $password) {
            //verifie si le mail existe
            $userLog = $this->model->showAll("mail = '{$mail}'");
            //vérifie si le mot de passe correspond
            $verifPassword = password_verify($password, $userLog[0]['pwd']);
            if ($verifPassword == true && ($mail == $userLog[0]['mail'])) // nom d'utilisateur et mot de passe correctes
            {
                if (!isset($_SESSION)) {
                    session_start();
                }
                //entre les information dans la session
                $_SESSION['id'] = $userLog[0]['id_user'];
                $_SESSION['nom'] = $userLog[0]['nom'];
                $_SESSION['prenom'] = $userLog[0]['prenom'];
                $_SESSION['mail'] = $userLog[0]['mail'];
                $_SESSION['adress'] = $userLog[0]['adress'];
                $_SESSION['ville'] = $userLog[0]['city'];
                $_SESSION['cp'] = $userLog[0]['cp'];
                $_SESSION['userType'] = $userLog[0]['type'];

                //connecter
                echo json_encode("1");
            } else {
                echo json_encode("2");
            }
        } else {
            echo json_encode("3");
        }
    }

    
}
