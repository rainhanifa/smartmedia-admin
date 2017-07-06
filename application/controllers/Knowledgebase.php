<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Knowledgebase extends CI_Controller {
		var $table = "articles";

		public function __construct() {
	        parent::__construct();
	        $this->load->model('smartmedia');
	    }

		public function index(){
			// $data['articles'] = $this->db->query('SELECT * FROM articles')->result_array();
			$data['articles'] = $this->db->query('SELECT articles.*, article_category.name_category FROM articles
												 INNER JOIN article_category ON articles.category_articles = article_category.id_category')->result_array();

			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('knowledgebase/articles.php',$data);
			$this->load->view('template/footer-admin.php');
		}
		public function detail(){
			//detail
		}
		public function add(){
			if (isset($_POST['submit'])){
				$title = $this->input->post('title');
				$content = $this->input->post('content');
				$date = date("Y-m-d");
				$category = $this->input->post('category');

				$knowledgebase_post = array("title_articles" => $title, 
											"content_articles" => $content,
											"date_articles" => $date, 							
											"category_articles" => $category);
				$this->db->insert("articles",$knowledgebase_post);

				$this->session->set_flashdata("warning", '
                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Berhasil menyimpan</strong>
                </div>');
            	redirect('Knowledgebase/');    
			}
			//ambil daftar kategori
			$data['category'] = $this->db->query('SELECT * FROM article_category')->result_array();

			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('knowledgebase/knowledgebase_create.php',$data);
			$this->load->view('template/footer-admin.php');
		}
		public function update($id_articles = 0){
			if (isset($_POST['submit'])){
				$title = $this->input->post('title');
				$content = $this->input->post('content');
				$id_articles = $this->input->post('id_articles');
				$date = date("Y-m-d");
				$category = $this->input->post('category');

				$knowledgebase_post = array("title_articles" => $title, 
											"content_articles" => $content,
											"date_articles" => $date, 							
											"category_articles" => $category);
				$this->db->where('id_articles', $id_articles);
				$this->db->update("articles",$knowledgebase_post);

				

				$this->session->set_flashdata("warning", '
                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Berhasil menyimpan</strong>
                </div>');
                redirect('Knowledgebase/');

			}
			//ambil daftar kategori
			$data['category'] = $this->db->query('SELECT * FROM article_category')->result_array();

			$data['articles'] = $this->db->query("SELECT * FROM articles WHERE id_articles = ".$id_articles)->result();

			
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('knowledgebase/knowledgebase_update.php', $data);
			$this->load->view('template/footer-admin.php');
		}
		public function delete($id_articles = 0){
			$this->db->where('id_articles', $id_articles);
			if ( $this->db->delete("articles")){
				$this->session->set_flashdata("warning", '
                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Berhasil Menghapus</strong>
                </div>');
			}else{
				$this->session->set_flashdata("warning", '
                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Error</strong>
                </div>');
			}

			redirect('Knowledgebase/');
		}

		public function category($action="list"){
			switch($action){
				case 'add'		: //view category add
								  break;
				case 'update'	: //view category update
								  break;
				case 'delete'	: //action category delete
								  break;
				default 		: //view category list;
					$this->load->view('template/header-admin.php');
					$this->load->view('template/navbar-admin.php');
					$this->load->view('knowledgebase/articles_category.php');
					$this->load->view('template/footer-admin.php');
								  break;
			}
		}
	}
