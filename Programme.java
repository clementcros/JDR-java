import java.util.*;

//import treePack.*;
import cardPack.*;


public class Programme {

	public static void main(String arg[]) {

		Elf e = new Elf(1, "apero", 100, 10, 100, 10);
		e.display();

		Warrior w = new Warrior(2, "billy", 100, 50, 100, 100);
		w.display();

		w.attack(e);
		e.display();

	}
}