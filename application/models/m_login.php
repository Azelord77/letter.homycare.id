<?php
class M_login extends CI_Model{
 
	function auth_user ($username, $passwords){
		$query=$this->db->query ("SELECT * FROM user WHERE username='$username' AND passwords=md5('$passwords')");
	  return $query;
	  }
	  //lakukan cek password password
	  function auth_operator ($username, $passwords){
	  $query=$this->db->query("SELECT * FROM operator WHERE username='$username' AND passwords=md5('$passwords')");
	  return $query;
	  }
}
?>
