<?php
require_once('Accout.php');
class User extends Account{
    public function __construct($name, $document, $email, $password){
        super( $name, $document, $email, $password);
    }
}
?>