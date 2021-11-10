<?php
class m_user extends CI_Model{

    function get_user (){
        $result = $this->db->get('user');
        return $result;
    }
    function data($number,$offset) {
        return $query = $this->db->get('user',$number,$offset)->result();
    }
    function jumlah_data() {
        return $this->db->get('user')->num_rows();
    }
    function save($id_user,$name,$email,$username,$passwords,$role,$status,$created_at,$updated_at){
        $data = array(
            'id_user'  => $id_user,
            'name'  => $name,
            'email' => $email,
            'username'  => $username,
			'passwords'  => $passwords,
			'role'  => $role,
			'status'  => $status,
			'created_at'  => $created_at,
            'updated_at'  => $updated_at
            );
        $this->db->insert('user',$data);
    }
    function delete ($id_user){
        $this->db->where('id_user', $id_user);
        $this->db->delete('user');
    }
    function get_id_user($id_user){
        $query = $this->db->get_where('user',array('id_user' => $id_user));
        return $query;
        }
    function update($id_user,$name,$email,$username,$passwords,$role,$status,$created_at,$updated_at){
        $data = array(
            'id_user'  => $id_user,
            'name'  => $name,
            'email' => $email,
            'username'  => $username,
			'passwords'  => $passwords,
			'role'  => $role,
			'status'  => $status,
			'created_at'  => $created_at,
            'updated_at'  => $updated_at
            );
        $this->db->where('id_user', $id_user);
        $this->db->update('user', $data);
    }
}
?>
