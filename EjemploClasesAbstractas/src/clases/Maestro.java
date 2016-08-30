package clases;

public class Maestro extends Persona {
	private String codigoEmpleado;
	private double sueldo;

	public Maestro(String nombre,
					String apellido, String genero,
					int edad, Carrera carrera,
					String horario,
					String codigoEmpleado,
					double sueldo) {
		super(nombre, apellido, genero, edad, carrera, horario);
		this.codigoEmpleado = codigoEmpleado;
		this.sueldo = sueldo;
	}

	public String getCodigoEmpleado() {
		return codigoEmpleado;
	}

	public void setCodigoEmpleado(String codigoEmpleado) {
		this.codigoEmpleado = codigoEmpleado;
	}

	public double getSueldo() {
		return sueldo;
	}

	public void setSueldo(double sueldo) {
		this.sueldo = sueldo;
	}

	@Override
	public String toString() {
		return "Maestro [codigoEmpleado=" + codigoEmpleado + ", sueldo=" + sueldo + ", nombre=" + nombre + ", apellido="
				+ apellido + ", genero=" + genero + ", edad=" + edad + ", carrera=" + carrera + ", horario=" + horario
				+ "]";
	}

	@Override
	public void aprobar() {
		System.out.println("Aprobando a un alumno, no es Nohelia");
	}
}
