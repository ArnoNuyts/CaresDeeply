<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(BASEPATH.'../application/validationFunctions.php');
require_once('fullpage.php');
class Events extends Fullpage {

	private $stati = array('unknown' => 'Unknown', 'accepted' => 'Accepted', 'rejected' => 'Rejected');
	private $selected = '';

	function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

	protected function _pageTop() {

		if($this -> tank_auth -> is_logged_in() && $this -> selected != 'Agenda') {
			parent::_pageTop('Events');
			$this -> load -> view('submenu', array('selected' => $this -> selected, 'links' => array('Accepted events' => '/cal/events/accepted', 'Unapproved events' => '/cal/events/unknown', 'Rejected events' => '/cal/events/rejected', 'Old events' => '/cal/events/past', 'Add new' => 'add\' class=\'modal-edit')));
		} else {
			parent::_pageTop();
		}
	}

	public function index()
	{
		$this -> _agenda();
	}

	public function agenda()
	{
		$this -> _agenda();
	}

	private function _agenda() {
		$this -> selected = 'Agenda';

		/*
		Added these files in calendar.js
		$this -> _addJS('underscore.js');
		$this -> _addJS('moment.js');
		$this -> _addJS('clndr-1.1.0.min.js');
		*/
		$this -> _addJS('calendar.js');
		/* Added this to event.less
		$this -> _addCss('mini-clndr.less);
		*/
		$this -> _addCss('event.less');
		$this -> _pageTop();
		$this -> load -> helper('form');
		$this -> load -> model('EventModel');
		$data['events'] = $this -> EventModel -> getAllFuture('accepted');
		$this -> load -> view('agenda', $data);
		$this -> _pageBottom();
	}

	public function changeStatus($method='html') {
		$this -> _requireLogin();
		$success = false;
		$data = $this -> input -> post(NULL, TRUE);


		if(is_array($data) && count($data) != 0 && isset($data['id']) && isset($data['status']) && isset($this -> stati[$data['status']])) {
			$this -> load -> model('EventModel');
			if($e = $this -> EventModel -> get($data['id'])) {
				$e -> status = $data['status'];

				$e -> update();
				$success = true;
			}
		}

		if($method == 'html') {
			$this -> _setMessage($success?'Status successfully changed':'Status change failed');
			$this -> unknown();
		} else {
			echo $success?'Status successfully changed':'Status change failed';
		}
	}

	public function unknown() {
		$this -> selected = 'Unapproved events';
		$this -> load -> model('EventModel');
		$this -> _showEvents($this -> EventModel -> getAllFuture('unknown'));
	}

	public function rejected() {
		$this -> selected = 'Rejected events';
		$this -> load -> model('EventModel');
		$this -> _showEvents($this -> EventModel -> getAllFuture('rejected'));
	}

	public function all() {
		$this -> load -> model('EventModel');
		$this -> _showEvents($this -> EventModel -> getAll());
	}

	public function past() {
		$this -> selected = 'Old events';
		$this -> load -> model('EventModel');
		$this -> _showEvents($this -> EventModel -> getAllPast());
	}

	public function accepted() {
		$this -> selected = 'Accepted events';
		$this -> load -> model('EventModel');
		$this -> _showEvents($this -> EventModel -> getAllFuture('accepted'));
	}

	private function _showEvents($events) {
		$this -> _requireLogin();
		$this -> _addJs('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js');
		$this -> _addJs('confirm.js');
		$this -> _addJs('statusChange.js');
		$this -> _addJs('spin.min.js');
		$this -> _addJs('editEventModal.js');
		$this -> _addJs('viewEventModal.js');
		$this -> _pageTop();

		$data['events'] = $events;
		$data['stati'] = $this -> stati;

		$this -> load -> helper('form');

		$this -> load -> view('events', $data);
		$this -> _pageBottom();

	}

	public function show($id, $method = 'html')
	{
		$this -> selected = 'Agenda';
		$this -> _addCss('event.less');
		/*
		Added these files in calendar.js
		$this -> _addJS('underscore.js');
		$this -> _addJS('moment.js');
		$this -> _addJS('clndr-1.1.0.min.js');
		*/
		$this -> _addJS('calendar.js');
		/* Added this to event.less
		$this -> _addCss('mini-clndr.less);
		*/

		if($method == 'html') $this -> _pageTop();

		$this -> load -> model('EventModel');

		if($method == 'html')
			$data['events'] = $this -> EventModel -> getAllFuture('accepted');

		$data['event'] = $this -> EventModel -> get($id);
		$data['method'] = $method;

		$this -> load -> helper('form');

		$this -> load -> view('event', $data);
		if($method == 'html') $this -> _pageBottom();
	}

	public function ics($id)
	{
		$this -> load -> model('EventModel');
		$data['event'] = $this -> EventModel -> get($id);
		$this -> load -> view('eventIcs', $data);

	}

	public function add($method = 'html') {
		$this -> selected = 'Add new';
		$this -> load -> model('EventModel');
		$this -> _showEventForm($this -> EventModel, null, $method);
	}

	public function edit($id='', $code='', $method = 'html') {
		$this -> load -> model('EventModel');
		$event = $this -> EventModel -> get($id);

		if(!empty($id) AND !empty($code) AND $event AND $event -> editCode == $code)
			$this -> _showEventForm($event, null, $method);
		else {
			if($method == html) {
				$this -> _setMessage('Wrong editing url/code');
				$this -> _agenda();
			} else {
				echo 'Wrong editing url/code';
			}
		}
	}


	public function _showEventForm($event = false, $errors = null, $method = 'html') {

		$this -> _addCss('https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.css');
		$this -> _addJs('https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.js');
		$this -> _addJs('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js');
		$this -> _addCss('eventForm.css');
		$this -> _addJs('formStuff.js');
		$this -> _addJs('eventForm.js');

		$data['event'] = $event;
		$data['errors'] = $errors;
		$data['method'] = $method;
		$data['baseUrl'] = $this -> bodyData['baseUrl'];
		$this -> load -> model('GenreModel');
		$data['genres'] = $this -> GenreModel -> getAll();

		$this -> load -> model('VenueModel');
		$data['venues'] = $this -> VenueModel -> getAll();

		if($method == 'html') $this -> _pageTop();
		$this -> load -> helper('form');
		$this -> load -> view('eventForm', $data);
		if($method == 'html') $this -> _pageBottom();
	}

	public function save($method='html') {

		$data = $this -> input -> post(NULL, TRUE);


		//Why would you surf to a save page?
		if(!is_array($data) OR count($data) == 0) {
			$this -> _agenda();
			return false;
		}


		$this -> load -> model('GenreModel');
		$genres = $this -> GenreModel -> getAll();
		$data['genre'] = ', ';

		foreach($genres as $g) {
			if(isset($data[$g -> name]) && !empty($data[$g -> name])) {
				$data['genre'] .= $g -> name;
				$data['genre'] .= ', ';
			}

		}

		$this -> load -> model('EventModel');
		$e = $this -> EventModel -> newEvent($data);

		// Edit code check + getting old object
		if(!empty($e -> id)) {
			$old = $this -> EventModel -> get($e -> id);

			if($e -> editCode != $old -> editCode) {

				if($method == 'html') {
					$this -> _setMessage('Wrong editing code.');
					$this -> _agenda();
				} else {
					echo 'Wrong editing code.';
				}
			}

			$e -> status = $old -> status; // Status should not change when editing

		}
		$this -> load -> library('form_validation');
		$this -> form_validation -> set_rules('name', 'Eventname', 'trim|required|max_length[21845]');
		$this -> form_validation -> set_rules('date', 'Lineup', 'trim|required|regex_match[/^([0-9]|[0-2][0-9]|3[0-1])([-]|[/])([0-9]|0[0-9]|1[0-2])([-]|[/])20[0-9]{2}$/]|max_length[11]');
		$this -> form_validation -> set_rules('from', 'Starting time', 'trim|required|regex_match[/^([0-9]|0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9])$/]|max_length[5]');
		$this -> form_validation -> set_rules('till', 'Finish', 'trim|regex_match[/^([0-9]|0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9])$/]|max_length[5]');
		$this -> form_validation -> set_rules('lineup', 'Line-up', 'trim|required|max_length[21845]');
		$this -> form_validation -> set_rules('website', 'Website', 'trim|valid_url|max_length[21845]');
		$this -> form_validation -> set_rules('flyer', 'Flyer-url', 'trim|valid_url|max_length[21845]');
		$this -> form_validation -> set_rules('facebook', 'Facebook-page', 'trim|valid_url|regex_match[/^https?://www.facebook.com/.+$/]|max_length[65535]');
		$this -> form_validation -> set_rules('volontaryContribution', 'Free Contribution', 'trim|regex_match[/^on$/]');
		if(isset($data['volontaryContribution']) && $data['volontaryContribution']=='on') {
			//Pricing validation
			$this -> form_validation -> set_rules('price', 'Price', 'trim|required|regex_match[/^\d+([\.,]{1}\d{1,2})?$/]|max_length[65535]|greater_than_equal_to[0]');

		}
		$errors=array();
		/* Validation here */
		// Required fields

		if(!empty($e -> date) && strtotime(str_replace('/', '-', $e -> date)) < strtotime(date('Y-m-d')))
			$errors[] = "The selected date must be in the future.";


		if(!empty($e -> price) && !isValidPrice($e -> price))
			$errors[] = "The price field is not valid";

		if(!empty($e -> priceChangeTime) && !isValidTime($e -> priceChangeTime))
			$errors[] = "The price change time field is not well formated";

		if(!empty($e -> priceChangePrice) && !isValidPrice($e -> priceChangePrice))
			$errors[] = "The price change price field is not well formated";

		if(!empty($e -> ticketPrice) && !isValidPrice($e -> ticketPrice))
			$errors[] = "The ticket price field is not valid";

		if(!empty($e -> ticketWebsite) && !isValidURL($e -> ticketWebsite))
			$errors[] = "The online ticket-sales field is not well formated";

		if(!empty($e -> email) && !isValidEmail($e -> email))
			$errors[] = "The email field is not well formated";

		if(count($errors) > 0) {
			$this -> _showEventForm($e, $errors, $method);
			return false;
		}

		if(empty($e -> id)) {
			$e -> insert();

			if($method == 'html') {
				$this -> _setMessage('Submitted your party for approval. You will get on e-mail when approved.');
				$this -> _agenda();
			} else {
				echo 'Submitted your party for approval. You will get on e-mail when approved.';
			}

		} else {
			// update
			$e -> update();
			if($method == 'html') {
				$this -> _setMessage('Successfully update the event.');
				$this -> _showEventForm($e, null);
			} else {
				echo 'Successfully update the event.';
			}
		}
	}


	public function delete() {
		$this -> _requireLogin();
		// delete here
		$this -> agenda();
	}
}
