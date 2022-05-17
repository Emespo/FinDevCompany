<?php

namespace Controllers;


class Client extends Controller
{

    protected $modelName = \Models\Client::class;

// ===================================================================================================
// ===============================        création de Client =====================================
// ===================================================================================================

    public function CreateNewClient()
    {
        if (isset($_SESSION['userType'])) {
            header('Location: index.php?controller=page&task=index');
        } else {
        //prend les informations du formulaire inscription
        $userNameCompany = htmlspecialchars(filter_input(INPUT_POST, 'nameCompany'));
        $userFirstName = htmlspecialchars(filter_input(INPUT_POST, 'firstName'));
        $userName = htmlspecialchars(filter_input(INPUT_POST, 'name'));
        $userAdress = htmlspecialchars(filter_input(INPUT_POST, 'adress'));
        $userCity = htmlspecialchars(filter_input(INPUT_POST, 'city'));
        $userCP = htmlspecialchars(filter_input(INPUT_POST, 'cp'));
        $userMail = filter_input(INPUT_POST, 'mail');

        if ($userName && $userFirstName && $userMail && $hash && $userAdress && $userCity && $userCP) {
                $usersData = compact("userName", "userFirstName", "userMail", "userAdress", "userCity", "userCP", "userNameCompany" );
                $sql = $this->model->createClient($usersData);
                echo json_encode(("1"));     
            
        } else {
            echo json_encode(("2"));
        }
    }
    }

    // ===================================================================================================
    // ===============================        modifyAdmin    ===========================================
    // ===================================================================================================
    // modifier les donnée user

    public function modifyClient()
    {
        if (isset($_SESSION['userType'])) {
            header('Location: index.php?controller=page&task=index');
        } else {

            //prend les informations du formulaire puis va vérifier un par un les informations à modifier en fonction des entrées

            $userNameCompany = htmlspecialchars(filter_input(INPUT_POST, 'nameCompany'));
            $userFirstName = htmlspecialchars(filter_input(INPUT_POST, 'firstName'));
            $userName = htmlspecialchars(filter_input(INPUT_POST, 'name'));
            $userAdress = htmlspecialchars(filter_input(INPUT_POST, 'adress'));
            $userCity = htmlspecialchars(filter_input(INPUT_POST, 'city'));
            $userCP = htmlspecialchars(filter_input(INPUT_POST, 'cp'));
            $userMail = filter_input(INPUT_POST, 'mail');
            $userId = filter_input(INPUT_POST, 'id');
                        //=======================================
            //Name Company
            if ($userNameCompany !== "") {
                $item = "nom = '{$userNameCompany}'";
                $condition = "id = '{$userId}'";
                $this->model->udapte($item, $condition);
            }
            //=======================================
            //Nom
            if ($userName !== "") {
                $item = "nom = '{$userName}'";
                $condition = "id = '{$userId}'";
                $this->model->udapte($item, $condition);
            }
            //=======================================
            //Prenom
            if ($userFirstName !== "") {
                $item = "prenom = '{$userFirstName}'";
                $condition = "id = '{$userId}'";
                $this->model->udapte($item, $condition);
            }
            //=======================================
            //Mail
            if ($userMail !== "") {
                $item = "mail = '{$userMail}'";
                $condition = "id = '{$userId}'";
                $this->model->udapte($item, $condition);
            }
            //=======================================
            // adress
            if ($userAdress !== "") {
                $item = "adress = '{$userAdress}'";
                $condition = "id = '{$userId}'";
                $this->model->udapte($item, $condition);
            }

            //=======================================
            // Ville
            if ($userCity !== "") {
                $item = "city = '{$userCity}'";
                $condition = "id = '{$userId}'";
                $this->model->udapte($item, $condition);
            }
            //=======================================
            // CP
            if ($userCp !== "") {
                $item = "cp = '{$userCp}'";
                $condition = "id = '{$userId}'";
                $this->model->udapte($item, $condition);
            }
            
            $utilisateur = $this->model->showAll("id = $userId");
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
