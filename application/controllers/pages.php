<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct() {
	     parent::__construct();
			 $this->load->model('mcrud');
   }

	public function index()
	{
		 $data['data_get'] = $this->mcrud->view();
		 $this->load->view('header');
		 $this->load->view('list_pages', $data);
		 $this->load->view('footer');

	}

	public function addArticle(){
			$this->load->view('header');
			$this->load->view('create_page');
 			$this->load->view('footer');
	}

	function save() {
  if ($this->input->post('mit')) {
   $this->mcrud->addArticle();
   redirect('');
  } else{
   redirect('');
  }
 }

	public function updateArticle(){
		 if ($this->input->post('mit')) {
					 $id =  $_POST['id'];
					 $title =  $_POST['title'];
					$description =  $_POST['description'];
					$keywords = $_POST['keywords'];
					$path = $_POST['path'];
					$article = html_entity_decode($_POST['article']);
				 $this->mcrud->update($id,$title,$keywords,$description, $path, $article);
				 redirect('');
			} else{
		redirect('index.php/pages/edit/'.$id);
		}

	}

	function edit() {
    $kd = $this->uri->segment(3);
    if ($kd == NULL) {
     redirect('wccrud');
    }
    $dt = $this->mcrud->edit($kd);
    $data['title'] = $dt->title;
    $data['description'] = $dt->description;
    $data['keywords'] = $dt->keywords;
    $data['path'] = $dt->path;
		$data['article'] = html_entity_decode($dt->content) ;
    $data['id'] = $kd;
    $this->load->view('header');
    $this->load->view('edit_page', $data);
    $this->load->view('footer');
   }

   function delete() {
  $u = $this->uri->segment(3);
  $this->mcrud->delete($u);
  redirect('');
 }




}
