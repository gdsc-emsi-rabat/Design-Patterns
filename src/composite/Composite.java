package composite;

import java.util.ArrayList;
import java.util.List;

public class Composite extends Component {
    List<String> l = new ArrayList<String>();

    public void addChild(String comp){
        l.add(comp);
        System.out.println("Number of components: " + l.size());
    }

    @Override
    public void operation() {
        System.out.println("Composite");
    }
}
