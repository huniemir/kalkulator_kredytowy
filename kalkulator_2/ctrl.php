<?php
require_once 'init.php';

switch ($action) {
	default : 
		include_once 'app/controllers/CalcCtrl.class.php';
		$ctrl = new app\controllers\CalcCtrl ();
		$ctrl->generateView();
	break;
	case "calculate":
		
		include_once 'app/controllers/CalcCtrl.class.php';
		
		$ctrl = new app\controllers\CalcCtrl ();
		$ctrl->calculate();
	break;
}
?>