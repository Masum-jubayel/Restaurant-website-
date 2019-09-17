<?php defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	* New controller class
	*/
class Admin extends CI_Controller{
	
	public function __construct(){
			parent::__construct();
			$this->load->model('admin_model');
		}

	public function index()
		{
			$this->load->view('admin/inc/header');
			$this->load->view('admin/inc/sidbar');
			$this->load->view('admin/index');
			$this->load->view('admin/inc/footer');

		}
	public function add_breakfast()
		{
			// $this->load->view('admin/inc/header');
			// $this->load->view('admin/inc/sidbar');
			$this->load->view('admin/addpostb');
			// $this->load->view('admin/inc/footer');

			$data = array();
			$data['title'] = $this->input->post('title',true);
			$data['taka'] = $this->input->post('taka',true);
			$data['body'] = $this->input->post('body',true);

			$this->admin_model->Insert_breakfast($data);

			redirect('admin/add_breakfast');
			
		}
	public function add_drink()
		{
			// $this->load->view('admin/inc/header');
			// $this->load->view('admin/inc/sidbar');
			$this->load->view('admin/addpostd');
			// $this->load->view('admin/inc/footer');
			

			

		}
		function meal(){
			$this->load->view('admin/addpostm');
		}
	public function add_meal()
		{
			// $this->load->view('admin/inc/header');
			// $this->load->view('admin/inc/sidbar');
			// $this->load->view('admin/inc/footer');

			$data = array();
			$data['title'] = $this->input->post('title',true);
			$data['taka'] = $this->input->post('taka',true);
			$data['body'] = $this->input->post('body',true);

			$this->admin_model->Inserted_meal($data);

			redirect('admin/add_meal');
			
		}
	public function add_fastfood()
		{
			// $this->load->view('admin/inc/header');
			// $this->load->view('admin/inc/sidbar');
			$this->load->view('admin/addpostf');
			// $this->load->view('admin/inc/footer');
			
		}			
	public function post_list()
		{
			$this->load->view('admin/postlist');
		}	
	public function add_cat()
		{
			$this->load->view('admin/addcat');
		}		

	public function cat_list()
		{
			$this->load->view('admin/catlist');
		}	

} ?>