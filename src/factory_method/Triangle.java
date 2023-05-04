package factory_method;

public class Triangle implements Product {
    @Override
    public void draw() {
        System.out.println("Triangle");
    }
}
