<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Knowledgebase extends CI_Controller {
		public function index(){
			//list
		}
		public function detail(){
			//detail
		}
		public function add(){
			// add page	
		}
		public function update(){
			// update page
		}
		public function delete(){
			// delete
		}
		public function category($action){
			switch($action){
				case 'add'		: //view category add
								  break;
				case 'update'	: //view category update
								  break;
				case 'delete'	: //action category delete
								  break;
				default 		: //view category list;
								  break;
			}
		}
	}
