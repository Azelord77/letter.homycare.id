<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');
class operator extends CI_Controller{

    function __construct() {
    parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('m_operator');
    }
    public function index() {
		if($this->session->userdata('akses')=='1'||$this->session->userdata('akses')=='2'){
		$data['total_operator'] = $this->m_operator->get_operator('operator')->num_rows();
        $data ['operator'] =$this->m_operator->get_operator();
        $this->load->database();
        $jumlah_data = $this->m_operator->jumlah_data();
        $this->load->library('pagination');
        $config['base_url'] = base_url().'operator/index';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 5;
        $from = $this->uri->segment('3');
        $this->pagination->initialize($config);
        $data['operator'] = $this->m_operator->data($config['per_page'],$from);
		$this->load->view('v_header');
		$this->load->view('v_operator',$data);
		$this->load->view('v_footer');
        
	}else{
		echo "<script>alert('Anda tidak diperkenankan mengakses halaman data operator');</script>";
		echo "<script>redirect('admin/ahm/panel'); </script>";
        }
    }
    function add_operator(){
		if($this->session->userdata('akses')=='1'||$this->session->userdata('akses')=='2'){
        
		$this->load->view('v_header');
		$this->load->view('add_operator_view');
		$this->load->view('v_footer');
		}else{
		echo "<script>alert('Anda tidak diperkenankan menambahkan data operator');</script>";
		echo "<script>redirect('admin/ahm/panel'); </script>";
        }
    }
    function save(){
		$id_operator   = $this->input->post('id_operator');
        $name   = $this->input->post('name');
		$email   = $this->input->post('email');
        $username   = $this->input->post('username');
		$passwords   = $this->input->post('passwords');
		$passwords = md5($passwords);
        $role  = $this->input->post('role');
        $status  = $this->input->post('status');
        $created_at  = $this->input->post('created_at');
		$updated_at   = $this->input->post('updated_at');

        $this->m_operator->save($id_operator,$name,$email,$username,$passwords,$role,$status,$created_at,$updated_at);
        redirect('operator/index');
        }
    function delete(){
		if($this->session->userdata('akses')=='1'){
        $id_operator = $this->uri->segment(3);
        $this->m_operator->delete($id_operator);
        redirect('operator/index');
	}else{
		echo "<script>alert('Anda tidak diperkenankan menghapus data operator');</script>";
		echo "<script>redirect('admin/ahm/panel'); </script>";
        }
    }
    function get_edit(){
		if($this->session->userdata('akses')=='1'||$this->session->userdata('akses')=='2'){
        $id_operator = $this->uri->segment(3);
        $result = $this->m_operator->get_id_operator($id_operator);
        if ($result->num_rows() > 0) {
        $i = $result->row_array();
        $data = array(
        'id_operator' => $i['id_operator'],
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
		$this->load->view('edit_operator_view',$data);
		$this->load->view('v_footer');
        }else{
        echo "
        <script>
        alert('Data Was Not Found')
        </script>
        ";
        }
	}else{
		echo "<script>alert('Anda tidak diperkenankan mengedit data operator');</script>";
		echo "<script>redirect('admin/ahm/panel'); </script>";
        }
    }
    function update(){
        $id_operator   = $this->input->post('id_operator');
        $name   = $this->input->post('name');
		$email   = $this->input->post('email');
        $username   = $this->input->post('username');
		$passwords   = $this->input->post('passwords');
		$passwords = md5($passwords);
        $role  = $this->input->post('role');
        $status  = $this->input->post('status');
        $created_at  = $this->input->post('created_at');
		$updated_at   = $this->input->post('updated_at');
        $this->m_operator-> update
        ($id_operator,$name,$email,$username,$passwords,$role,$status,$created_at,$updated_at);
        redirect('operator/index');
    }
}
?>
