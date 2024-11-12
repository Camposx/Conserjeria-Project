<?php

namespace App\Models;

use App\Database;

class Call{

    public ?int $id;
    public string $room;
    public string $issue;
    public ?string $dateTime;

    public $database;
    public $table;

    public function __construct($id="null",$room="",$issue="",$dateTime="null"){
    
        $this->id = $id;
        $this->room = $room;
        $this->issue = $issue;
        $this->dateTime = $dateTime;

        if (!$this->database) {
            $this->database = new Database();
        }
    }


    public function all(){
        $query = $this->database->mysql->query("SELECT * from {this->table}");
        $callArray = $query->fetchAll();

        $callList = [];


        foreach($callArray as $Call);{
            $callItem = new Call($call["id"],$call["room"],$call["issue"],$call["dateTime"]);
            array_push($CallList,$callItem);
        }
        return $callList;
    }
}