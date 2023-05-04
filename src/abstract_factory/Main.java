package abstract_factory;

public class Main {
    public static void main(String[] args) {
        ProductFactory1 productFactory1 = new ProductFactory1();
        ProductA productA = productFactory1.createProductA();
        productA.draw();
        ProductB productB = productFactory1.createProductB();
        productB.draw();

        ProductFactory2 productFactory2 = new ProductFactory2();
        ProductA product_A = productFactory2.createProductA();
        product_A.draw();
        ProductB product_B = productFactory2.createProductB();
        product_B.draw();

    }
}
