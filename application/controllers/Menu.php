<?php

class Menu extends CI_Controller
{


	function Tramites(){
		$this->load->view('layouts/header.common.php');
		$this->load->view('menu/menu.tramites.php');
		$this->load->view('layouts/footer.common.php');
	}
	function Caja(){
		$this->load->view('layouts/header.common.php');
		$this->load->view('menu/menu.caja.php');
		$this->load->view('layouts/footer.common.php');
	}
	function Movimientos(){
		$this->load->view('layouts/header.common.php');
		$this->load->view('menu/menu.movimientos.php');
		$this->load->view('layouts/footer.common.php');
	}
	function index(){
		$this->load->view('layouts/header.common.php');
		//$this->load->view('menu/menu.tramites.php');
		//$this->load->view('menu/menu.caja.php');
		//$this->load->view('menu/menu.movimientos.php');
		$this->load->view('layouts/footer.common.php');
	}
}
