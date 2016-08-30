package clases;

public class Carrera {
	private String codigoCarrera;
	private String nombreCarrera;
	private int cantidadClases;
	public Carrera(String codigoCarrera, String nombreCarrera, int cantidadClases) {
		this.codigoCarrera = codigoCarrera;
		this.nombreCarrera = nombreCarrera;
		this.cantidadClases = cantidadClases;
	}

	public Carrera(){}

	public String getCodigoCarrera() {
		return codigoCarrera;
	}

	public void setCodigoCarrera(String codigoCarrera) {
		this.codigoCarrera = codigoCarrera;
	}

	public String getNombreCarrera() {
		return nombreCarrera;
	}

	public void setNombreCarrera(String nombreCarrera) {
		this.nombreCarrera = nombreCarrera;
	}

	public int getCantidadClases() {
		return cantidadClases;
	}

	public void setCantidadClases(int cantidadClases) {
		this.cantidadClases = cantidadClases;
	}

	@Override
	public String toString() {
		return "Carrera [codigoCarrera=" + codigoCarrera + ", nombreCarrera=" + nombreCarrera + ", cantidadClases="
				+ cantidadClases + "]";
	}
}
