<?php
require_once('Account.php');
class Driver extends Account{
    public function __construct( $name, $document, $email, $password){
        super( $name, $document, $email, $password);
    }
}

?>