package clases;

public abstract class Persona{
	protected String nombre;
	protected String apellido;
	protected String genero;
	protected int edad;
	protected Carrera carrera;
	protected String horario;
	public Persona(String nombre, String apellido, String genero, int edad, Carrera carrera, String horario) {
		this.nombre = nombre;
		this.apellido = apellido;
		this.genero = genero;
		this.edad = edad;
		this.carrera = carrera;
		this.horario = horario;
	}

	/*public Persona(){
		System.out.println("Constructor vacio de persona");
	}*/

	public String getNombre() {
		return nombre;
	}

	public void setNombre(String nombre) {
		this.nombre = nombre;
	}

	public String getApellido() {
		return apellido;
	}

	public void setApellido(String apellido) {
		this.apellido = apellido;
	}

	public String getGenero() {
		return genero;
	}

	public void setGenero(String genero) {
		this.genero = genero;
	}

	public int getEdad() {
		return edad;
	}

	public void setEdad(int edad) {
		this.edad = edad;
	}

	public Carrera getCarrera() {
		return carrera;
	}

	public void setCarrera(Carrera carrera) {
		this.carrera = carrera;
	}

	public String getHorario() {
		return horario;
	}

	public void setHorario(String horario) {
		this.horario = horario;
	}

	@Override
	public String toString() {
		return "Persona [nombre=" + nombre + ", apellido=" + apellido + ", genero=" + genero + ", edad=" + edad
				+ ", carrera=" + carrera + ", horario=" + horario + "]";
	}

	public abstract void aprobar();
	public void reprobar(){}
}
