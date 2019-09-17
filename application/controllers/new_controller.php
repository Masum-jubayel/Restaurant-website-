<?php defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	* New controller class
	*/
	class New_controller extends CI_Controller
	{


		public function __construct(){
			parent::__construct();
			$this->load->model('new_model');
			$this->load->model('review_model');
		}
		
		// public function index()
		// {
		// 	$this->load->view('welcome_message');
		// }

		public function index()
		{
			$data['fatch_data']=$this->review_model->view_message();
			$this->load->view('inc/header');
			$this->load->view('inc/table_modal');
			$this->load->view('inc/tab');
			$this->load->view('inc/gallery');
			$this->load->view('inc/customer_review',$data);
			$this->load->view('inc/contact');
			$this->load->view('inc/footer');
		}

		public function admin()
		{
			$this->load->view('admin/index');
		}
		
		public function contact_info()
		{
			$data = array();
			$data['first_name'] = $this->input->post('first_name',true);
			$data['email'] = $this->input->post('email',true);
			$data['number'] = $this->input->post('number',true);
			$data['msg'] = $this->input->post('msg',true);
			$this->new_model->Insertdata($data);


			$view_data=array();
			$view_data['view_message']='';
			$this->sessoin->set_userdata($data);

			redirect('new_controller/index');


		}

		public function review_info()
		{
			$data = array();
			$data['re_name'] = $this->input->post('re_name',true);
			$data['re_email'] = $this->input->post('re_email',true);
			$data['re_body'] = $this->input->post('re_body',true);
			$this->new_model->Inserted_review($data);
			redirect('new_controller/index');
		}

		public function review_controller(){

			$this->load->model("review_model");
	        $data['fatch_data'] = $this->review_model->view_message();
	        $this->load->view('inc/customer_review',$data);
	        // $this->load->view('inc/contact');
	        // $this->load->view('inc/footer');


		}
		
	}
?>