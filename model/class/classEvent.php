<?php

class Event{

    private $_id;
    private $_date;
    private $_start;
    private $_end;

    public function __construct(array $array)
    {
        $this->hydrate_event($array);
    }

    public function hydrate_event(array $array)
    {
        if (isset($array['id'])){
            $this->_id=$array['id'];
        }
        if (isset($array['date'])){
            $this->_date=$array['date'];
        }
        if (isset($array['start'])){
            $this->_start=$array['start'];
        }
        if (isset($array['end'])){
            $this->_end=$array['end'];
        }
    }

    

    /**
     * Get the value of _id
     */ 
    public function get_id()
    {
        return $this->_id;
    }

    /**
     * Get the value of _date
     */ 
    public function get_date()
    {
        return $this->_date;
    }

    /**
     * Set the value of _date
     *
     * @return  self
     */ 
    public function set_date($_date)
    {
        $this->_date = $_date;

        return $this;
    }

    /**
     * Get the value of _start
     */ 
    public function get_start()
    {
        return $this->_start;
    }

    /**
     * Set the value of _start
     *
     * @return  self
     */ 
    public function set_start($_start)
    {
        $this->_start = $_start;

        return $this;
    }

    /**
     * Get the value of _end
     */ 
    public function get_end()
    {
        return $this->_end;
    }

    /**
     * Set the value of _end
     *
     * @return  self
     */ 
    public function set_end($_end)
    {
        $this->_end = $_end;

        return $this;
    }
}