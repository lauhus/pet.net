<?php 

class UserManager{

private $_db;


public function __construct()
{
    $this->set_db();
}

/**
 * Set the value of _db
 *
 * @return  self
 */ 
public function set_db()
{
    $this->_db =new PDO('mysql:host=localhost;dbname=pet_net;charset=utf8','lauhu','stagiaire '); ;

    return $this;
}

public function selectUser($email,$mdp)
{
    $req=$this->_db->prepare('SELECT * FROM user WHERE email_user = :email AND mot_de_passe = :mdp ');
    $req->bindValue(':email',$email);
    $req->bindValue(':mdp',$mdp);
    $req->execute();
    $data=$req->fetch(PDO::FETCH_ASSOC);
    return $data;
}

}