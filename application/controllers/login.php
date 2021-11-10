<?php
defined('BASEPATH') OR exit('No script direct access allowed');
 Class Login extends CI_Controller{
 function __construct(){
 parent::__construct();
 $this->load->model('m_login');
 }
 function index() {
 $this->load->view('v_login');
 }
 function auth() {
 $username=strip_tags(str_replace("'", "", $this->input->post('username')));
 $passwords=strip_tags(str_replace("'", "", $this->input->post('passwords')));
 $cek_user=$this->m_login->auth_user($username,$passwords);
 echo json_encode($cek_user);
 if ($cek_user->num_rows() > 0) { //jika login sebagai user
 $data=$cek_user->row_array();
 if ($data['role'] == 'superadmin' && $data['status']== 'aktif') { //akses masuk sebagai user superadmin
	$this->session->set_userdata('masuk', TRUE);
	$this->session->set_userdata('akses','1');
	$this->session->set_userdata('id',$data['id_user']);
	$this->session->set_userdata('username',$data['username']);
	$this->session->set_userdata('name',$data['name']);
	$this->session->set_userdata('role',$data['role']);
 redirect('letters');
 }else if($data['role'] == 'admin' && $data['status']== 'aktif'){ //jika login sebagai user admin
	$this->session->set_userdata('masuk', TRUE);
	$this->session->set_userdata('akses','2');
	$this->session->set_userdata('id',$data['id_user']);
	$this->session->set_userdata('username',$data['username']);
	$this->session->set_userdata('name',$data['name']);
	$this->session->set_userdata('role',$data['role']);
 redirect('letters');
 }else if ($data['status']== 'pending'){
	echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button>Akun anda pending</div>');
	redirect('login');
 }else{
	echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button>Akun anda nonaktif</div>');
	redirect('login');
 }
 }else{ //jika login sebagai operator
 $cek_operator=$this->m_login->auth_operator($username,$passwords);
 if ($cek_operator->num_rows() > 0) {
 $data=$cek_operator->row_array();
 if ($data['role'] == 'operator' && $data['status']== 'aktif') {
	$this->session->set_userdata('masuk', TRUE);
	$this->session->set_userdata('akses','3');
	$this->session->set_userdata('id',$data['id_operator']);
	$this->session->set_userdata('username',$data['username']);
	$this->session->set_userdata('name',$data['name']);
	$this->session->set_userdata('role',$data['role']);
 redirect('letters');
 }else if ($data['status']== 'pending'){
	echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button>Akun anda Pending</div>');
	 redirect('login');
 }else{
	echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button>Akun anda nonaktif</div>');
	 redirect('login');
 }
 }else{ //jika username dan password salah atau tidak ditemukan
	echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button>Username Atau Password Salah</div>');
	redirect('login');
	}
 }
 }
 function keluar(){
 $this->session->sess_destroy();
 $url=base_url('');
 redirect($url);
 }
 }
?>
