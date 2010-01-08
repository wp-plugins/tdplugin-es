<? /**
 * @package TradeDoubler Wordpress Plugin
 * @Author: Sergio Martinez de Cestafe
 * @version 1.1
 */
/*
Plugin Name: TradeDoubler Wordpress Plugin
Plugin URI: http://www.tradedoubler.com
Description: modo de uso  [td tdquery="tus keywords aqu&iacute;" tdno="20" tdpg="0" tdmid="12345,234,189" tdcat="68" tdprice="20_200" td_estilo="1 o 2" prodfila="2"] el &uacute;nico campo necesario es  tdquery, tdno = n&uacute;mero de resultados, tdpg = empieza por el n&uacute;mero x (de resultado), tdmid = el identificador de anunciante de TD, separado por comas, tdcat = el identificador de categor&iacute;a para buscar <a href="aqu&iacute; enlace al tdblog" target="_blank">lista de categor&iacute;as</a>, tdprice = rango de precio para la b&uacute;squeda. para el estilo de la presentaci&oacute;n puede ser presentado usando el 1 o  2, con la primera opci&oacute;n varias el n&uacute;mero de productos por fila, la segunda muestra tan s&oacute;lo uno.
Author: Sergio Martinez de Cestafe
Version: 1.0
Author URI: http://www.tradedoubler.com

*/

$resultado="";
$contador=1;
$contadorVeces=1;
$prodFila;
$idEstilo;

if ( ! defined( 'WP_CONTENT_URL' ) )
      define( 'WP_CONTENT_URL', get_option( 'siteurl' ) . '/wp-content' );
	if ( ! defined( 'WP_CONTENT_DIR' ) )
      define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
	if ( ! defined( 'WP_PLUGIN_URL' ) )
      define( 'WP_PLUGIN_URL', WP_CONTENT_URL. '/plugins' );
	if ( ! defined( 'WP_PLUGIN_DIR' ) )
      define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' );

//Funcion que se invocara cuando se instale el plugin
function td_install () {
   			$td_db_version = "1.0";
   			add_option("td_db_version", $td_db_version);
		}

		register_activation_hook(__FILE__,'td_install');

		add_action('admin_menu', 'td_plugin_menu');

		function td_plugin_menu() {
  			add_options_page('TradeDoubler Wordpress Plugin', 'TradeDoubler XML Wordpress Plugin', 8, __FILE__, 'td_plugin_options');
		}

//Funcion para crear los elementos del menu
function td_plugin_options() {
							?>
			<div class="wrap">
				<a href="http://www.tradedoubler.com/es-es/"><img src=<?php printf("%s/tdplugin-es/bg_grey.jpg",WP_PLUGIN_URL);?> alt="TradeDoubler Image"/></a>
				<!--<h2>TradeDoubler Wordpress Plugin 1.0</h2>-->
					<form method="post" action="options.php">
					<?php wp_nonce_field('update-options'); ?>
						<table width="100%" class="form-table">
<tr valign="top">
  <th colspan="2" scope="row"><h3>Ajustes Principales</h3></th>
  </tr>
<tr valign="top">
								<th width="40%" scope="row"><div align="left">Id de afiliado de Tradedoubler</div></th>
		<td width="40%"><input type="text" name="td_merchandiser_token" value="<?php echo get_option('td_merchandiser_token'); ?>" /></td>
						  </tr>
                          <tr valign="top">
								<th width="40%" scope="row"><div align="left">Valor del tiempo de cach&eacute; del XML (en segundos, 1 d&iacutea = 86400, 1 semana = 604800) por defecto a una semana</div></th>
		<td width="40%"><input type="text" name="td_cache_timeout" value="<?php echo get_option('td_cache_timeout'); ?>" /></td>
						  </tr>
					  </table>
					  <input type="hidden" name="action" value="update" />
					  <input type="hidden" name="page_options" value="td_merchandiser_token,td_estilo,td_cache_timeout" />
								<p class="submit">
										<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
								</p>
					</form>
			</div>

<? }
 	require_once(WP_PLUGIN_DIR.'/tdplugin-es/funcion.php');
	remove_all_shortcodes();
		add_shortcode('td', '_QBBOL');
?>