package composite;

public class Main {
    public static void main(String[] args) {
        Composite cm1 = new Composite();
        cm1.operation();
        Leaf cm2 = new Leaf();
        cm2.addChild( "test");
        cm2.operation();

        Composite cm3 = new Composite();
        cm3.operation();
        cm3.addChild( "test2");
        cm3.addChild( "test3");
    }
}
