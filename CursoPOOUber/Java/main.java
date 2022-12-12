package CursoPOOUber.Java;

class Main{
    public static void main(String[] args) {

        UberX uberX = new UberX("AMQ123", new Account("Andres Herrera","AND456"), "Chevrolet", "sonic");
        uberX.setPassenger(4); 
        uberX.printDataCar();

        UberVan uberVan = new UberVan("FGH123", new Account("Andrea Herrera","AND456"));
        uberVan.setPassenger(6);
        uberVan.printDataCar();
    }
}