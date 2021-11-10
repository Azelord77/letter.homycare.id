<?php
class m_letters extends CI_Model{

    function get_letters (){
        $result = $this->db->get('letters');
        return $result;
    }
    function data($number,$offset) {
        return $query = $this->db->get('letters',$number,$offset)->result();
    }
    function jumlah_data() {
        return $this->db->get('letters')->num_rows();
    }
    function save($id_letters,$operator_id,$number,$title,$type,$date,$assignor,$assignee,$position,$purpose,$transportation,$from,$to,$length_of_business_trip,$departure,$return,$budget_assignment,$etc,$status,$approved_at,$rejected_at,$created_at,$updated_at){
        $data = array(
            'id_letters'  => $id_letters,
            'operator_id'  => $operator_id,
            'number' => $number,
            'title'  => $title,
			'type'  => $type,
			'date'  => $date,
			'assignor'  => $assignor,
			'assignee'  => $assignee,
            'position'  => $position,
			'purpose'  => $purpose,
			'transportation'  => $transportation,
			'from'  => $from,
			'to'  => $to,
			'length_of_business_trip'  => $length_of_business_trip,
			'departure'  => $departure,
			'return'  => $return,
			'budget_assignment'  => $budget_assignment,
			'etc'  => $etc,
			'status'  => $status,
			'approved_at'  => $approved_at,
			'rejected_at'  => $rejected_at,
			'created_at'  => $created_at,
			'updated_at'  => $updated_at
            );
        $this->db->insert('letters',$data);
    }
    function delete ($id_letters){
        $this->db->where('id_letters', $id_letters);
        $this->db->delete('letters');
    }
    function get_id_letters($id_letters){
        $query = $this->db->get_where('letters',array('id_letters' => $id_letters));
        return $query;
        }
    function update($id_letters,$operator_id,$number,$title,$type,$date,$assignor,$assignee,$position,$purpose,$transportation,$from,$to,$length_of_business_trip,$departure,$return,$budget_assignment,$etc,$status,$approved_at,$rejected_at,$created_at,$updated_at){
        $data = array(
            'id_letters'  => $id_letters,
            'operator_id'  => $operator_id,
            'number' => $number,
            'title'  => $title,
			'type'  => $type,
			'date'  => $date,
			'assignor'  => $assignor,
			'assignee'  => $assignee,
            'position'  => $position,
			'purpose'  => $purpose,
			'transportation'  => $transportation,
			'from'  => $from,
			'to'  => $to,
			'length_of_business_trip'  => $length_of_business_trip,
			'departure'  => $departure,
			'return'  => $return,
			'budget_assignment'  => $budget_assignment,
			'etc'  => $etc,
			'status'  => $status,
			'approved_at'  => $approved_at,
			'rejected_at'  => $rejected_at,
			'created_at'  => $created_at,
			'updated_at'  => $updated_at
            );
        $this->db->where('id_letters', $id_letters);
        $this->db->update('letters', $data);
    }


	function review_letters($id_letters,$operator_id,$number,$title,$type,$date,$assignor,$assignee,$position,$purpose,$transportation,$from,$to,$length_of_business_trip,$departure,$return,$budget_assignment,$etc,$status,$approved_at,$rejected_at,$created_at,$updated_at){
		$this->load->database();
		$result = $this->db->get('letters');
		$this->db->get_letters('letters',$data);
        }

		function get_acc($id_letters){
			$query = $this->db->get_where('letters',array('id_letters' => $id_letters));
			return $query;
			}

		function update_acc($id_letters,$status,$approved_at,$rejected_at){
			$data = array(
				'id_letters'  => $id_letters,
				'status'  => $status,
				'approved_at'  => $approved_at,
				'rejected_at'  => $rejected_at
				);
			$this->db->where('id_letters', $id_letters);
			$this->db->update('letters', $data);
		}

		
}
?>
