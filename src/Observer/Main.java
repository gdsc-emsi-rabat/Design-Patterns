package Observer;

public class Main {
    public static void main(String[] args) {

        Login login = new Login();
        new SecurityMonitor(login);
        login.handleLogin("foo", "1234", "127.0.0.1");
        login.handleLogin("foo", "foo", "127.0.0.1");
    }
}
