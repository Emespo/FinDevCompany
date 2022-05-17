<?php

namespace Models;


class Client extends Model
{
    protected $table = "client";

    
    public function createClient($usersData)
    {
        extract($usersData);

             $sql = $this->pdo->prepare("INSERT INTO users (id, name_company, first_name, 'name', adress, city, cp, mail) VALUES
                (DEFAULT, :company, :prenom, :nom, :adress, :ville, :cp, :mail) ");
        $sql->execute(["company" => $userNameCompany, "prenom" => $userFirstName, "nom" => $userName, "adress" => $userAdress, "ville" => $userCity, "cp" => $userCP, "mail" => $userMail]);
    }

}
