package Observer;

public interface Observable {
    void attach(Observer $observer);
    void detach(Observer $observer);
    void notif();

}
