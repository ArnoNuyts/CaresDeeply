<?php
class VenueModel extends CI_Model {

	public $id;
	public $name; // String
	public $address; // Freestyle format
	public $longitude; // numeric
	public $latitude; // numeric
	public $website=''; // string, optional
	public $zoom = 12; //open streets zoom level (http://leafletjs.com/reference.html#latlng)

	public function newVenue($data) {

		$e = new VenueModel();

		foreach($data as $var => $val) {
			if(in_array($var, array_keys(get_object_vars($this)))) {
				$e -> $var = $val;
			}
		}
		return $e;
	}

	public function get($id) {
		$query = $this->db->get_where('venues', array('id' => $id));

		if ($query->num_rows() > 0)
			return $query->row();

		return FALSE;
	}

	public function getAll() {
		$this -> db -> order_by('name', 'asc'); 
		$query = $this -> db -> get('venues');
		$r = array();
		foreach ($query -> result() as $row) {
			$r[]= $row;
		}
		return $r;
	}

	public function insert() {
		$this -> db -> insert('venues', $this);
	}
	public function update() {
		$this -> db -> where('id', $this -> id);
		$this -> db -> update('venues', $this);
	}

	public function delete($id) {
		return $this -> db -> delete('venues', array('id' => $id));
	}
}

?>
