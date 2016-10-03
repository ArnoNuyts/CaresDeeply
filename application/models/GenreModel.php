<?php
class GenreModel extends CI_Model {

	static private $table = 'genres';

	public $id;
	public $name = ''; // String

	public function newGenre($data) {

		$e = new GenreModel();

		foreach($data as $var => $val) {
			if(in_array($var, array_keys(get_object_vars($this)))) {
				$e -> $var = $val;
			}
		}
		return $e;
	}

	public function get($id) {
		$query = $this -> db -> get_where(GenreModel::$table, array('id' => $id));

		if ($query -> num_rows() > 0)
			return $query -> row();

		return FALSE;
	}
	
	public function getAll() {
		$this -> db -> order_by('name', 'asc');
		$query = $this -> db -> get(GenreModel::$table);

		$r = array();
		foreach ($query -> result() as $row) {
			$r[]= $row;
		}
		return $r;
	}

	public function insert() {
		$this -> db -> insert(GenreModel::$table, $this);
	}

	public function update() {
		$this -> db -> where('id', $this -> id);
		$this -> db -> update(GenreModel::$table, $this);
	}

	public function delete($id) {
		return $this -> db -> delete(GenreModel::$table, array('id' => $id));
	}
}

?>
