<?php

class ViewForm{

	public function fakultas($fak){
		echo $fak;
	}

	public function output($data, $pic, $fakultas){
		include "FormOutput.php";
	}

	public function input(){
			include 'FormInput.php';
		}
}