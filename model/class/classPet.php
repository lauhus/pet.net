<?php

Class Pet{

    private $_id_pet;
    private $_name_pet;
    private $_genre;
    private $_type;
    private $_identification;
    private $_veterinaire;
    private $_soins;
    private $_nourriture;
    private $_eau;
    private $_box;
    private $_remarque;
    private $_entree;
    private $_sortie;

    public function __construct(array $array)
    {
        $this->hydrate_pet($array);
    }

    public function hydrate_pet(array $array)
    {
        if (isset($array[0]['id_pet'])){
            //$this->_id_pet=$array['_id_pet'];
            $this->set_id_pet($array[0]['id_pet']);
        }
        if (isset($array[0]['name_pet'])){
            //$this->_name_pet=$array['_name_pet'];
            $this->set_name_pet($array[0]['name_pet']);
        }
        if (isset($array[0]['genre'])){
            //$this->_genre=$array['_genre'];
            $this->set_genre($array[0]['genre']);
        }
        if (isset($array[0]['type'])){
            //$this->_type=$array['_type'];
            $this->set_type($array[0]['type']);
        }
        if (isset($array[0]['identification'])){
            //$this->_identification=$array['_identification'];
            $this->set_identification($array[0]['identification']);
        }
        if (isset($array[0]['veterinaire'])){
            //$this->_veterinaire=$array['_veterinaire'];
            $this->set_veterinaire($array[0]['veterinaire']);
        }
        if (isset($array[0]['soins'])){
            //$this->_soins=$array['_soins'];
            $this->set_soins($array[0]['soins']);
        }
        if (isset($array[0]['nourriture'])){
            //$this->_nourriture=$array['_nourriture'];
            $this->set_nourriture($array[0]['nourriture']);
        }
        if (isset($array[0]['eau'])){
            //$this->_eau=$array['_eau'];
            $this->set_eau($array[0]['eau']);
        }
        if (isset($array[0]['box'])){
            //$this->_box=$array['_box'];
            $this->set_box($array[0]['box']);
        }
        if (isset($array[0]['remarque'])){
            //$this->_remarque=$array['_remarque'];
            $this->set_remarque($array[0]['remarque']);
        }
        if (isset($array[0]['date_entree'])){
            //$this->_entree=$array['_date_entree'];
            $this->set_entree($array[0]['date_entree']);
        }
        if (isset($array[0]['date_sortie'])){
            //$this->_sortie=$array['_date_sortie'];
            $this->set_sortie($array[0]['date_sortie']);
        }
        // foreach($array as $key => $value){
        //     $method='set_'.$key;

        //     if(method_exists($this,$method)){
        //         $this->$method($value);
        //     }
        // }
    }

    

    /**
     * Get the value of _id_pet
     */ 
    public function get_id_pet()
    {
        return $this->_id_pet;
    }

    /**
     * Get the value of _name_pet
     */ 
    public function get_name_pet()
    {
        return $this->_name_pet;
    }

    /**
     * Set the value of _name_pet
     *
     * @return  self
     */ 
    public function set_name_pet($_name_pet)
    {
        $this->_name_pet = $_name_pet;

        return $this;
    }

    /**
     * Get the value of _genre
     */ 
    public function get_genre()
    {
        return $this->_genre;
    }

    /**
     * Set the value of _genre
     *
     * @return  self
     */ 
    public function set_genre($_genre)
    {
        $this->_genre = $_genre;

        return $this;
    }

    /**
     * Get the value of _type
     */ 
    public function get_type()
    {
        return $this->_type;
    }

    /**
     * Set the value of _type
     *
     * @return  self
     */ 
    public function set_type($_type)
    {
        $this->_type = $_type;

        return $this;
    }

    /**
     * Get the value of _identification
     */ 
    public function get_identification()
    {
        return $this->_identification;
    }

    /**
     * Set the value of _identification
     *
     * @return  self
     */ 
    public function set_identification($_identification)
    {
        $this->_identification = $_identification;

        return $this;
    }

    /**
     * Get the value of _veterinaire
     */ 
    public function get_veterinaire()
    {
        return $this->_veterinaire;
    }

    /**
     * Set the value of _veterinaire
     *
     * @return  self
     */ 
    public function set_veterinaire($_veterinaire)
    {
        $this->_veterinaire = $_veterinaire;

        return $this;
    }

    /**
     * Get the value of _soins
     */ 
    public function get_soins()
    {
        return $this->_soins;
    }

    /**
     * Set the value of _soins
     *
     * @return  self
     */ 
    public function set_soins($_soins)
    {
        $this->_soins = $_soins;

        return $this;
    }

    /**
     * Get the value of _nourriture
     */ 
    public function get_nourriture()
    {
        return $this->_nourriture;
    }

    /**
     * Set the value of _nourriture
     *
     * @return  self
     */ 
    public function set_nourriture($_nourriture)
    {
        $this->_nourriture = $_nourriture;

        return $this;
    }

    /**
     * Get the value of _eau
     */ 
    public function get_eau()
    {
        return $this->_eau;
    }

    /**
     * Set the value of _eau
     *
     * @return  self
     */ 
    public function set_eau($_eau)
    {
        $this->_eau = $_eau;

        return $this;
    }

    /**
     * Get the value of _box
     */ 
    public function get_box()
    {
        return $this->_box;
    }

    /**
     * Set the value of _box
     *
     * @return  self
     */ 
    public function set_box($_box)
    {
        $this->_box = $_box;

        return $this;
    }

    /**
     * Get the value of _remarque
     */ 
    public function get_remarque()
    {
        return $this->_remarque;
    }

    /**
     * Set the value of _remarque
     *
     * @return  self
     */ 
    public function set_remarque($_remarque)
    {
        $this->_remarque = $_remarque;

        return $this;
    }

    /**
     * Get the value of _entree
     */ 
    public function get_entree()
    {
        return $this->_entree;
    }

    /**
     * Set the value of _entree
     *
     * @return  self
     */ 
    public function set_entree($_entree)
    {
        $this->_entree = $_entree;

        return $this;
    }

    /**
     * Get the value of _sortie
     */ 
    public function get_sortie()
    {
        return $this->_sortie;
    }

    /**
     * Set the value of _sortie
     *
     * @return  self
     */ 
    public function set_sortie($_sortie)
    {
        $this->_sortie = $_sortie;

        return $this;
    }

    /**
     * Set the value of _id_pet
     *
     * @return  self
     */ 
    public function set_id_pet($_id_pet)
    {
        $this->_id_pet = $_id_pet;

        return $this;
    }
}