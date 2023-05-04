package factory_method;

public class Square implements Product {
    @Override
    public void draw() {
        System.out.println("Square");
    }
}
