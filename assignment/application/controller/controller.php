<?php

class Controller {
	public $load; 
	public $model;
	
	function __construct($pageURI = null)
	{
		$this->load = new Load(); 
		$this->model = new Model();
		
		$this->$pageURI();
	}
	
	function home()
	{
		$this->load->view('viewMuseum');
		///$data = $this->model->dbCreateTable();
		///$data = $this->model->dbInsertData();
		///$data = $this->model->dbGetData();
	}

	function apiCreateTable()
	{
		$data = $this->model->dbCreateTable();
		$this->load->view('viewMessage', $data);
	}

	function apiInsertData()
	{
		$data = $this->model->dbInsertData();
		$this->load->view('viewMessage', $data);
	}

	function apiGetData()
	{
		$data = $this->model->dbGetData();
		$this->load->view('view3DAppdata', $data);
	}

	function apiGetFlickrFeed()
	{
		$this->load->view('viewFlickrFeed');
	}

	function apiGetJson()
	{
		$this->load->view('viewJson');
	}

	function apiVirtualMuseum()
	{
		$this->load->view('ViewMuseum');
	}
}
?>