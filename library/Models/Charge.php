<?php

namespace Models;



class Charge extends Model
{

    protected $table = "charge";



    public function createCharge($Data)
    {
        extract($Data);

        $sql = $this->pdo->prepare("INSERT INTO charge (id, label, cost, id_type) VALUES
                (DEFAULT, :label, :cost, :type, :compte)");
        $sql->execute(["label" => $chargeLabel, "cost" => $chargeCost, "type" => $chargeType, "compte" => $chargeCompte]);
    }
}
