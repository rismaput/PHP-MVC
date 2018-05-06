<?php

class ModelForm{

	private $fakultas = ['FILKOM', 'FK', 'FKG', 'FP', 'FAPET', 'FMIPA','FPIK', 'FT', 'FTP', 'FISIP', 'FIA', 'FEB', 'FIB'];
	private $data;
	private $pic;

	public function random(){
		$arr_fakultas = array_rand($this->fakultas);
		return $this->fakultas[$arr_fakultas];
	}

	public function data(){
		return $this->data;
	}

	public function pic(){
		return $this->pic;
	}
}