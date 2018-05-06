<?php

class ControllerForm{

	private $model;
	private $view;

    public function __construct()
    {
      $this->model = new ModelForm();
      $this->view = new ViewForm();

	public function getFakultas(){
		$this->model = new ModelForm();
		$fak = $this->model->random();

		$this->view = new ViewForm();
		$this->view->fakultas($fak);
	}

	public function getData(){
		$this->model = new ModelForm();
		$file = $this->model->data();

		$this->view = new ViewForm();
		$this->view->data($file);
	)

	public function getPic(){
		$this->model = new ModelForm();
		$foto = $this->model->pic();

		$this->view = new ViewForm();
		$this->view->pic($foto);
	}

	    public function output(){
        $data = $this->model->getData();
        $pic = $this->model->getPic();
        $fakultas = $this->model->getFakultas();
        $this->view->viewResult($data, $pic, $fakultas);
    }

    public function input(){
        $this->view->input();
    }
}