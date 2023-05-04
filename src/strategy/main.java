package strategy;

public class main {
    public static void main(String[] args) {
        Strategy strategy;
        strategy = new ConcreteStrategyA();
        strategy.algo();
        strategy = new ConcreteStrategyB();
        strategy.algo();
        strategy = new ConcreteStrategyC();
        strategy.algo();
    }
}

