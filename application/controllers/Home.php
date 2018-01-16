<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {

		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->model('user_model');

	}

	public function index()
	{
		if (!isset($_SESSION['Login'])) :
			$this->load->view('/templates/header');
			$this->load->view('home');
			$this->load->view('/templates/footer');
		else :
			$this->load->view('/templates/header2');
			$this->load->view('home');
			$this->load->view('/templates/footer');
		endif;

	}

	public function products()
	{
		if (!isset($_SESSION['Login'])) :
			$this->load->view('/templates/header');
			$this->load->view('products');
			$this->load->view('/templates/footer');
		else :
			$this->load->view('/templates/header2');
			$this->load->view('products');
			$this->load->view('/templates/footer');
		endif;
	}

	public function register()
	{
		$this->load->view('/templates/header');
		$data['msg'] ='';
		$this->load->view('register',$data);
		$this->load->view('/templates/footer');
	}
	public function login()
	{
		$this->load->view('/templates/header');
		$data['msg'] ='';
		$this->load->view('login',$data);
		$this->load->view('/templates/footer');
	}
	public function about()
	{
		if (!isset($_SESSION['Login'])) :
			$this->load->view('/templates/header');
			$this->load->view('about');
			$this->load->view('/templates/footer');
		else :
			$this->load->view('/templates/header2');
			$this->load->view('about');
			$this->load->view('/templates/footer');
		endif;
	}

	public function logout()
	{
		$data['username'] ='';
			// user logout ok
			$this->load->view('/templates/header');
			$this->load->view('logout',$data);
			$this->load->view('/templates/footer');





	}
	public function login_validation()
	{
			// set variables from the form
			$username = $this->input->post('username');//echo $username; echo '<br>';
			$password = $this->input->post('password');//echo $password; echo '<br>';

			$this->load->model('user_model');
			$query = $this->user_model->resolve_user_login($username,$password);

			if($query === true)
			 {
				// set session user datas

				$_SESSION['Login']= $username;
				// user login ok

				$this->load->view('signinOK');
			} else {

				// login failed

				$this->load->view('/templates/header');
				$this->session->set_flashdata('error', 'Invalid Username or Password');
				// send error to the view
				$this->load->view('signinV');
				$this->load->view('/templates/footer');
			}

	}
	public function register_validation()
	{
			// set variables from the form
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('user_model');
			$requery = $this->user_model->create_user($username,$password);

			if ($requery === false) {
				$this->load->view('/templates/header');
				$data['username'] = $username;
				$this->load->view('registerOK', $data);
				$this->load->view('/templates/footer');
			} else {

				$this->load->view('/templates/header');
				$this->load->view('registerV');
				$this->load->view('/templates/footer');


			}


	}
	public function checkmoney(){
		$username=$_SESSION['Login'];
		$lamb = $this->input->post('t1');
		$ferr = $this->input->post('t2');
		$koni = $this->input->post('t3');
		$money = $this->input->post('sum4');

		$this->load->model('user_model');
		$this->user_model->table_user($username,$lamb,$ferr,$koni,$money);

		$data['money']=$money;
		$data['lamb']=$lamb;
		$data['ferr']=$ferr;
		$data['koni']=$koni;
		$this->load->view('/templates/header2');
		$this->load->view('checkmoney', $data);
		$this->load->view('/templates/footer');
	}

}
?>
