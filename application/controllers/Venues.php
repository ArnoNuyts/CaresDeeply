<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(BASEPATH.'../application/validationFunctions.php');
require_once('Fullpage.php');
class Venues extends Fullpage {

	private $selected = '';

	function __construct() {
		parent::__construct();
		$this -> _requireLogin();
		$this -> _addJs('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js');
		$this -> _addJs('menu.js');
	}

	protected function _pageTop($title='') {

		parent::_pageTop('Venues');
		$this -> load -> view('submenu', array('selected' =>  $this -> selected,'links' => array('Overview' => base_url().'venues/overview', 'Add new' => base_url().'venues/add')));
	}

	public function index()
	{
		$this -> _overview();
	}

	public function overview()
	{
		$this -> _overview();
	}

	private function _overview() {
		$this -> _addJs('confirm.js');
		$this -> selected = 'Overview';
		$this -> _pageTop();
		$this -> load -> model('VenueModel');
		$data['venues'] = $this -> VenueModel -> getAll();
		$this -> load -> view('venues', $data);
		$this -> _pageBottom();
	}


	public function add() {
		$this -> selected = 'Add new';
		$this -> _showVenueForm();
	}

	public function edit($id='') {
		$this -> load -> model('VenueModel');
		$venue = $this -> VenueModel -> get($id);

		if(!empty($id) AND $venue)
			$this -> _showVenueForm($venue);
		else {
			$this -> _setMessage('Wrong editing url');
			$this -> _overview();
		}
	}

	public function _showVenueForm($venue = false, $errors = null) {
		$data['venue'] = $venue;
		$data['errors'] = $errors;

		$this -> _addCss('https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.css');
		$this -> _addJs('https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.js');

		$this -> _addCss('eventForm2.css');
		$this -> _addJs('formStuff3.js');
		$this -> _addJs('venueForm.js');
		$this -> load -> helper('form');
		$this -> _pageTop();
		$this -> load -> view('venueForm', $data);
		$this -> _pageBottom();
	}

	public function save() {

		$data = $this -> input -> post(NULL, TRUE);

		//Why would you surf to a save page?
		if(!is_array($data) OR count($data) == 0) {
			$this -> _overview();
			return false;
		}

		$this -> load -> model('VenueModel');

		$v = $this -> VenueModel -> newVenue($data);

		// Edit code check + getting old object
		if(!empty($v -> id)) {
			$old = $this -> VenueModel -> get($v -> id);
			if(!$old) {
				$this -> _setMessage('Venue not found.');
				$this -> overview();
				return false;
			}
		}

		$errors = array();
		/* Validation here */
		// Required fields
		foreach(array('name' => 'name', 'address' => 'address') as $var => $field) {
			if(trim($v -> $var) == '')
				$errors[] = "The $field field can't be empty.";
		}

		if(!empty($v -> website) && !isValidURL($v -> website))
			$errors[] = "The website field is not well formated";


		if(count($errors) > 0) {
			$this -> _showVenueForm($v, $errors);
			return false;
		}

		if(empty($v -> id)) {
			$v -> insert();
			$this -> _setMessage('Succesfully added the venue.');
			$this -> _overview();

		} else {
			// update
			$v -> update();
			$this -> _setMessage('Succesfully update the venue.');
			$this -> _showVenueForm($v, null);
		}
	}


	public function delete($id='') {
		// delete here
		if(empty($id)) {
			$this -> _setMessage('Venue not found.');
			$this -> overview();
			return false;
		}

		$this -> load -> model('VenueModel');

		if(!$v = $this -> VenueModel -> get($id)) {
			$this -> _setMessage('Venue not found.');
			$this -> overview();
			return false;
		}

		$this -> VenueModel -> delete($id);

		$this -> _setMessage('Succesfully deleted the venue.');
		$this -> overview();
	}
}
