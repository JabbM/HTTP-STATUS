<?php
namespace models;

class m_httpStatus extends \Model
{
    //get one web site by id
    public function getOne_byId (int $id) {
        return $this -> get_one ('list_web', ['id' => $id]);
    }

    //show one
    public function getOne (int $id) {
        return $this -> get_one ('list_web', ['id' => $id]);
    }

    //show all
    public function getAllWebSite (){
        return $this-> get('list_web');
    }

    //add
    public function addOneSite(int $id, string $url){
        return $this -> insert ('list_web', ['id' => $id, 'webUrl' => $url]);
    }
    // modify
    public function modifyOneSite(int $id, string $url){
        return $this -> update ('list_web', ['id' => $id, 'webUrl' => $url]);
    }
    //delete
    public function deleteOneSite(int $id){
        return $this -> delete ('list_web', ['id' => $id]);
    }

    // login
    public function login (string $mail, string $pass) {
       return $this -> get_one ('user', ['mail' -> $mail, 'pass' -> $pass]);
    }

   // history
    public function history (int $id) {
       return $this -> get ('history', ['id' => $id]);
    }

}