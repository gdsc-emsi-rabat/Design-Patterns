package Observer;

import java.util.ArrayList;
import java.util.List;

public class Login implements Observable {

    private List<Observer> observers = new ArrayList<Observer>();
    private int status;
    public static int LOGIN_ACCESS = 1;
    public static int LOGIN_WRONG_PASS = 0;

    public int getStatus() {
        return status;
    }

    public void setStatus(int status) {
        this.status = status;
    }

    @Override
    public void attach(Observer observer) {
    this.observers.add(observer);
    }

    @Override
    public void detach(Observer observer) {
        this.observers.remove(observer);

    }

    @Override
    public void notif() {
        for (Observer ob :
                observers ) {
            ob.update(this);

        }
    }

    public void handleLogin(String user,String pass,String ip){

        if(user == pass){
            this.status = LOGIN_ACCESS;
        }else{
            this.status = LOGIN_WRONG_PASS;
        }
        this.notif();

    }
}
