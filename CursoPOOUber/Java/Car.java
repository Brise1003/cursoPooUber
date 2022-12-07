package CursoPOOUber.Java;

public class Car {
    Integer id;
    String license;
    Account driver;
    Integer passenger;
    
    //Método constructor
    public Car(String license, Account driver){
        this.license=license;
        this.driver=driver;
    }

    void printDataCar(){
        System.out.println("License: "+ license + " Name Driver: " + driver.name);
    }
}
