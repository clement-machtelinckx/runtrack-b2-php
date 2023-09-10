<?php

class Grade {

    private $id;
    private $room_id;
    private $name;
    private $year;

    public function __construct(
        int $id = null,
        int $room_id = null,
        string $name = "",
        string $year = ""
    )
    {
        $this->id = $id;
        $this->room_id = $room_id;
        $this->name = $name;
        $this->year = $year;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getRoom_id(){
        return $this->room_id;
    }

    public function setRoom_id($room_id){
        $this->room_id = $room_id;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getYear(){
        return $this->year;
    }
    public function setYear($year){
        $this->year = $year;
    }

    public function __toString() {
        return "Grade ID: " . $this->id . "<br>" .
               "Room ID: " . $this->room_id . "<br>" .
               "Name: " . $this->name . "<br>" .
               "Year: " . $this->year . "<br>" .
               "<br>";
    }
}