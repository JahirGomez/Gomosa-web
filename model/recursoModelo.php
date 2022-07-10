<?php
/**
* Modelo de recurso
*
* Contiene todas las funciones para el procesamientos de datos para un recurso
*
* @package
* @author
* @version
* @date
*
**/

/** Carga las funciones para la gestión de bases de datos*/
// include('libs/basedatos.php');

/**
* Elimina la información de un recurso
*
* @param int $recurso Id del recurso
* @return integer Número de registros eliminados
*
* @uses ejecutarSQL
*/
function eliminarRecurso($recurso) {

	$SQL = 'DELETE FROM recursos WHERE id_recurso = ' . $usuario['id_recurso'];
	$resultado = ejecutarSQL($SQL);

	return $resultado;
}

/**
* Genera el título de un formulario
*
* @return text Título del formulario
*
*/
function generarTitulo() {

	return "Formulario de b&uacute;squeda";
}
?>