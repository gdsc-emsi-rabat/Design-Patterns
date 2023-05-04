package factory_method;

public class Main {
    public static void main(String[] args) {
        ConcreteCreator creator = new ConcreteCreator();
        Product product = creator.create("Triangle");
        product.draw();
        product = creator.create("Circle");
        product.draw();
        product = creator.create("Square");
        product.draw();
    }
}
