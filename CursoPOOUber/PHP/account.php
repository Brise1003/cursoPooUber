<?php

class Account{
    public $id;
    public $name;
    public $document;
    public $email;
    public $password;

    public function __construct($name, $document){
        $this->name=$name;
        $this->document=$document;
    }

    /* public function __construct($name, $document, $email, $password){
        $this->name=$name;
        $this->document=$document;
    } */
}
?>