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
        $takeCookie = $_COOKIE['PHPSESSID'];
        //selectionne le cookie et le supprime
        //puis détruit la session
        setcookie($takeCookie);
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
        if (isset($_SESSION['userType'])) {
            header('Location: index.php?controller=page&task=index');
        } else {

        $mail = filter_input(INPUT_POST, 'mail');
        //-----------------------------------------
        $a = filter_input(INPUT_POST, 'password');
        //------------------------
        $password = htmlspecialchars(filter_input(INPUT_POST, 'password'));
        if ($mail && $password) {
            //verifie si le mail existe
            $userLog = $this->model->checkUsersExist($mail);
            //vérifie si le mot de passe correspond
            $verifPassword = password_verify($password, $userLog[0]['pwd']);
            if ($verifPassword == true && ($mail == $userLog[0]['mail'])) // nom d'utilisateur et mot de passe correctes
            {
                if (!isset($_SESSION)) {
                    session_start();
                }
                //entre les information dans la session
                $_SESSION['id'] = $userLog[0]['id'];
                $_SESSION['nom'] = $userLog[0]['name'];
                $_SESSION['prenom'] = $userLog[0]['firstName'];
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

// ===================================================================================================
// ===============================        création d'utilisateur =====================================
// ===================================================================================================

    public function CreateNewUser()
    {
        if (isset($_SESSION['userType'])) {
            header('Location: index.php?controller=page&task=index');
        } else {

        //prend les informations du formulaire inscription
        $userName = htmlspecialchars(filter_input(INPUT_POST, 'name'));
        $userFirstName = htmlspecialchars(filter_input(INPUT_POST, 'firstName'));
        $userMail = filter_input(INPUT_POST, 'mail');
        $userPassword = htmlspecialchars(filter_input(INPUT_POST, 'password'));
        $userAdress = htmlspecialchars(filter_input(INPUT_POST, 'adress'));
        $userCity = htmlspecialchars(filter_input(INPUT_POST, 'city'));
        $userCP = htmlspecialchars(filter_input(INPUT_POST, 'cp'));
        $userType = htmlspecialchars(filter_input(INPUT_POST, 'type'));

        //hash le mot de passe à stocker
        $option = ['cost' => 12,];
        $hash = password_hash($userPassword, PASSWORD_BCRYPT, $option);

        if ($userName && $userFirstName && $userMail && $hash && $userAdress && $userCity && $userCP) {
            //vérifie si le mail existe si oui il s'arrete et envoie une erreur
            $verifMail = $this->model->checkUsersExist($mail);

            if ($verifMail['0']['mail'] == $userMail) {
                echo json_encode(("2"));
            } else {

                $usersData = compact("userName", "userFirstName", "userMail", "hash", "userAdress", "userCity", "userCP", "userType");
                $sql = $this->model->createUsers($usersData);
                echo json_encode(("1"));
                }
            
        } else {
            echo json_encode(("3"));
        }
    }
    }

    // ===================================================================================================
    // ===============================        modifyAdmin    ===========================================
    // ===================================================================================================
    // modifier les donnée user

    public function modifyUserAdmin()
    {
        if (isset($_SESSION['userType'])) {
            header('Location: index.php?controller=article&task=index');
        } else {

            //prend les informations du formulaire puis va vérifier un par un les informations à modifier en fonction des entrées

            $userName = htmlspecialchars(filter_input(INPUT_POST, 'nom'));
            $userFirstName = htmlspecialchars(filter_input(INPUT_POST, 'prenom'));
            $userMail = filter_input(INPUT_POST, 'mail');
            $userAdress = htmlspecialchars(filter_input(INPUT_POST, 'adress'));
            $userCity = htmlspecialchars(filter_input(INPUT_POST, 'city'));
            $userCp = htmlspecialchars(filter_input(INPUT_POST, 'cp'));
            $userPassword = htmlspecialchars(filter_input(INPUT_POST, 'pwd'));
            $userType = htmlspecialchars(filter_input(INPUT_POST, 'type'));
            $idUsers = filter_input(INPUT_POST, 'id');
            //=======================================
            //Nom
            if ($userName !== "") {
                $item = "nom = '{$userName}'";
                $condition = "id = '{$idUsers}'";
                $this->model->udapte($item, $condition);
            }
            //=======================================
            //Prenom
            if ($userFirstName !== "") {
                $item = "prenom = '{$userFirstName}'";
                $condition = "id = '{$idUsers}'";
                $this->model->udapte($item, $condition);
            }
            //=======================================
            //Mail
            if ($userMail !== "") {
                $item = "mail = '{$userMail}'";
                $condition = "id = '{$idUsers}'";
                $this->model->udapte($item, $condition);
            }
            //=======================================
            // adress
            if ($userAdress !== "") {
                $item = "adress = '{$userAdress}'";
                $condition = "id = '{$idUsers}'";
                $this->model->udapte($item, $condition);
            }

            //=======================================
            // Ville
            if ($userCity !== "") {
                $item = "city = '{$userCity}'";
                $condition = "id = '{$idUsers}'";
                $this->model->udapte($item, $condition);
            }
            //=======================================
            // CP
            if ($userCp !== "") {
                $item = "cp = '{$userCp}'";
                $condition = "id = '{$idUsers}'";
                $this->model->udapte($item, $condition);
            }
            //=======================================
            // mot de passe
            if ($userPassword !== "") {
                $option = ['cost' => 12,];
                $hash = password_hash($userPassword, PASSWORD_BCRYPT, $option);

                $item = "pwd = '{$hash}'";
                $condition = "id = '{$idUsers}'";
                $this->model->udapte($item, $condition);
            }
            //=======================================
            //=======================================
            // userType
            if ($userType !== "") {

                $item = "type = '{$userType}'";
                $condition = "id = '{$idUsers}'";
                $this->model->udapte($item, $condition);
            }
            $utilisateur = $this->model->showAll("id = $idUsers");
            echo json_encode($utilisateur);
        }
    }

 // ===================================================================================================
    // ===============================        delete    ===================================
    // ===================================================================================================
    public function deleteUser()
    {
        if (isset($_SESSION['userType'])) {
            header('Location: index.php?controller=page&task=index');
        } else {
            //supprime un utilisateur
            $id = filter_input(INPUT_GET, 'id');
            $condition = "id = " . $id;
            $this->model->delete($condition);

            echo json_encode($id);
        }
    }

}