<?php
/**
* Controlador de usuario
*
* Contiene todas las funciones para el control de usuarios,
* desde validaciones hasta ejecuciones. Llama al modelo y la vista necesaria
*
* @package
* @author
* @version
* @date
*
**/

/**
* Presenta la página de inicio.
* Carga el archivo modelo/usuarioModelo.php.
* Carga el archivo vista/usuarioIniciarVista.php
*
* @uses $aplicacion
* @uses $url_base
* @uses $variables_ruta
* @uses $controlador
* @uses $accion
*
* * @uses generarTitulo
*/
function accion_iniciar() {

	global $aplicacion, $url_base, $variables_ruta, $controlador, $accion;

	/** @ignore */
	// Incluye el modelo que corresponde
	include('model/usuarioModelo.php');
	
	$titulo = generarTitulo();

	/** @ignore */
	// Pasa a la vista toda la informacion que se desea representar
	include('view/usuarioIniciarVista.php');
}
?>