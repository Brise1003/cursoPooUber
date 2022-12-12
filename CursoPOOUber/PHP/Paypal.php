<?php
require_once('Payment.php');
class Paypal extends Payment{
    public $email;

    public function __construct($email){
        $this->email = $email;
    }
}
?>