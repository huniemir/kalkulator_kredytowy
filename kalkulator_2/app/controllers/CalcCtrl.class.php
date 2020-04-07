<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\results\CalcResult;

class CalcCtrl{
	private $calcFinished = false;

	public function __construct(){
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}

	private function getParams(){
		$this->form->kredyt = getFromRequest('kredyt');
		$this->form->lata = getFromRequest('lata');
		$this->form->oprocentowanie = getFromRequest('oprocentowanie');
		$this->form->rodzaj_raty = getFromRequest('rodzaj_raty');
	}

	private function validate(){

	if ( ! (isset($this->form->kredyt) && isset($this->form->lata) && isset($this->form->oprocentowanie) && isset($this->form->rodzaj_raty))) {
		getMessages()->addError('Wszystkie pola muszą być wypełnione!');
		return false;
		}
	if ( $this->form->kredyt == "") {
		getMessages()->addError('Nie podano kwoty kredytu');
		return false;
	}
	if ( $this->form->lata == "") {
		getMessages()->addError('Nie podano na jak długo pobierany jest kredyt'); 
		return false;
	}
	if ( $this->form->oprocentowanie == "") {
		$this->msgs->addError('Nie podano wysokości oprocentowania');
		return false;
	}

	if (empty($this->messages)) {
		if (! is_numeric( $this->form->kredyt )) {
			getMessages()->addError('Kwota kredytu musi być liczbą całkowitą');
			return false;
		}
		if (! is_numeric( $this->form->lata )) {
			getMessages()->addError('Ilość lat musi być liczbą całkowitą');
			return false;
		}	
		if (! is_numeric( $this->form->oprocentowanie )) {
		    getMessages()->addError('Oprocentowanie musi być liczbą całkowitą');
			return false;
		}
			return true;
	}

	}
	private function process(){
	if (getMessages()->isEmpty()) {
		$this->form->kredyt = doubleval($this->form->kredyt);
		$this->form->lata = doubleval($this->form->lata);
		$this->form->oprocentowanie = doubleval($this->form->oprocentowanie);
		$rodzaj_wspolczynnik = 12;

		switch ($this->form->rodzaj_raty) {
			case 'tygodniowa':
				$rodzaj_wspolczynnik = 52;
				
				break;
			case 'kwartalna':
				$rodzaj_wspolczynnik = 4;
				
				break;
			case 'półroczna':
				$rodzaj_wspolczynnik = 2;
				
				break;
			case 'roczna':
				$rodzaj_wspolczynnik = 1;
				
				break;
			default :
				$rodzaj_wspolczynnik = 12;
				break;

		}

				$this->result->rata = $this->form->kredyt * pow(1+$this->form->oprocentowanie/1200 , $this->form->lata*$rodzaj_wspolczynnik) * ( (1+($this->form->oprocentowanie / 1200)-1) / (pow(1+$this->form->oprocentowanie/1200 ,$this->form->lata*$rodzaj_wspolczynnik) - 1));
				$this->result->rata = round($this->result->rata, 2);
				$this->result->suma = $this->form->kredyt + $this->result->rata * $this->form->lata;
				$this->result->suma = doubleval($this->result->suma);
				$this->result->odsetki = $this->result->suma - $this->form->kredyt;

		return true;
		}
	return true;
	}

	public function generateView(){

		if($this->calcFinished){
			getSmarty()->assign('messages', getMessages()->getErrors());
			getSmarty()->assign('rata', $this->result->rata);
			getSmarty()->assign('suma', $this->result->suma);
			getSmarty()->assign('odsetki', $this->result->odsetki);
		}

		getSmarty()->display('calc_view.tpl');
	}

	public function action_calcShow(){
		$this->generateView();
	}

	public function action_calculate(){
			$this->getParams();
			if($this->validate()){
				$this->process();
			}
			$this->calcFinished = true;
			$this->generateView();
	}

}