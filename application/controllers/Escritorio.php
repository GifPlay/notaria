<?php

class Escritorio extends CI_Controller
{
	function index(){
		$this->load->view('layouts/header.common.php');
		$this->load->view('escritorio/modulo.php');
		$this->load->view('layouts/footer.common.php');
	}

	function contabilidad(){
		$this->load->view('layouts/header.common.php');
		$this->load->view('escritorio/contabilidad.php');
		$this->load->view('layouts/footer.common.php');
	}
}
