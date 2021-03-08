<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	/***
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
	public function index()
	{
		
		$this->load->view('indexst');
	}
	public function reg()
	{
		
		$this->load->view('register');
	}
	public function register()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("name","username",'required');
		$this->form_validation->set_rules("address","user_address",'required');
		$this->form_validation->set_rules("gender","gender",'required');
		$this->form_validation->set_rules("age","user_age",'required');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("password","password",'required');
		if($this->form_validation->run())
		{
		$this->load->model('mainmodel');	
		$pass=$this->input->post("password");
		$encpass=$this->mainmodel->encpswd($pass);
		$a=array("name"=>$this->input->post("name"),
				"address"=>$this->input->post("address"),
				"gender"=>$this->input->post("gender"),
				"age"=>$this->input->post("age"),
				"email"=>$this->input->post("email"),
				"password"=>$encpass);
		$this->mainmodel->regist($a);
		redirect(base_url().'main/reg');
		}
	}
	public function tblview()
	{
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->view();
		$this->load->view('view',$data);

	}
	public function updatedetails()
	{
		$a=array("name"=>$this->input->post("name"),
				 "address"=>$this->input->post("address"),
				 "gender"=>$this->input->post("gender"),
				 "age"=>$this->input->post("age"),
				 "email"=>$this->input->post("email"));
		$this->load->model('mainmodel');
		$id=$this->uri->segment(3);
		$data['user_data']=$this->mainmodel->singledata($id);
		$this->mainmodel->singleselect();
		$this->load->view('view',$data);
		if($this->input->post("update"))
		{
			$this->mainmodel->updatedetails($a,$this->input->post("id"));
			redirect('main/tblview','refresh');
		}
	}
		public function deletedetails()
		{
			$this->load->model('mainmodel');
			$id=$this->uri->segment(3);
			$this->mainmodel->deletedetails($id);
			redirect('main/tblview','refresh');


		}
public function viewar()
	{
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->viewt();
		$this->load->view('viewar',$data);

	}
	public function approve()
	{

		$this->load->model('mainmodel');
		$id=$this->uri->segment(3);
		$this->mainmodel->approve($id);
		redirect('main/viewar','refresh');
		
	}
	public function reject()
	{

		$this->load->model('mainmodel');
		$id=$this->uri->segment(3);
		$this->mainmodel->reject($id);
		redirect('main/viewar','refresh');
		
	}
	
	public function login()
	{
		
		$this->load->view('login');
	}
	public function logincheck()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("Password","password",'required');
		if($this->form_validation->run())
		{
		$this->load->model('mainmodel');	
		$email=$this->input->post("email");
		$pass=$this->input->post("Password");
		$a=$this->mainmodel->login($email,$pass);
		if($a)
		{
			$id=$this->mainmodel->getuserid($email);
			$user=$this->mainmodel->getuser($id);
			$this->load->library(array('session'));
			$this->session->set_userdata(array('id'=>(int)$user->id,
				'status'=>$user->status));
			if($_SESSION['status']=='1')
			{
				redirect(base_url().'main/viewar');
			}
			else
			{
				echo "waiting for approval";
			}
		}
		else
		{
			echo "invalid user";
		}
	}
	else
	{
		redirect(base_url().'main/reg');
	}
}

public function details()
{
	$this->load->view('details');
}
public function detailsadd()
{
	$this->load->library('form_validation');
		$this->form_validation->set_rules("fname","firstname",'required');
		$this->form_validation->set_rules("lname","lastname",'required');
		$this->form_validation->set_rules("address","user_address",'required');
		$this->form_validation->set_rules("dis","district",'required');
		$this->form_validation->set_rules("pin","pincode",'required');
		$this->form_validation->set_rules("phone","phone_number",'required');
		$this->form_validation->set_rules("dob","dob",'required');
		$this->form_validation->set_rules("gender","gender",'required');
		$this->form_validation->set_rules("edu","education",'required');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("password","password",'required');
		if($this->form_validation->run())
		{
		$this->load->model('mainmodel');	
		$pass=$this->input->post("password");
		$encpass=$this->mainmodel->encpaswd($pass);
		$a=array("fname"=>$this->input->post("fname"),
			    "lname"=>$this->input->post("lname"),
				"address"=>$this->input->post("address"),
				"district"=>$this->input->post("dis"),
				"pincode"=>$this->input->post("pin"),
				"phone"=>$this->input->post("phone"),
				"dob"=>$this->input->post("dob"),
				"gender"=>$this->input->post("gender"),
				"edu"=>$this->input->post("edu"));
		$b=array("email"=>$this->input->post("email"),
				"password"=>$encpass,'utype'=>'1');
		$this->mainmodel->details($a,$b);
		//$this->mainmodel->logdetails($b);
		redirect(base_url().'main/details');
		}
}
public function viewdetails()
	{
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->viewdetails();
		$this->load->view('viewdetails',$data);

	}
public function approvedetails()
	{

		$this->load->model('mainmodel');
		$id=$this->uri->segment(3);
		$this->mainmodel->approvedet($id);
		redirect('main/viewdetails','refresh');
		
	}
	public function rejectdetails()
	{

		$this->load->model('mainmodel');
		$id=$this->uri->segment(3);
		$this->mainmodel->rejectdet($id);
		redirect('main/viewdetails','refresh');
		
	}


	//project student management system


	
	public function trdetails()
	{
		$this->load->view('trdetails');
	}
	public function addtrdetails()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("name","name",'required');
		$this->form_validation->set_rules("address","user_address",'required');
		$this->form_validation->set_rules("dis","district",'required');
		$this->form_validation->set_rules("pin","pincode",'required');
		$this->form_validation->set_rules("phone","phone_number",'required');
		$this->form_validation->set_rules("gender","gender",'required');
		$this->form_validation->set_rules("age","age",'required');
		$this->form_validation->set_rules("subject","subject",'required');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("password","password",'required');
		if($this->form_validation->run())
		{
		$this->load->model('mainmodel');	
		$pass=$this->input->post("password");
		$encpass=$this->mainmodel->encpaswd($pass);
		$a=array("name"=>$this->input->post("name"),
				"address"=>$this->input->post("address"),
				"district"=>$this->input->post("dis"),
				"pincode"=>$this->input->post("pin"),
				"phone"=>$this->input->post("phone"),
				"gender"=>$this->input->post("gender"),
				"age"=>$this->input->post("age"),
				"subject"=>$this->input->post("subject"));
		$b=array("email"=>$this->input->post("email"),
				"password"=>$encpass,'utype'=>'0','status'=>'1');
		$this->mainmodel->trdetails($a,$b);
		//$this->mainmodel->logdetails($b);
		redirect(base_url().'main/trdetails');
	}
}
public function loginst()
	{
		
		$this->load->view('loginst');
	}
public function logincheckst()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("Password","password",'required');
		if($this->form_validation->run())
		{
		$this->load->model('mainmodel');	
		$email=$this->input->post("email");
		$pass=$this->input->post("Password");
		$a=$this->mainmodel->loginst($email,$pass);
		if($a)
		{
			$id=$this->mainmodel->getuseridst($email);
			$user=$this->mainmodel->getuserst($id);
			$this->load->library(array('session'));
			$this->session->set_userdata(array('id'=>(int)$user->id,
				'status'=>$user->status,'utype'=>$user->utype));
			if($_SESSION['status']=='1' && $_SESSION['utype']=='0')
			{
				redirect(base_url().'main/thome');
			}
			elseif($_SESSION['status']=='1' && $_SESSION['utype']=='1')
			{
				redirect(base_url().'main/shome');
			}
			else
			{
				echo "waiting for approval";

			}
		}
		else
		{
			echo "invalid user";
		}
	}
	else
	{
		redirect(base_url().'main/reg');
	}
}
// public function shome()
// {
// 	$this->load->view('shome');
// }
public function supdate()
{
	
	$this->load->view('supdate');
}
public function snotific()
{
	$this->load->view('addnotific');
}
public function slogout()
{
	$this->load->view('indexst');
}

public function viewstud()
	{
		$this->load->model('mainmodel');
		$id=$this->session->id;
		$data['user_data']=$this->mainmodel->viewstud($id);
		$this->load->view('supdate',$data);

	}
	public function updatestdetails()
	{

		$a=array("fname"=>$this->input->post("fname"),
			    "lname"=>$this->input->post("lname"),
				"address"=>$this->input->post("address"),
				"district"=>$this->input->post("dis"),
				"pincode"=>$this->input->post("pin"),
				"phone"=>$this->input->post("phone"),
				"dob"=>$this->input->post("dob"),
				"gender"=>$this->input->post("gender"),
				"edu"=>$this->input->post("edu"));
		$b=array("email"=>$this->input->post("email"),'utype'=>'1');
	
		$this->load->model('mainmodel');
		//$id=$this->uri->segment(3);
		//$data['user_data']=$this->mainmodel->singledatast($id);
		//$this->mainmodel->singleselectst();
		//$this->load->view('supdate',$data);
		if($this->input->post("update"))
		{
			$id=$this->session->id;
			$this->mainmodel->updatedetailsst($a,$b,$id);
			redirect('main/viewstud','refresh');
		}
	}
	public function notification()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("notific","notification",'required');
		if($this->form_validation->run())
		{
			$id=$this->session->id;
		$this->load->model('mainmodel');	
		$b=array("notification"=>$this->input->post("notific"),
				'cdate'=>date('y-m-d'),'loginid'=>$id);
		$this->mainmodel->notification($b);
		//$this->mainmodel->logdetails($b);
		redirect(base_url().'main/snotific');
	}
	}
	public function viewnotific()
	{
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->viewnotific();
		$this->load->view('viewnotific',$data);

	}
	public function viewnotifictr()
	{
		$id=$this->session->id;
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->viewnotifictr($id);
		$this->load->view('viewnotifictr',$data);

	}
	public function deletenotific()
		{
	
			$this->load->model('mainmodel');
			$id=$this->uri->segment(3);
			$this->mainmodel->deletenotific($id);
			redirect('main/viewnotifictr','refresh');


		}
		public function thome()
		{
			$id=$this->session->id;
			$this->load->view('thome');
		}
		public function shome()
		{
			$id=$this->session->id;
			$this->load->view('shome');
		}

}
																																											