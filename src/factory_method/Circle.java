package factory_method;

public class Circle implements Product {
    @Override
    public void draw() {
        System.out.println("Circle");
    }
}
