<?php 

class PetManager extends Pet{

    private $_db;

    public function __construct()
    {
        $this->_db->set_db();
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


    public function selectOnePet($id_user):array
    {
        $req=$this->_db->prepare('SELECT * FROM pet WHERE user_id_user = :id_user ');
        $req->bindValue(':id_user',$id_user);
        $req->execute();
        $data=$req->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

}