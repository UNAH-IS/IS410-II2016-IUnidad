package clases;

import javax.swing.JOptionPane;

public class Modelo {
	private int codigoModelo;
	private String nombreModelo;
	private String marca;

	public Modelo(int codigoModelo, String nombreModelo, String marca) {
		this.codigoModelo = codigoModelo;
		this.nombreModelo = nombreModelo;
		this.marca = marca;
	}

	public Modelo(){}
	public int getCodigoModelo() {
		return codigoModelo;
	}
	public void setCodigoModelo(int codigoModelo) {
		this.codigoModelo = codigoModelo;
	}
	public String getNombreModelo() {
		return nombreModelo;
	}
	public void setNombreModelo(String nombreModelo) {
		this.nombreModelo = nombreModelo;
	}
	public String getMarca() {
		return marca;
	}
	public void setMarca(String marca) {
		this.marca = marca;
	}
	@Override
	public String toString() {
		return "Modelo [codigoModelo=" + codigoModelo + ", nombreModelo=" + nombreModelo + ", marca=" + marca + "]";
	}

	public void solicitarInformacion(){
		codigoModelo = Integer.valueOf(JOptionPane.showInputDialog("Codigo del modelo: ",codigoModelo));
		nombreModelo = JOptionPane.showInputDialog("Nombre del modelo: ",nombreModelo);
		marca = JOptionPane.showInputDialog("Marca del marca: ",marca);

	}
}
