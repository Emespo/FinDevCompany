<?php

namespace Controllers;


class Charge extends Controller
{

    protected $modelName = \Models\Charge::class;

    // ===================================================================================================
    // ===============================        création de Client =====================================
    // ===================================================================================================

    public function CreateNewCharge()
    {
        if (isset($_SESSION['userType'])) {
            header('Location: index.php?controller=page&task=index');
        } else {
            //prend les informations du formulaire inscription
            $chargeLabel = htmlspecialchars(filter_input(INPUT_POST, 'label'));
            $chargeCost = htmlspecialchars(filter_input(INPUT_POST, 'cost'));
            $chargeType = htmlspecialchars(filter_input(INPUT_POST, 'type'));
            $chargeCompte = htmlspecialchars(filter_input(INPUT_POST, 'compte'));

            if ($chargeLabel && $chargeCost && $chargeType && $chargeCompte) {
                $chargeData = compact("chargeLabel", "chargeCost", "chargeType", "chargeCompte");
                $sql = $this->model->createCharge($chargeData);
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

    public function modifyCharge()
    {
        if (isset($_SESSION['userType'])) {
            header('Location: index.php?controller=page&task=index');
        } else {

            //prend les informations du formulaire puis va vérifier un par un les informations à modifier en fonction des entrées

            $chargeLabel = htmlspecialchars(filter_input(INPUT_POST, 'label'));
            $chargeCost = htmlspecialchars(filter_input(INPUT_POST, 'cost'));
            $chargeType = htmlspecialchars(filter_input(INPUT_POST, 'type'));
            $chargeCompte = htmlspecialchars(filter_input(INPUT_POST, 'compte'));
            $chargeId = filter_input(INPUT_POST, 'id');
            //=======================================
            //chargeLabel
            if ($chargeLabel !== "") {
                $item = "label = '{$chargeLabel}'";
                $condition = "id = '{$chargeId}'";
                $this->model->udapte($item, $condition);
            }
            //=======================================
            //chargeCost
            if ($chargeCost !== "") {
                $item = "cost = '{$chargeCost}'";
                $condition = "id = '{$chargeId}'";
                $this->model->udapte($item, $condition);
            }

            //=======================================
            //chargeType
            if ($chargeType !== "") {
                $item = "type = '{$chargeType}'";
                $condition = "id = '{$chargeId}'";
                $this->model->udapte($item, $condition);
            }

            //=======================================
            //chargeCompte
            if ($chargeCompte !== "") {
                $item = "compte = '{$chargeCompte}'";
                $condition = "id = '{$chargeId}'";
                $this->model->udapte($item, $condition);
            }


            $data = $this->model->showAll("id = $chargeId");
            echo json_encode($data);
        }
    }

    // ===================================================================================================
    // ===============================        delete    ===================================
    // ===================================================================================================
    public function deleteCharge()
    {
        if (isset($_SESSION['userType'])) {
            header('Location: index.php?controller=page&task=index');
        } else {
            $id = filter_input(INPUT_GET, 'id');
            $condition = "id = " . $id;
            $this->model->delete($condition);

            echo json_encode($id);
        }
    }
}
