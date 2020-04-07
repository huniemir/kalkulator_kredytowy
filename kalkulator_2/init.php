<?php
require_once 'core/Config.class.php';
$conf = new core\Config();
include 'config.php'; //ustaw konfigurację

function &getConf(){ global $conf; return $conf; }

//załaduj definicję klasy Messages i stwórz obiekt
require_once getConf()->root_path.'/core/Messages.class.php';
$msgs = new core\Messages();

function &getMessages(){ global $msgs; return $msgs; }

//przygotuj Smarty, twórz tylko raz - wtedy kiedy potrzeba
$smarty = null;	
function &getSmarty(){
	global $smarty;
	if (!isset($smarty)){
		//stwórz Smarty i przypisz konfigurację i messages
		include_once getConf()->root_path.'/lib/smarty/Smarty.class.php';
		$smarty = new Smarty();	
		//przypisz konfigurację i messages
		$smarty->assign('conf',getConf());
		$smarty->assign('msgs',getMessages());
		//zdefiniuj lokalizację widoków (aby nie podawać ścieżek przy ich załączaniu)
		$smarty->setTemplateDir(array(
			'one' => getConf()->root_path.'/app/view',
			'two' => getConf()->root_path.'/app/view/templates'
		));
	}
	return $smarty;
}


require_once 'core/ClassLoader.class.php'; 
$cloader = new core\ClassLoader();
function &getLoader() {
    global $cloader;
    return $cloader;
}

require_once 'core/Router.class.php'; 
$router = new core\Router();
function &getRouter(): core\Router {
    global $router; return $router;
}

require_once getConf()->root_path.'/core/functions.php';

session_start(); 
$conf->roles = isset($_SESSION['_roles']) ? unserialize($_SESSION['_roles']) : array(); 


$router->setAction( getFromRequest('action') );

?>
