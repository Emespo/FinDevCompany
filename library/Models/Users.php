<?php

namespace Models;


class Users extends Model
{
    protected $table = "users";

    public function createUsers($usersData)
    {
        extract($usersData);

             $sql = $this->pdo->prepare("INSERT INTO users (id, first_name, 'name', adress, city, cp, mail, 'password', id_type) VALUES
                (DEFAULT, :prenom, :nom, :adress, :ville, :cp, :mail, :mdp, :type) ");
        $sql->execute(["prenom" => $userFirstName, "nom" => $userName,  "mail" => $userMail, "mdp" => $hash, "adress" => $userAdress, "ville" => $userCity, "cp" => $userCP, "type" => $userType]);
    }

    // ===================================================================================================
    // ===============================        checkUsersExist   ===================================
    // ===================================================================================================
    public function checkUsersExist($mail)
    {

        $requete = "SELECT * FROM $this->table WHERE  mail = ?";
        
        $sql = $this->pdo->prepare($requete);
        $sql->execute([$mail]);
        $response = $sql->fetchAll();
        return $response;
    }


    

}
