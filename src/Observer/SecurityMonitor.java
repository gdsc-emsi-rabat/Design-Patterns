package Observer;

public class SecurityMonitor implements Observer {

    private Login login;
    public SecurityMonitor(Login login) {
        this.login=login;
        login.attach(this);
    }

    @Override
    public void update(Observable observable) {
    int statut = login.getStatus();
        if ( statut == Login.LOGIN_WRONG_PASS ) {
            System.out.println( "sending mail to sysadmin");
        }else{
            System.out.println( "Login OK...");

        }
    }
}
