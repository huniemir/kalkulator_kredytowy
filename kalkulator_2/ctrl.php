<?php
require_once 'init.php';


getRouter()->setDefaultRoute('calcShow'); 
getRouter()->setLoginRoute('login'); 

getRouter()->addRoute('calcShow',    'CalcCtrl',  ['user','admin']);
getRouter()->addRoute('calculate', 'CalcCtrl',  ['user','admin']);
getRouter()->addRoute('results',       'ResultsCtrl');
getRouter()->addRoute('login',       'LoginCtrl');
getRouter()->addRoute('logout',      'LoginCtrl', ['user','admin']);

getRouter()->go(); 

?>