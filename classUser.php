<?php 

Class User{

    private $_id_user;
    private $_name_user;
    private $_firstname_user;
    private $_email_user;
    private $_phone_user;
    private $_password;


    /**
     * call function hydrate
     * @param array
     */
    private function __construct(array $array)
    {
        $this->hydrate_user($array);
    }


    /**
     * @param array 
     */
    public function hydrate_user(array $array)
    {
        if (isset($array['id_user'])){
            $this->_id_user=$array['id_user'];
        }
        if (isset($array['name_user'])){
            $this->_name_user=$array['name_user'];
        }
        if (isset($array['firstname_user'])){
            $this->_firstname_user=$array['firstname_user'];
        }
        if (isset($array['email_user'])){
            $this->_email_user=$array['email_user'];
        }
        if (isset($array['phone_user'])){
            $this->_phone_user=$array['phone_user'];
        }
        if (isset($array['password'])){
            $this->_password=$array['password'];
        }
    }

    /**
     * Get the value of _id_user
     */ 
    public function get_id_user()
    {
        return $this->_id_user;
    }

    /**
     * Get the value of _name_user
     */ 
    public function get_name_user()
    {
        return $this->_name_user;
    }

    /**
     * Set the value of _name_user
     *
     * @return  self
     */ 
    public function set_name_user($_name_user)
    {
        $this->_name_user = $_name_user;

        return $this;
    }

    /**
     * Get the value of _firstname_user
     */ 
    public function get_firstname_user()
    {
        return $this->_firstname_user;
    }

    /**
     * Set the value of _firstname_user
     *
     * @return  self
     */ 
    public function set_firstname_user($_firstname_user)
    {
        $this->_firstname_user = $_firstname_user;

        return $this;
    }

    /**
     * Get the value of _email_user
     */ 
    public function get_email_user()
    {
        return $this->_email_user;
    }

    /**
     * Set the value of _email_user
     *
     * @return  self
     */ 
    public function set_email_user($_email_user)
    {
        $this->_email_user = $_email_user;

        return $this;
    }

    /**
     * Get the value of _phone_user
     */ 
    public function get_phone_user()
    {
        return $this->_phone_user;
    }

    /**
     * Set the value of _phone_user
     *
     * @return  self
     */ 
    public function set_phone_user($_phone_user)
    {
        $this->_phone_user = $_phone_user;

        return $this;
    }

    /**
     * Set the value of _password
     *
     * @return  self
     */ 
    public function set_password($_password)
    {
        $this->_password = $_password;

        return $this;
    }

    /**
     * Get the value of _password
     */ 
    public function get_password()
    {
        return $this->_password;
    }
}