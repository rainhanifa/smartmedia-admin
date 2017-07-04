<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Announcement extends CI_Controller {

		var $table = "announcements";

		public function __construct() {
	        parent::__construct();
	        $this->load->model('smartmedia');
	    }

		public function index(){
			$data['announcement'] = $this->db->query('SELECT * FROM announcements')->result_array();
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('announcement/announcement.php',$data);
			$this->load->view('template/footer-admin.php');
		}
		public function detail(){
			//detail
		}
		public function add(){
			if($_POST){
				$title = $this->input->post('');
				$content = ..;

				$announcement_post = array( "nama_field_di_db" => $nama_variabel_inputan
										);
				$this->db->insert("announcement",$announcement_post);
				$this->session->set_flashdata("nama_variable_flashdata", '
                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Berhasil menyimpan</strong>
                </div>');
			}
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
