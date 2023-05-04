package factory_method;

public class ConcreteCreator implements Creator {
    @Override
    public Product create(String condition) {
        Product product;
        switch (condition){
            case "Triangle":product =  new Triangle();break;
            case "Circle":product =  new Circle();break;
            case "Square":product =  new Square();break;
            default: product=null;
        }
        return product;
    }
}
