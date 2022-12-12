<?php
/*     require_once ('Account.php');
    require_once ('Car.php');

    echo "<h1>"."Programación orientada a objetos "."</h1>";
    $car=new Car("AWD123", new Account("Juan Pablo","123456"));
    $car->printDataCar(); */

require_once('Car.php');
require_once('UberX.php');
require_once('Account.php');
require_once("UberPool.php");
require_once("UberVan.php");

$uberX = new UberX("CBD123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");
$uberX->setPassenger(4);
$uberX->printDataCar();
/* 
$uberPool = new UberPool("TYU789", new Account("Andrea Ferrari", "ATQ456"), "Dodge", "Atitud");
$uberPool->printDataCar(); */
$uberVan = new UberVan("OJL123", new Account("Pablo Cortazar", "AHG456"), "Nissan", "Versa");
$uberVan->setPassenger(6);
$uberVan->printDataCar();
?>

