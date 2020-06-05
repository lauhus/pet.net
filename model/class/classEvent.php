<?php
use DateTimeInterface;

class Event{

    private $_id_events;
    private $_date;
    private $_start;
    private $_end;

    public function __construct(array $array)
    {
        $this->hydrate_event($array);
    }

    public function hydrate_event(array $array)
    {
        if (isset($array['id_events'])){
            $this->set_id_events($array['id_events']);
        }
        if (isset($array['date'])){
            $this->set_date($array['date']);
        }
        if (isset($array['start'])){
            $this->set_start($array['start']);
        }
        if (isset($array['end'])){
            $this->set_end($array['end']);
        }
    }

    

    /**
     * Get the value of _id_events
     */ 
    public function get_id_events()
    {
        return $this->_id_events;
    }

    /**
     * Get the value of _date
     */ 
    public function get_date():DateTimeInterface
    {
        return new DateTimeImmutable($this->_date);
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

    /**
     * Set the value of _id_events
     *
     * @return  self
     */ 
    public function set_id_events($_id_events)
    {
        $this->_id_events = $_id_events;

        return $this;
    }
}