<?php

namespace App\Classes;


class Bdd
{
    private $con;

    // Construction new PDO
    public function __construct($dns, $user, $password)
    {
        $this->con = new \PDO($dns, $user, $password);
        $this->setAttribute();
    }
    // Set Attribute
    public function setAttribute()
    {
        $this->con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
    // SELECT * FROM bdd
    public function queryAll($table)
    {
        return $this->con->query('SELECT * FROM ' . $table);
    }
    // Requete personnalisable
    public function query($query)
    {
        return $this->con->query($query);
    }
    //Requet Join user/produit
    public function queryAllJoinUser($table, $user)
    {
        return $this->con->query('SELECT * FROM ' . $table . ' RIGHT JOIN produit ON user_produit.produit_id = produit.id WHERE user_id =' . $user);
    }
    // Requete personnalisable
    public function queryUser($table, $userId)
    {
        return $this->con->query('SELECT * FROM ' . $table . ' WHERE id = ' . $userId);
    }
    //requete produit where id
    public function queryProduct($table, $productId)
    {
        return $this->con->query('SELECT * FROM ' . $table . ' WHERE id = ' . $productId);
    }
    //requete user_produit
    public function queryUserProduct($table, $productId, $userId)
    {
        return $this->con->query('SELECT * FROM ' . $table . ' WHERE produit_id = ' . $productId .  ' AND user_id =  ' . $userId);
    }

    //Requete de connexion
    public function connexion()
    {
        return $this->con->prepare('SELECT * FROM user WHERE email = :email');
    }
}
