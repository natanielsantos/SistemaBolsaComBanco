<?php

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
	define('BASEURL', '/sgbe/SistemaBolsaComBanco/sgbComBanco/sistema/');

define('HEADER_TEMPLATE', ABSPATH . 'includes/topo.php');
define('FOOTER_TEMPLATE', ABSPATH . 'includes/base.php');
