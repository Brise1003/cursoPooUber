package CursoPOOUber.Java;

class Main{
    public static void main(String[] args) {

        Car car1 = new Car("AMQ123", new Account("Ándres Herrera", "AND123"));
        car1.passenger=4; 
        car1.printDataCar();

        Car car2 = new Car("QWE123", new Account("Andrea Herrera", "AND789"));
        car2.passenger = 3;
        car2.printDataCar();

    }
}