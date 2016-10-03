<?php
class MailinglistModel extends CI_Model {

	static private $table = 'mailinglist';
	
	public $email = ''; // String
	public $addDate = ''; // Datetime
	
	public function MailinglistModel($email = '') {
		$this -> email = $email;
		$this -> addDate = date('Y-m-d H:i:s');
	}
	
	public function get($email) {
		$query = $this -> db -> get_where(MailinglistModel::$table, array('email' => $email));

		if ($query -> num_rows() > 0)
			return $query -> row(); 
		
		return FALSE;
	}
	
	public function getAll() {
		$query = $this -> db -> get(MailinglistModel::$table);
		
		$r = array();
		foreach ($query -> result() as $row) {
			$r[]= $row;
		}
		return $r;
	}
	
	public function insert($email) {
		$this -> db -> insert(MailinglistModel::$table, new MailinglistModel($email));
		
	}
	
	public function delete($email) {
		return $this -> db -> delete(MailinglistModel::$table, array('email' => $email)); 
	}
}

?>