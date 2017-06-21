<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Announcement extends CI_Controller {
		public function index(){
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('announcement/announcement.php');
			$this->load->view('template/footer-admin.php');
		}
		public function detail(){
			//detail
		}
		public function add(){
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('announcement/announcement_create.php');
			$this->load->view('template/footer-admin.php');
		}
		public function update(){
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('announcement/announcement_update.php');
			$this->load->view('template/footer-admin.php');
		}
		public function delete(){
			// delete
		}

	}
