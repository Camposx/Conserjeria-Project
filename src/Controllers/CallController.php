<?php
namespace App\Controllers;
use App\Models\Call;
use App\Core\View;

class CallController{
    public function __construct(){

        $this->index();
    }
    public function index(){
        $call = new Call;
        $calls = $call->all();
        new View("callList", ["call" => $calls]);
    }

    public function delete($id){
        $callDelete = new call;
        $call = $callDelete->findById($id);
        $call->destroy();
        $this->index();
    }
    public function create(){
        new view("createCall");
    }
    public function store(array $request){
        $newCall = new Call(null, $request["room"], $request["issue"], null);
        $newCall->save();
        $this->index();
    }
}