<?php

class EventManager{

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

public function selectOneEvent($id_user,$id_pet):array
{
    $req=$this->_db->prepare('SELECT * FROM events WHERE pet_user_id_user = :id_user AND pet_id_pet = :id_pet ');
    $req->bindValue(':id_user',$id_user);
    $req->bindValue(':id_pet',$id_pet);
    $req->execute();
    $data=$req->fetch(PDO::FETCH_ASSOC);
    return $data;
}

public function selectDernierEvent($id_user)
{
    $req=$this->_db->prepare('SELECT date FROM events WHERE pet_user_id_user = :id_user');
    $req->bindValue(':id_user',$id_user);
    $req->execute();
    $data=$req->fetch(PDO::FETCH_ASSOC);

    $datas=max($data);

    $reqs=$this->_db->prepare('SELECT * FROM events WHERE date = :id_events');
    $reqs->bindValue(':id_events',$datas);
    $reqs->execute();
    $dernierrdv=$reqs->fetch(PDO::FETCH_ASSOC);
    return $dernierrdv;
}

public function selectAllRdvPet($id_user):array
{
    $req=$this->_db->prepare('SELECT * FROM events WHERE pet_user_id_user = :id_user');
    $req->bindValue(':id_user',$id_user);
    $req->execute();
    $data=$req->fetch(PDO::FETCH_ASSOC);
    return $data;
}

public function AddEvent($id_user,$date,$start,$end,$id_pet)
{
    $req=$this->_db->prepare('INSERT INTO events
    (date,start,end,created_by,created_at,updated_by,updated_at,pet_id_pet,pet_user_id_user)
    VALUES 
    (:date,:start,:end,:created_by,NOW(),:updated_by,NOW(),:pet_id_pet,:pet_user_id_user)');
    $req->bindValue(':date',$date);
    $req->bindValue(':start',$start);
    $req->bindValue(':end',$end);
    $req->bindValue(':created_by',$id_user);
    $req->bindValue(':updated_by',$id_user);
    $req->bindValue(':pet_id_pet',$id_pet);
    $req->bindValue(':pet_user_id_user',$id_user);
    $donnee=$req->execute();

    if (!$donnee) {
        echo "\nPDO::errorInfo():\n";
        print_r($req->errorInfo());}
}

public function deleteEvent($id)
{
    $req=$this->_db->prepare('DELETE FROM events WHERE id=:id_events');
    $req->bindValue(':id_events',$id);
    $req->execute();
}

public function verifEvent($start,$end)
{
    if ($start > $end){
        return false;
    } else {
        return true;
    }
}

public function AssistEvent($id_user,$id_pet,$box)
{
    
}



}