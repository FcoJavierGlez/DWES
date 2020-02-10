<?php
$diccionario = array(
    'subtitle'=>array(VIEW_SET_USER=>'Crear un nuevo usuario',
					   VIEW_GET_USER=>'Buscar usuario',
					   VIEW_ALL_USER=>'Mostrar usuarios',
                       VIEW_DELETE_USER=>'Eliminar un usuario',
                       VIEW_EDIT_USER=>'Modificar usuario'),
	'links_menu'=>array(
					  'VIEW_SET_USER'=>MODULO.VIEW_SET_USER.'/',
					  'VIEW_GET_USER'=>MODULO.VIEW_GET_USER.'/',
					  'VIEW_ALL_USER'=>MODULO.VIEW_ALL_USER.'/',
					  'VIEW_EDIT_USER'=>MODULO.VIEW_EDIT_USER.'/',
					  'VIEW_DELETE_USER'=>MODULO.VIEW_DELETE_USER.'/'),
	'form_actions'=>array(
					  'SET'=>'/mvc/'.MODULO.SET_USER.'/',
					  'GET'=>'/mvc/'.MODULO.GET_USER.'/',
					  'DELETE'=>'/mvc/'.MODULO.DELETE_USER.'/',
					  'EDIT'=>'/mvc/'.MODULO.EDIT_USER.'/')
	);

function get_template($form='get')
{
	$file = "../www/userview_".$form.".html";
	$template = file_get_contents($file);
	return $template;
}

function generaHTML($data) {
	$salida = "<table border=1><tr><th>ID</th><th>Nombre</th><th>Apellidos</th><th>Email</th><th>Clave</th></tr>";
	foreach ($data as $key => $value) {
		$salida = $salida."<tr>";
		foreach ($value as $key2 => $value2) {
			$salida=$salida."<td>$value2</td>";
		}
		$salida = $salida."</tr>";
	}
	$salida = $salida."</table>";
	return $salida;
}

function render_dinamic_data($html, $data,$vista) 
{
	foreach ($data as $clave=>$valor) {
		if($vista==VIEW_ALL_USER)
			$html = str_replace('{'.$clave.'}', '{salida}', $html);
		else
			$html = str_replace('{'.$clave.'}', $valor, $html);
	}
	return $html;
}

function retornar_vista($vista, $data=array()) 
{
	global $diccionario;
	$html = get_template('template');
	$html = str_replace('{subtitulo}', $diccionario['subtitle'][$vista],$html);
	$html = str_replace('{formulario}', get_template($vista), $html);
	$html = render_dinamic_data($html, $diccionario['form_actions'],$vista);
	$html = render_dinamic_data($html, $diccionario['links_menu'],$vista);
	$html = render_dinamic_data($html, $data, $vista);
// render {mensaje}
	if(array_key_exists('nombre', $data)&& array_key_exists('apellidos', $data)&& $vista==VIEW_EDIT_USER) {
		$mensaje = 'Editar usuario '.$data['nombre'].' '.$data['apellidos'];
	} else {
		if(array_key_exists('mensaje', $data)) {
			$mensaje = $data['mensaje'];
		} else {
			$mensaje = 'Datos del usuario:';
		}
	}
	$html = str_replace('{mensaje}', $mensaje, $html);
	if ($vista == VIEW_ALL_USER) {
		$html = str_replace('{salida}', generaHTML($data), $html);
	}
	print $html;
}
?>