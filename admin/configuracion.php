<?php
// Protección del plugin
defined('ABSPATH') or die("Bye bye");

// Protección con editores no autorizados.
if (! current_user_can ('manage_options')) wp_die (__ ('No tienes suficientes permisos para acceder a esta página.', 'text_domain'));


/*
En esta página se tiene que estructurar el look and feel como intuitivamente configurable.
Es una tabla bien activa en todos los sentidos. Debe tener transiciones suaves.
Poder agregar, editar y borrar columnas como filas. Siempre comenzando con 3 x 3 por defecto.
Deben tener los 3 botones: add, edit y delete.
Se debe poder editar los títulos como el contenido de las celdas. Todo será un formulario.
1. 
*/

?>
<div class="wrap">
	<header class="primary">
		<h1><?php _e( 'Planilla de Tarifas y Temporadas', 'text_domain' ) ?></h1>
	</header>
	<form action="opciones.php" method="post" id="wm_tarifazos">
		<table class="form-table striped">
			<caption>
				<h3><?php _e('Agregar aquí los nombres de las temporadas ↓', 'text_domain');?></h3>
			</caption>
			<tbody>

				<tr>
					<th class="column-title">
						<input class="room_title" disabled type="text" name="habit" id="habit" placeholder="<?php _e('Habitaciones o Cabañas', 'text_domain');?>" />
					</th>
					<th>
						<input class="room_title" disabled type="text" name="temp_1" id="temp_1" placeholder="<?php _e('Temporada Alta', 'text_domain');?>" />
					</th>
					<th>
						<input class="room_title" disabled type="text" name="temp_2" id="temp_2" placeholder="<?php _e('Temporada Media', 'text_domain');?>" />
					</th>
					<th>
						<input class="room_title" disabled type="text" name="temp_3" id="temp_3" placeholder="<?php _e('Temporada Baja', 'text_domain');?>" />
					</th>
					<th>
						<div class="botones_edicion">
							<a href="#" id="boton_editar_titulo"><span class="dashicons-before dashicons-edit"></span></a>
						</div>
					</th>
				</tr>

				<tr class="tarifa_fila">
					<td>
						<input type="text" min="0" value="" placeholder="Habitación xxx" name="titulo1" id="titulo1" disabled="disabled" />
						<!-- <select name="page-dropdown"> 
							<option value="">
								<?php //echo esc_attr( __( 'Seleccionar', 'text_domain' ) ); ?>
							</option>
							<?php
							
							// Se listan las páginas para que se puedan seleccionar a cual le corresponde tal tarifa.
							/*
							$pages = get_pages(); 
							foreach ( $pages as $page )
							{
								$option = '<option value="' . get_page_link( $page->ID ) . '">';
								$option .= $page->post_title;
								$option .= '</option>';
								echo $option;
							}
							*/
							?>
						</select> -->
					</td>
					<td>$ <input type="number" min="0" value="" placeholder="300" name="" id="" disabled="disabled" /></td>
					<td>$ <input type="number" min="0" value="" placeholder="300" name="" id="" disabled="disabled" /></td>
					<td>$ <input type="number" min="0" value="" placeholder="300" name="" id="" disabled="disabled" /></td>
					<td>
						<div class="botones_edicion">
							<a href="#"><span class="dashicons-before dashicons-plus"></span></a>
							<a href="#" class="boton_editar"><span class="dashicons-before dashicons-edit"></span></a>
							<a href="#"><span class="dashicons-before dashicons-trash"></span></a>
						</div>
					</td>
				</tr>
			</tbody>
		</table>

		<div class="wrap">
		</div>

		<div>
			<hr />
			<input type="submit" name="enviar"  value="<?php _e("Guardar Opciones", "text-domain");?>" class="button-primary" id="submit" />
			<input type="reset" class="reset-button button-secondary" name="reset" value="<?php esc_attr_e( 'Restaurar valores por defecto', 'text_domain' ); ?>" onclick="return confirm( '<?php print esc_js( __( 'Click OK para resetear. Cualquier cambio hecho se perderá!', 'text_domain' ) ); ?>' );" />
			<div class="clear"></div>
		</div>
	</form>
</div>