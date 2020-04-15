<?php
	namespace app\controllers;
	class ResultsCtrl{
		public function action_results(){
			$datas = getDb()->select("result", "*");
			getSmarty()->assign('datas',$datas);
			getSmarty()->display('results_view.tpl');
		}

	}
?>