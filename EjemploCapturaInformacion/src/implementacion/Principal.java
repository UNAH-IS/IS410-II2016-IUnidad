package implementacion;

import javax.swing.JOptionPane;

public class Principal {
	public Principal(){
		String nombre = JOptionPane.showInputDialog("Ingrese su nombre");
		JOptionPane.showMessageDialog(null, "Hola " + nombre);
	}
	public static void main(String[] args) {
		new Principal();
	}
}
