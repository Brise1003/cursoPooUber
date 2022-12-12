package CursoPOOUber.Java;

import java.util.Date;

public class Card extends Payment{
    Integer number;
    Integer cvv;
    Date cardDate;
    
    public Card( Integer number, Integer cvv, Date cardDate){
        
        this.number = number;
        this.cvv = cvv;
        this.cardDate = cardDate;
    }
}
