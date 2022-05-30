<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class User1Service{

    use ConsumesExternalService;

    public $baseUri;
    
    public function __construct(){
        $this -> baseUri = config('services.users1.base_uri');
    }

    public function obtainUsers1(){
        return $this->performRequest('GET','/users');
    }

    public function createUser1($data){
        return $this->performRequest('POST','users',$data);
    }

    public function obtainsUsers1($userId){
        return $this->performRequest('GET',"/users/{$userId}");
    }

    public function editUser1($data, $userId){
        return $this->performRequest('PUT', "/users/{$userId}", $data);
    }

    public function deleteUser1($userId){
        return $this->performRequest('DELETE', "/users/{$userId}" );
    }
}

