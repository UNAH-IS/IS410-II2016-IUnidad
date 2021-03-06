package clases;

//Plain Old Java Object/Java Bean:
//Atributos privados
//Metodos sets  y gets
//Constructor con todos los atributos como parametros
//Constructor vacio
//Metodo toString
public class Producto {
	private int codigoProducto;
	private String nombreProducto;
	private String marca;
	private float precio;
	private float impuesto;
	public static int valor_estatico;

	public Producto(
			int codigoProducto,
			String nombreProducto,
			String marca,
			float precio,
			float impuesto
	) {
		this.codigoProducto = codigoProducto;
		this.nombreProducto = nombreProducto;
		this.marca = marca;
		this.precio = precio;
		this.impuesto = impuesto;
	}

	public Producto(String nombreProducto){
		this.nombreProducto = nombreProducto;
	}

	public Producto(){}

	public int getCodigoProducto() {
		return codigoProducto;
	}
	public void setCodigoProducto(int codigoProducto) {
		this.codigoProducto = codigoProducto;
	}
	public String getNombreProducto() {
		return nombreProducto;
	}
	public void setNombreProducto(String nombreProducto) {
		this.nombreProducto = nombreProducto;
	}
	public String getMarca() {
		return marca;
	}
	public void setMarca(String marca) {
		this.marca = marca;
	}
	public float getPrecio() {
		return precio;
	}
	public void setPrecio(float precio) {
		this.precio = precio;
	}
	public float getImpuesto() {
		return impuesto;
	}
	public void setImpuesto(float impuesto) {
		this.impuesto = impuesto;
	}

	public void mostrarInformacion(){
		System.out.println(nombreProducto+ "("+marca+")");
	}

	public void mostrarInformacion(String marca){
		this.marca = marca;
		mostrarInformacion();
	}

	public void mostrarInformacion(int precio){
		this.precio = precio;
		System.out.println("Se cambio el precio a: "+this.precio);
		mostrarInformacion();
	}

	@Override
	public String toString() {
		return "Producto [codigoProducto=" + codigoProducto + ", nombreProducto=" + nombreProducto + ", marca=" + marca
				+ ", precio=" + precio + ", impuesto=" + impuesto + "]";
	}

	//El metodo toString usualmente se utiliza para mostrar un objeto como Texto
	/*public String toString(){
		return 	codigoProducto + "\t" +
				nombreProducto +"\t" +
				marca +"\t" +
				precio +"\t" +
				impuesto +"\t";
	}*/


}
