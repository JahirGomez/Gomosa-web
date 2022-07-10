<?php
/**
* Controlador de recurso
*
* Contiene todas las funciones para el control de recursos,
* desde validaciones hasta ejecuciones. Llama al modelo y la vista necesaria
*
* @package
* @author
* @version
* @date
*
**/

/**
* Presenta la página de búsqueda de recursos.
* Carga el archivo modelo/recursoModelo.php.
* Carga el archivo vista/recursoBuscarVista.php
*
* @uses $aplicacion
* @uses $url_base
* @uses $variables_ruta
* @uses $controlador
* @uses $accion
*
* * @uses generarTitulo
*/
function accion_buscar() {

	global $aplicacion, $url_base, $variables_ruta, $controlador, $accion;

	/** @ignore */
	// Incluye el modelo que corresponde
	include('model/recursoModelo.php');
	
	$titulo = generarTitulo();

	/** @ignore */
	// Pasa a la vista toda la informacion que se desea representar
	include('view/recursoBuscarVista.php');
}
?>