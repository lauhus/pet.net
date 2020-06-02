<?php 

class PetManager{

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


    public function selectOnePet($id_user, $name_pet):array
    {
        $req=$this->_db->prepare('SELECT * FROM pet WHERE user_id_user = :id_user AND name_pet = :name_pet ');
        $req->bindValue(':id_user',$id_user);
        $req->bindValue(':name_pet',$name_pet);
        $req->execute();
        $data=$req->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function selectAllPet($id_user):array
    {
        $req=$this->_db->prepare('SELECT * FROM pet WHERE user_id_user = :id_user');
        $req->bindValue(':id_user',$id_user);
        $req->execute();
        $data=$req->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function selectAllPetName($id_user):array
    {
        $req=$this->_db->prepare('SELECT name_pet FROM pet WHERE user_id_user = :id_user');
        $req->bindValue(':id_user',$id_user);
        $req->execute();
        $data=$req->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    
    public function deletePet($id_pet)
    {
        $req=$this->_db->prepare('DELETE FROM pet WHERE id_pet=:id_pet');
        $req->bindValue(':id_pet',$id_pet);
        $req->execute();
    }

}