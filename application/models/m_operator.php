<?php
class m_operator extends CI_Model{

    function get_operator (){
        $result = $this->db->get('operator');
        return $result;
    }
    function data($number,$offset) {
        return $query = $this->db->get('operator',$number,$offset)->result();
    }
    function jumlah_data() {
        return $this->db->get('operator')->num_rows();
    }
    function save($id_operator,$name,$email,$username,$passwords,$role,$status,$created_at,$updated_at){
        $data = array(
            'id_operator'  => $id_operator,
            'name'  => $name,
            'email' => $email,
            'username'  => $username,
			'passwords'  => $passwords,
			'role'  => $role,
			'status'  => $status,
			'created_at'  => $created_at,
            'updated_at'  => $updated_at
            );
        $this->db->insert('operator',$data);
    }
    function delete ($id_operator){
        $this->db->where('id_operator', $id_operator);
        $this->db->delete('operator');
    }
    function get_id_operator($id_operator){
        $query = $this->db->get_where('operator',array('id_operator' => $id_operator));
        return $query;
        }
    function update($id_operator,$name,$email,$username,$passwords,$role,$status,$created_at,$updated_at){
        $data = array(
            'id_operator'  => $id_operator,
            'name'  => $name,
            'email' => $email,
            'username'  => $username,
			'passwords'  => $passwords,
			'role'  => $role,
			'status'  => $status,
			'created_at'  => $created_at,
            'updated_at'  => $updated_at
            );
        $this->db->where('id_operator', $id_operator);
        $this->db->update('operator', $data);
    }
}
?>
