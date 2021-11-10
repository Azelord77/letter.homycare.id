<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');
class letters extends CI_Controller{

    function __construct() {
    parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('m_letters');
    }
    public function index() {
		$data['total_letters'] = $this->m_letters->get_letters('letters')->num_rows();
		$data ['letters'] =$this->m_letters->get_letters();
        $this->load->database();
        $jumlah_data = $this->m_letters->jumlah_data();
        $this->load->library('pagination');
        $config['base_url'] = base_url().'letters/index';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 5;
        $from = $this->uri->segment('3');
        $this->pagination->initialize($config);
        $data['letters'] = $this->m_letters->data($config['per_page'],$from);
        $this->load->view('v_header');
		$this->load->view('v_letters',$data);
		$this->load->view('v_footer');
        }


    function add_letters(){
		if($this->session->userdata('akses')=='3'){
		$this->load->view('v_header');
		$this->load->view('add_letters_view');
		$this->load->view('v_footer');
		}else{
			echo "<script>alert('Anda tidak diperkenankan menambah data letters');</script>";
			echo "<script>redirect('admin/ahm/panel'); </script>";
        }

	}

    function save(){
		$id_letters   = $this->input->post('id_letters');
        $operator_id   = $this->input->post('operator_id');
		$number   = $this->input->post('number');
        $title   = $this->input->post('title');
		$type   = $this->input->post('type');
        $date  = $this->input->post('date');
        $assignor  = $this->input->post('assignor');
        $assignee  = $this->input->post('assignee');
		$position   = $this->input->post('position');
		$purpose	= $this->input->post('purpose');
		$transportation   = $this->input->post('transportation');
		$from   = $this->input->post('from');
		$to   = $this->input->post('to');
		$length_of_business_trip   = $this->input->post('length_of_business_trip');
        $departure  = $this->input->post('departure');
		$return   = $this->input->post('return');
		$budget_assignment   = $this->input->post('budget_assignment');
		$etc   = $this->input->post('etc');
        $status  = $this->input->post('status');
		$approved_at   = $this->input->post('approved_at');
		$rejected_at   = $this->input->post('rejected_at');
		$created_at   = $this->input->post('created_at');
		$updated_at   = $this->input->post('updated_at');

        $this->m_letters->save($id_letters,$operator_id,$number,$title,$type,$date,$assignor,$assignee,$position,$purpose,$transportation,$from,$to,$length_of_business_trip,$departure,$return,$budget_assignment,$etc,$status,$approved_at,$rejected_at,$created_at,$updated_at);
        redirect('letters/detail');
        }
		
    function delete(){
		if($this->session->userdata('akses')=='1'){
        $id_letters = $this->uri->segment(3);
        $this->m_letters->delete($id_letters);
		redirect('letters/detail');
	}else{
        echo "<script>alert('Anda tidak diperkenankan menghapus data letters');</script>";
		echo "<script>redirect('admin/ahm/panel'); </script>";
        }
        
    }

    function get_edit(){
		if($this->session->userdata('akses')=='3'){
        $id_letters = $this->uri->segment(3);
        $result = $this->m_letters->get_id_letters($id_letters);
        if ($result->num_rows() > 0) {
        $i = $result->row_array();
        $data = array(
        'id_letters' => $i['id_letters'],
        'operator_id' => $i['operator_id'],
        'number' => $i['number'],
        'title' => $i['title'],
        'type' => $i['type'],
        'date' => $i['date'],
		'assignor' => $i['assignor'],
		'assignee' => $i['assignee'],
		'position' => $i['position'],
		'purpose' => $i['purpose'],
		'transportation' => $i['transportation'],
		'from' => $i['from'],
		'to' => $i['to'],
		'length_of_business_trip' => $i['length_of_business_trip'],
		'departure' => $i['departure'],
		'return' => $i['return'],
		'budget_assignment' => $i['budget_assignment'],
		'etc' => $i['etc'],
		'status' => $i['status'],
		'approved_at' => $i['approved_at'],
		'rejected_at' => $i['rejected_at'],
		'created_at' => $i['created_at'],
        'updated_at' => $i['updated_at']
        );
		$this->load->view('v_header');
		$this->load->view('edit_letters_view',$data);
		$this->load->view('v_footer');
        }else{
        echo "
        <script>
        alert('Data Was Not Found')
        </script>
        ";
        }
	}else{
		echo "<script>alert('Anda tidak diperkenankan mengedit data letters');</script>";
		echo "<script>redirect('admin/ahm/panel'); </script>";
        }
    }

    function update(){
        $id_letters   = $this->input->post('id_letters');
        $operator_id   = $this->input->post('operator_id');
		$number   = $this->input->post('number');
        $title   = $this->input->post('title');
		$type   = $this->input->post('type');
        $date  = $this->input->post('date');
        $assignor  = $this->input->post('assignor');
        $assignee  = $this->input->post('assignee');
		$position   = $this->input->post('position');
		$purpose	= $this->input->post('purpose');
		$transportation   = $this->input->post('transportation');
		$from   = $this->input->post('from');
		$to   = $this->input->post('to');
		$length_of_business_trip   = $this->input->post('length_of_business_trip');
        $departure  = $this->input->post('departure');
		$return   = $this->input->post('return');
		$budget_assignment   = $this->input->post('budget_assignment');
		$etc   = $this->input->post('etc');
        $status  = $this->input->post('status');
		$approved_at   = $this->input->post('approved_at');
		$rejected_at   = $this->input->post('rejected_at');
		$created_at   = $this->input->post('created_at');
		$updated_at   = $this->input->post('updated_at');
        $this->m_letters-> update
        ($id_letters,$operator_id,$number,$title,$type,$date,$assignor,$assignee,$position,$purpose,$transportation,$from,$to,$length_of_business_trip,$departure,$return,$budget_assignment,$etc,$status,$approved_at,$rejected_at,$created_at,$updated_at);
        redirect('letters/detail');
    }


	function get_acc(){
		if($this->session->userdata('akses')=='2'){
        $id_letters = $this->uri->segment(3);
        $result = $this->m_letters->get_acc($id_letters);
        if ($result->num_rows() > 0) {
        $i = $result->row_array();
        $data = array(
		'id_letters' => $i['id_letters'],
        'status' => $i['status'],
		'approved_at' => $i['approved_at'],
		'rejected_at' => $i['rejected_at']
        );
		$this->load->view('v_header');
		$this->load->view('acc_letters_view',$data);
		$this->load->view('v_footer');
        }else{
        echo "
        <script>
        alert('Data Was Not Found')
        </script>
        ";
        }
	}else{
		echo "<script>alert('Anda tidak diperkenankan mengacc letters');</script>";
		echo "<script>redirect('admin/ahm/panel'); </script>";
        }
    }

	function update_acc(){
        $id_letters   = $this->input->post('id_letters');
        $status  = $this->input->post('status');
		$approved_at   = $this->input->post('approved_at');
		$rejected_at   = $this->input->post('rejected_at');
        $this->m_letters-> update_acc
        ($id_letters,$status,$approved_at,$rejected_at);
        redirect('letters/detail');
    }

	function detail() {
		$data ['letters'] =$this->m_letters->get_letters();
        $this->load->database();
        $jumlah_data = $this->m_letters->jumlah_data();
        $this->load->library('pagination');
        $config['base_url'] = base_url().'letters/detail';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 5;
        $from = $this->uri->segment('3');
        $this->pagination->initialize($config);
        $data['letters'] = $this->m_letters->data($config['per_page'],$from);
		$this->load->view('v_header');
		$this->load->view('v_detail',$data);
		$this->load->view('v_footer');
        
        }

		function review_letters() {
			if($this->session->userdata('akses')=='3'){
			$data ['letters'] =$this->m_letters->get_letters();
			$this->load->database();
			$jumlah_data = $this->m_letters->jumlah_data();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'letters/review_letters';
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 1;
			$from = $this->uri->segment('3');
			$this->pagination->initialize($config);
			$data['letters'] = $this->m_letters->data($config['per_page'],$from);
			$this->load->view('review_letter_view',$data);
			}else{
				echo "<script>alert('Anda tidak diperkenankan mengakses halaman print letters');</script>";
				echo "<script>redirect('admin/ahm/panel'); </script>";
				}
			}


}
?>
