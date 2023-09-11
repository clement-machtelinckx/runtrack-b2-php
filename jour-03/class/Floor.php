<?php

class Floor {

    private $id;
    private $name;
    private $level;

    public function __construct(
        int $id = null,
        string $name = "",
        int $level = null
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->level = $level;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }

    public function getLevel(){
        return $this->level;
    }
    public function setLevel($level){
        $this->level = $level;
    }


    public function __toString() {
        return "Floor ID: " . $this->id . "<br>" .
               "Name: " . $this->name . "<br>" .
               "Level: " . $this->level . "<br>" .
               "<br>";
    }


    function getRooms(){

        $servername = "localhost";
        $username = "root";
        $password = "Clement2203$";
        $dbname = "Ip_official";
        
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connexion réussie (floor)<br>";
    } catch(PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
    }
    
        $sql = "SELECT * FROM room WHERE floor_id = :floor_id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':floor_id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
        
        $roomsData = $stmt->fetchALL(PDO::FETCH_ASSOC);
    

        $rooms = [];

        foreach ($roomsData as $roomData) {
            $room = new Room(
                $roomData['id'],
                $roomData['floor_id'],
                $roomData['name'],
                $roomData['capacity'],
            );
            $rooms[] = $room;

    }
    return $rooms;

}
}





?>