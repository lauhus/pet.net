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


    public function __construct(array $array)
    {
        $this->hydrate_pet($array);
    }

    public function hydrate_pet(array $array)
    {
        if (isset($array['id_pet'])){
            $this->_id_pet=$array['id_pet'];
        }
        if (isset($array['name_pet'])){
            $this->_name_pet=$array['name_pet'];
        }
        if (isset($array['genre'])){
            $this->_genre=$array['genre'];
        }
        if (isset($array['type'])){
            $this->_type=$array['type'];
        }
        if (isset($array['identification'])){
            $this->_identification=$array['identification'];
        }
        if (isset($array['veterinaire'])){
            $this->_veterinaire=$array['veterinaire'];
        }
        if (isset($array['soins'])){
            $this->_soins=$array['soins'];
        }
        if (isset($array['nourriture'])){
            $this->_nourriture=$array['nourriture'];
        }
        if (isset($array['eau'])){
            $this->_eau=$array['eau'];
        }
        if (isset($array['box'])){
            $this->_box=$array['box'];
        }
        if (isset($array['remarque'])){
            $this->_remarque=$array['remarque'];
        }
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
}