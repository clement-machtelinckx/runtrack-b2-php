<?php

class Room {

    private $id;
    private $floor_id;
    private $name;
    private $capacity;


    public function __construct(
        int $id = null,
        int $floor_id = null,
        string $name = "",
        int $capacity = null
    )
    {

        $this->id = $id;
        $this->floor_id = $floor_id;
        $this->name = $name;
        $this->capacity = $capacity;

    }


    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    
    public function getFloorId() {
        return $this->floor_id;
    }

    public function setFloorId($floor_id) {
        $this->floor_id = $floor_id;
    }
    
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
    public function getCapacity(){
        return $this->capacity;
    }
    public function setCapacity($capacity){
        $this->capacity = $capacity;
    }


    public function __toString() {
        return "Room ID: " . $this->id . "<br>" .
               "Floor ID: " . $this->floor_id . "<br>" .
               "Name: " . $this->name . "<br>" .
               "Capacity: " . $this->capacity . "<br>" .
               "<br>";
    }

}





?>