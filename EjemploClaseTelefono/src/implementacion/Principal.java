package implementacion;

import java.util.Scanner;

import clases.Telefono;

public class Principal {

	public static void main(String[] args) {
		int a;
		Scanner entrada;
		//entrada = new Scanner(System.in);
		//Instanciando el objeto t
		//Si no se instancia un objeto
		//no se puede utilizar, mostraria
		//un error NullPointerException

		Telefono t=new Telefono(
					"Samsung", "Dorado","S7",
					465465,65465,65465,213,"1080p",
					"Android", "+504-45654654","546464654"
				);
		/*t.setMarca("Samsung");
		t.setModelo("S7");
		t.setColor("Dorado");
		t.setCapacidadDiscoBytes(1235245);
		t.setCapacidadMemoriaBytes(436456);
		t.setCapacidadProcesadorHertz(45345);*/

		/*System.out.println("Marca del telefono: " + t.getMarca());
		System.out.println("Marca del telefono: " + t.getColor());
		System.out.println("Marca del telefono: " + t.getSistemaOperativo());*/
		System.out.println(t.toString());
		t.llamar();
		t.vibrar();
		t.colgar();
	}

}
