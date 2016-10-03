<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EventModel extends CI_Model {

	public $name = '';	// String
	public $editCode = ''; // random secret code for editing the event, e-mailed to the user. -> MD5 should be long
	public $id = '';	// Name without spaces, potentiol need for adding a nr.
	public $type = ''; // freestyle-form
	public $lineup = ''; // freestyle-form
	public $genre = ''; // freestyle-form
	public $date = '';
	public $from = '';
	public $till = '';
	public $canceled = false;
	public $freeToilet = false;

	public $checkYourNetwork = false;
	public $venueName = ''; // String
	public $venueAddress = ''; // Freestyle format
	public $venueLongitude = ''; // numeric
	public $venueLatitude = ''; // numeric
	public $venueWebsite = ''; // website
	public $venueZoom = 18; // numeric

	public $facebook = ''; // check id
	public $website = ''; // check id
	public $flyer = ''; // check id

	public $ticket = false; // check id
	public $ticketPrice = ''; // check
	public $ticketWebsite = ''; // check id
	public $ticketOffline = ''; //

	public $priceChangeTime = '';
	public $priceChange = false;
	public $priceChangePrice = '';

	public $price = '';
	public $volontaryContribution = false;

	public $status = 'unknown'; // enum(unknown,rejected,approved)
	public $email = ''; // e-mail check;
	public $log = ''; // log;

	function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

	public function getAll($status='') {
		if($status != '')
			$this -> db -> where('status', $status);

		$this -> db -> order_by("date", "asc");
		$this -> db -> order_by("from", "asc");
		$query = $this -> db -> get('events');

		$r = array();
		foreach ($query -> result() as $row)
		{
			$r[]= $row;
		}

		return $r;
	}

	public function getAllFuture($status='') {
		if(date('G') < 12) { // before noon show events of yesterday
			$this -> db -> where('date >=', date('Y-m-d', strtotime('yesterday')));
		} else {
			$this -> db -> where('date >=', date('Y-m-d'));
		}
		return $this -> getAll($status);
	}

	public function getAllPast($status='', $year = null, $month = null) {
		if($month == null || $year == null) {
			$this -> db -> where('date <=', date('Y-m-d'));
		} else {
			$this -> db -> where('date <=', date('Y-m-t', strtotime("$year-$month-1")));
			$this -> db -> where('date >=', date('Y-m-d', strtotime("$year-$month-1")));
		}

		return $this -> getAll($status);
	}

	public function get($id) {
		$query = $this -> db -> get_where('events', array('id' => $id));

		if ($query -> num_rows() > 0) {
			$r = $query -> result_array();
			return $this -> newEvent($r[0]);
		}

		return FALSE;
	}

	public function log($message) {
		if(!$this -> tank_auth -> is_logged_in())
			$user = 'none';
		else
			$user = $this -> tank_auth -> get_username();

		$this -> log .= date('Y-m-d H:i:s')."\t$message\t$user\n";
	}

	public function newEvent($data) {

		$e = new EventModel();
    $object_keys = array_keys(get_object_vars($this));

		foreach($data as $var => $val) {
			if(in_array($var, $object_keys)) {
				$e -> $var = $val;
			}
		}
		$e -> price = str_replace(',', '.', $e -> price);
		$e -> priceChangePrice = str_replace(',', '.', $e -> priceChangePrice);
		$e -> ticketPrice = str_replace(',', '.', $e -> ticketPrice);
		return $e;
	}

	public function generateId() {
		$this -> id = preg_replace('/[^A-Za-z0-9]/', '', $this -> name);

		if($this -> get($this -> id) != FALSE) {
			$i = 0;
			$id = $this -> id;
			do {
				$i++;
				$this -> id = $id .$i;
			} while($this -> get($this -> id) != FALSE);

		}
	}

	public function generateEditCode() {
		$this -> editCode = sha1(mt_rand().mt_rand().mt_rand().mt_rand());
	}

	private function dataConversion() {
		foreach(array('priceChange', 'ticket', 'volontaryContribution', 'canceled', 'checkYourNetwork', 'freeToilet') as $var) {
			if(in_array($this -> $var, array('on', 1, true, 'True', 'true', 'TRUE')))
				$this -> $var = true;
			else
				$this -> $var = false;

		}
		// Make sure decimals aren't empty
		foreach(array('price', 'ticketPrice', 'priceChangePrice') as $var) {
			if($this -> $var == '')
				$this -> $var = 0;
		}
		/*
		// Make sure string, convert to utf8
		foreach(array('id', 'name', 'lineup', 'genre', 'venueName', 'venueAddress', 'venueWebsite', 'facebook', 'website', 'flyer', 'email', 'ticketWebsite', 'ticketOffline', 'log') as $var) {
				$this -> $var = utf8_encode($this -> $var);
		}
		*/
		$this -> date = date('Y-m-d',strtotime(str_replace('/','-',$this -> date)));

	}

	public function insert() {
		$this -> generateId();
		$this -> generateEditCode();
		$this -> dataConversion();
		$this -> db -> insert('events', $this);
	}

	public function update() {
		$this -> dataConversion();
		$this -> db -> where('id', $this -> id);
		$this -> db -> update('events', $this);
	}

}

?>
