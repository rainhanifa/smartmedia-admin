<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Knowledgebase extends CI_Controller {
		public function index(){
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('knowledgebase/articles.php');
			$this->load->view('template/footer-admin.php');
		}
		public function detail(){
			//detail
		}
		public function add(){
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('knowledgebase/knowledgebase_create.php');
			$this->load->view('template/footer-admin.php');
		}
		public function update(){
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('knowledgebase/knowledgebase_update.php');
			$this->load->view('template/footer-admin.php');
		}
		public function delete(){
			// delete
		}
		public function category($action="list"){
			switch($action){
				case 'add'		: //view category add
					$this->load->view('template/header-admin.php');
					$this->load->view('template/navbar-admin.php');
					$this->load->view('knowledgebase/knowledgebase_create.php');
					$this->load->view('template/footer-admin.php');
								  break;
				case 'update'	: //view category update
					$this->load->view('template/header-admin.php');
					$this->load->view('template/navbar-admin.php');
					$this->load->view('knowledgebase/knowledgebase_update.php');
					$this->load->view('template/footer-admin.php');
								  break;
				case 'delete'	: //action category delete
								  break;
				default 		: //view category list;
									echo "list";
								  break;
			}
		}
	}
