<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');
class user extends CI_Controller{

    function __construct() {
    parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('m_user');
    }
    public function index() {
		if($this->session->userdata('akses')=='1'||$this->session->userdata('akses')=='2'){
		$data['total_user'] = $this->m_user->get_user('user')->num_rows();
        $data ['user'] =$this->m_user->get_user();
        $this->load->database();
        $jumlah_data = $this->m_user->jumlah_data();
        $this->load->library('pagination');
        $config['base_url'] = base_url().'user/index';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 5;
        $from = $this->uri->segment('3');
        $this->pagination->initialize($config);
        $data['user'] = $this->m_user->data($config['per_page'],$from);
        
		$this->load->view('v_header');
		$this->load->view('v_user',$data);
		$this->load->view('v_footer');
	}else{
		echo "<script>alert('Anda tidak diperkenankan mengakses halaman data user');</script>";
		echo "<script>redirect('admin/ahm/panel'); </script>";
        }
    }
    function add_user(){
		if($this->session->userdata('akses')=='1'){
			$data['total_user'] = $this->m_user->get_user('user')->num_rows();
			$this->load->view('v_header');
			$this->load->view('add_user_view');
		$this->load->view('v_footer');
        
		}else{
		echo "<script>alert('Anda tidak diperkenankan menambahkan data user');</script>";
		echo "<script>redirect('admin/ahm/panel'); </script>";
        }
    }
    function save(){
		$id_user   = $this->input->post('id_user');
        $name   = $this->input->post('name');
		$email   = $this->input->post('email');
        $username   = $this->input->post('username');
		$passwords   = $this->input->post('passwords');
		$passwords = md5($passwords);
        $role  = $this->input->post('role');
        $status  = $this->input->post('status');
        $created_at  = $this->input->post('created_at');
		$updated_at   = $this->input->post('updated_at');

        $this->m_user->save($id_user,$name,$email,$username,$passwords,$role,$status,$created_at,$updated_at);
        redirect('user/index');
        }
    function delete(){
		if($this->session->userdata('akses')=='1'){
        $id_user = $this->uri->segment(3);
        $this->m_user->delete($id_user);
        redirect('user/index');
	}else{
		echo "<script>alert('Anda tidak diperkenankan menghapus data user');</script>";
		echo "<script>redirect('admin/ahm/panel'); </script>";
        }
    }
    function get_edit(){
		if($this->session->userdata('akses')=='1'){
        $id_user = $this->uri->segment(3);
        $result = $this->m_user->get_id_user($id_user);
        if ($result->num_rows() > 0) {
        $i = $result->row_array();
        $data = array(
        'id_user' => $i['id_user'],
        'name' => $i['name'],
        'email' => $i['email'],
        'username' => $i['username'],
        'passwords' => $i['passwords'],
        'role' => $i['role'],
		'status' => $i['status'],
		'created_at' => $i['created_at'],
		'updated_at' => $i['updated_at']
        );
		$this->load->view('v_header');
		$this->load->view('edit_user_view',$data);
		$this->load->view('v_footer');
        }else{
        echo "
        <script>
        alert('Data Was Not Found')
        </script>
        ";
        }
	}else{
		echo "<script>alert('Anda tidak diperkenankan mengedit data user');</script>";
		echo "<script>redirect('admin/ahm/panel'); </script>";
        }
    }
    function update(){
        $id_user   = $this->input->post('id_user');
        $name   = $this->input->post('name');
		$email   = $this->input->post('email');
        $username   = $this->input->post('username');
		$passwords   = $this->input->post('passwords');
		$passwords = md5($passwords);
        $role  = $this->input->post('role');
        $status  = $this->input->post('status');
        $created_at  = $this->input->post('created_at');
		$updated_at   = $this->input->post('updated_at');
        $this->m_user-> update
        ($id_user,$name,$email,$username,$passwords,$role,$status,$created_at,$updated_at);
        redirect('user/index');
    }
}
?>
