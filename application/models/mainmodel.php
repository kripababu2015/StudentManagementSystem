<?php
class mainmodel extends CI_model
{
	public function regist($a)
	{
		$this->db->insert("register",$a);
	}
	public function encpswd($pass)
	{
		return password_hash($pass, PASSWORD_BCRYPT);
	}
	public function view()
	{
		$this->db->select('*');
		$qry=$this->db->get("register");
		return $qry;
	}
	public function singledata($id)
	{
		$this->db->select('*');
		$this->db->where("id",$id);
		$qry=$this->db->get("register");
		return $qry;
	}
	public function singleselect()
	{
		$qry=$this->db->get("register");
		return $qry;
	}
	public function updatedetails($a,$id)
	{
		$this->db->select('*');
		$qry=$this->db->where("id",$id);
		$qry=$this->db->update("register",$a);
		return $qry;
	}
	public function deletedetails($id)
	{
		$this->db->where("id",$id);
		$this->db->delete("register");
	}

	public function viewt()
	{
		$this->db->select('*');
		$qry=$this->db->get("register");
		return $qry;
	}
	public function approve($id)
	{
		$this->db->set('status','1');
		$qry=$this->db->where("id",$id);
		$qry=$this->db->update("register");
		return $qry;
	}
	public function reject($id)
	{
		$this->db->set('status','2');
		$qry=$this->db->where("id",$id);
		$qry=$this->db->update("register");
		return $qry;
	}
	public function login($email,$pass)
	{
		$this->db->select('password');
		$this->db->from('register');
		$this->db->where("email","$email");
		$qry=$this->db->get()->row("password");
		return $this->verifypass($pass,$qry);
	}
	public function verifypass($pass,$qry)
	{
		return password_verify($pass,$qry);
	}
	public function getuserid($email)
	{
		$this->db->select('id');
		$this->db->from("register");
		$this->db->where("email","$email");
		return $this->db->get()->row('id');
	}
	public function getuser($id)
	{
		$this->db->select('*');
		$this->db->from("register");
		$this->db->where("id",$id);
		return $this->db->get()->row();
	}
	public function details($a,$b)
	{	$this->db->insert("login",$b);
		$loginid=$this->db->insert_id();
		$a['loginid']=$loginid;
		$this->db->insert("details",$a);
		

	}
	public function encpaswd($pass)
	{
		return password_hash($pass, PASSWORD_BCRYPT);
	}
	/*
	public function logdetails($b)
	{
		$this->db->insert("login",$b);
	}*/

	public function viewdetails()
	{
		#select query for 1 table

		/*$this->db->select('*');
		$qry=$this->db->get("details");
		return $qry;*/

		#join way1
		/*
		$this->db->select('*');
		$this->db->from('login l');
 		$this->db->join('details d','l.id = d.loginid');
		$qry=$this->db->get();
		return $qry;*/
		$this->db->select('*');
		$this->db->join('login','login.id=details.loginid','inner');
		$qry=$this->db->get('details');
		return $qry;

	}
	public function approvedet($id)
	{
		$this->db->set('status','1');
		$qry=$this->db->where("id",$id);
		$qry=$this->db->update("login");
		return $qry;
	}
	public function rejectdet($id)
	{
		$this->db->set('status','2');
		$qry=$this->db->where("id",$id);
		$qry=$this->db->update("login");
		return $qry;
	}

	// project student management s/m

	public function trdetails($a,$b)
	{	$this->db->insert("login",$b);
		$loginid=$this->db->insert_id();
		$a['loginid']=$loginid;
		$this->db->insert("teacher",$a);
		

	}
	public function loginst($email,$pass)
	{
		$this->db->select('password');
		$this->db->from('login');
		$this->db->where("email",$email);
		$qry=$this->db->get()->row("password");
		return $this->verifypassst($pass,$qry);
	}
	public function verifypassst($pass,$qry)
	{
		return password_verify($pass,$qry);
	}
	public function getuseridst($email)
	{
		$this->db->select('id');
		$this->db->from("login");
		$this->db->where("email","$email");
		return $this->db->get()->row('id');
	}
	public function getuserst($id)
	{
		$this->db->select('*');
		$this->db->from("login");
		$this->db->where("id",$id);
		return $this->db->get()->row();
	}
	public function viewstud($id)
	{
		$this->db->select('*');
		$qry=$this->db->join('login','details.loginid=login.id','inner');
		$qry=$this->db->where("details.loginid",$id);
		$qry=$this->db->get("details");
		return $qry;

	}
	
	public function updatedetailsst($a,$b,$id)
	{
		$this->db->select('*');
		$qry=$this->db->where("loginid",$id);
		$this->db->join('login','login.id=details.loginid','inner');
		$qry=$this->db->update("details",$a);
		$qry=$this->db->where("id",$id);
		$qry=$this->db->update("login",$b);
		
		return $qry;
	}
	public function notification($b)
	{

		$this->db->insert("notification",$b);
		
	}
	public function viewnotific()
	{
		$this->db->select('*');
		$this->db->join('teacher','teacher.loginid=notification.loginid','inner');
		$qry=$this->db->get('notification');
		return $qry;
	}
	public function viewnotifictr($id)
	{
		$this->db->select('*');
		$qry=$this->db->where("loginid",$id);
		$qry=$this->db->get('notification');
		return $qry;
	}
	public function deletenotific($id)
	{
	
		$this->db->where("id",$id);
		$this->db->delete("notification");
	}
}

?>
