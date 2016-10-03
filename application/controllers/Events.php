<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(BASEPATH.'../application/validationFunctions.php');
require_once('Fullpage.php');
class Events extends Fullpage {

	private $stati = array('unknown' => 'Unknown', 'accepted' => 'Accepted', 'rejected' => 'Rejected');
	private $selected = '';

	function __construct() {
      // Call the Model constructor
      parent::__construct();
  }

	protected function _pageTop($title='') {
		if($this -> tank_auth -> is_logged_in() && $this -> selected != 'Agenda') {
			parent::_pageTop('Events');
			$this -> load -> view('submenu', array('selected' => $this -> selected, 'links' => array('Accepted events' => base_url().'events/accepted', 'Unapproved events' => base_url().'events/unknown', 'Rejected events' => base_url().'events/rejected', 'Old events' => base_url().'events/past', 'Add new' => 'add\' class=\'modal-edit')));
		} else {
			parent::_pageTop();
		}
	}

	public function index()
	{
		if(date('G') != 12)
			$min = 60;
		else
			$min = 60 - date('i');

		$this -> output -> cache($min);

		$this -> selected = 'Agenda';
		/*
		Added these files in calendar.js
		$this -> _addJS('underscore.js');
		$this -> _addJS('moment.js');
		$this -> _addJS('clndr-1.1.0.min.js');
		*/
		$this -> _addJS('calendar12.js');
		/* Added this to event.css
		$this -> _addCss('mini-clndr.css);
		*/
		/* Added this to main.css
		$this -> _addCss('event.css');
		*/
		$this -> _pageTop();
		$this -> load -> helper('form');
		$this -> load -> model('EventModel');
		$data['events'] = $this -> EventModel -> getAllFuture('accepted');
		$data['eventsNow'] = $data['events'];
		$this -> load -> view('agenda', $data);
		$this -> _pageBottom();
	}

	public function archive($year=null, $month=null) {

		if($year == null)
			$year = date('Y');

		if($month == null) {
				$month = date('m');
		}
		if(!preg_match("/([0-9]{2})/", $month) OR !preg_match("/([0-9]{4})/", $year) OR strtotime("$year-$month-01") > time() OR strtotime("$year-$month-01") < strtotime('2016-01-01')) {
			redirect('/events/archive');
		}

		$this -> selected = 'Agenda';
		$this -> _addJS('calendar12.js');
		$this -> _pageTop('Archive');
		$this -> load -> helper('form');
		$this -> load -> model('EventModel');
		$data['eventsNow'] = $this -> EventModel -> getAllFuture('accepted');
		$data['events'] = $this -> EventModel -> getAllPast('accepted', $year, $month);
		$data['month'] = $month;
		$data['year'] = $year;
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
				$oldStatus = $e -> status;
				$e -> status = $data['status'];

				// Update + delete cache when status changed
				if($oldStatus != $e -> status) {
					$e -> log("Update status to {$e -> status}");
					$e -> update();
					// Delete cache when the event was visible once upon a time and recent
					if(($oldStatus == 'accepted' || $e -> status == 'accepted') && strtotime(str_replace('/', '-', $e -> date)) > strtotime(date('Y-m-d')))
						$this -> output -> delete_cache('/');
						$this -> output -> delete_cache('/events');
				}
				$this -> output -> delete_cache('/events/show/'.$e -> id);
				$success = true;
			}
      if($oldStatus != $e -> status) {
				switch ($e -> status) {
						case 'rejected':
				        $this -> _mailRejected($e);
						break;
				    case 'accepted':
						$this -> _mailAccepted($e);
						break;
				}
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
		$this -> _addJs('menu.js');
		$this -> _addJs('statusChange.js');
		$this -> _addJs('spin.min.js');
		$this -> _addJs('editEventModal5.js');
		$this -> _addJs('viewEventModal.js');
		//$this -> _addCss('http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css');
		$this -> _pageTop();

		$data['events'] = $events;
		$data['stati'] = $this -> stati;

		$this -> load -> helper('form');

		$this -> load -> view('events', $data);
        $this -> load -> view('modal');
		$this -> _pageBottom();

	}

	public function show ($id, $method = 'html')
	{
		if($method == 'html') {
			$this -> output -> cache(60);
		}

		$this -> selected = 'Agenda';
		/* Added this to main.css
		$this -> _addCss('event.css');
		*/
		/*
		Added these files in calendar.js
		$this -> _addJS('underscore.js');
		$this -> _addJS('moment.js');
		$this -> _addJS('clndr-1.1.0.min.js');
		*/
		$this -> _addJS('calendar12.js');
		/* Added this to event.css
		$this -> _addCss('mini-clndr.css);
		*/
		$this -> load -> model('EventModel');

		$event = $this -> EventModel -> get($id);

		if($event == false) {
			if($method == 'html') {
				$this -> _setMessage('Event doesn\'t exist', 'danger');
				redirect('/');
			} else {
				echo 'Event doesn\'t exist';
			}
			return false;
		}

		if($event == false || ($event -> status != 'accepted' && !$this -> tank_auth -> is_logged_in())) {
			if($method == 'html') {
				$this -> _setMessage('Event doesn\'t exist', 'danger');
				redirect('/');
			} else {
				echo 'Event doesn\'t exist';
			}
			return false;
		}

		if(!empty($event -> venueLongitude) && !empty($event -> venueLatitude) && !empty($event -> venueZoom)) {
			$this -> _addCss('https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.css');
			$this -> _addJS('https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.js');
		 }
		 if(isset($event -> name))
			 $this -> fb_title = $event -> name;

		 if(isset($event -> lineup))
			 $this -> fb_description = $event -> lineup;

			 if(isset($event -> flyer))
	 			$this -> fb_img = $event -> flyer;

		if($method == 'html') $this -> _pageTop();

		if($method == 'html')
		 	$data['events'] = $this -> EventModel -> getAllFuture('accepted');

		$data['event'] = $event;
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
		if(isset($_POST['name'])) {
			$this -> _save($method);
		} else {
			$this -> selected = 'Add new';
			$this -> load -> model('EventModel');
			$this -> _showEventForm($this -> EventModel, $method);
		}
	}

	public function edit($id='', $code='', $method = 'html') {

		$this -> load -> model('EventModel');
		$event = $this -> EventModel -> get($id);

		if(!empty($id) AND !empty($code) AND $event AND $event -> editCode == $code) {
			if(isset($_POST['name']))
				$this -> _save($method, $event);
			else
				$this -> _showEventForm($event, $method);
		} else {
			if($method == 'html') {
				$this -> _setMessage('Event doens’t exist');
				redirect('/');
			} else {
				echo 'Event doens’t exist';
			}
		}
	}

	public function _showEventForm($event = false, $method = 'html') {
		if($method == 'html') {
			$this -> _addJs('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js');
			$this -> _addCss('https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.css');
			$this -> _addJs('https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.js');
			$this -> _addCss('eventForm2.css');
			$this -> _addJs('formStuff3.js');
			$this -> _addJs('eventForm4.js');
			$this -> _addJs('menu.js');
			$this -> _pageTop();
		}

		$data['posted'] = $this->input->post('name');
		$data['event'] = $event;
		$data['method'] = $method;
		$this -> load -> model('GenreModel');
		$data['genres'] = $this -> GenreModel -> getAll();
		$this -> load -> model('VenueModel');
		$data['venues'] = $this -> VenueModel -> getAll();
		$this -> load -> helper('form');
		$this -> load -> view('eventForm', $data);

		if($method == 'html') {
      $this -> load -> view('modal');
      $this -> _pageBottom();
    }
	}
	private function _validateForm() {
		/* Validation here */
		$this -> load -> library('form_validation');
		$this -> form_validation -> set_error_delimiters('<div class="row"><div class="col-sm-offset-3 col-sm-9"><div class="alert alert-danger" role="alert">', '</div></div></div>');

		$this -> form_validation -> set_rules('name', 'eventname', 'trim|required|max_length[21845]');
		$this -> form_validation -> set_rules('type', 'type', 'trim|required|max_length[255]');
		$this -> form_validation -> set_rules('genre', 'genre', 'trim|required|max_length[21845]');
		$this -> form_validation -> set_rules('date', 'date', 'trim|required|callback_date_check|callback_date_in_future_check|max_length[11]');
		$this -> form_validation -> set_rules('from', 'starting time', 'trim|required|callback_time_check|max_length[5]');
		$this -> form_validation -> set_rules('till', 'finish', 'trim|callback_time_check|max_length[5]');
		$this -> form_validation -> set_rules('lineup', 'line-up', 'trim|required|max_length[21845]');
		$this -> form_validation -> set_rules('website', 'website', 'trim|valid_url|max_length[21845]');
		$this -> form_validation -> set_rules('flyer', 'flyer-url', 'trim|valid_url|max_length[21845]|callback_image_url_check');
		$this -> form_validation -> set_rules('facebook', 'facebook-page', 'trim|valid_url|regex_match[/^https?:\/\/www.facebook.com\/.+$/]|max_length[21845]');
		// Checkboxes pricing
		$this -> form_validation -> set_rules('volontaryContribution', 'Free Contribution', 'regex_match[/^on$/]');
		$this -> form_validation -> set_rules('priceChange', 'price Change', 'regex_match[/^on$/]');
		$this -> form_validation -> set_rules('ticket', 'tickets', 'regex_match[/^on$/]');

		// Default validation pricing without required
		$this -> form_validation -> set_rules('priceChangeTime', 'after', 'trim|callback_time_check|max_length[5]');
		$this -> form_validation -> set_rules('priceChangePrice', 'new price', 'trim|regex_match[/^\d+([\.,]{1}\d{1,2})?$/]|max_length[9]|greater_than_equal_to[0]');
		$this -> form_validation -> set_rules('ticketPrice', 'ticket price', 'trim|regex_match[/^\d+([\.,]{1}\d{1,2})?$/]|max_length[9]|greater_than_equal_to[0]');

		if(!isset($_POST['volontaryContribution'])) {
			//Pricing validation
			//TODO: Comma's to dot
			$this -> form_validation -> set_rules('price', 'Price', 'trim|required|regex_match[/^\d+([\.,]{1}\d{1,2})?$/]|max_length[9]|greater_than_equal_to[0]');
			if(isset($_POST['priceChange']) && $_POST['priceChange']=='on') {
				$this -> form_validation -> set_rules('priceChangeTime', 'after', 'trim|required|callback_time_check|max_length[5]');
				$this -> form_validation -> set_rules('priceChangePrice', 'new price', 'trim|required|regex_match[/^\d+([\.,]{1}\d{1,2})?$/]|max_length[9]|greater_than_equal_to[0]');
			}
			if(isset($_POST['ticket']) && $_POST['ticket']=='on') {
				$this -> form_validation -> set_rules('ticketPrice', 'ticket price', 'trim|required|regex_match[/^\d+([\.,]{1}\d{1,2})?$/]|max_length[9]|greater_than_equal_to[0]');
			}
		}
		$this -> form_validation -> set_rules('ticketWebsite', 'online ticket-sales', 'trim|valid_url|max_length[21845]');
		$this -> form_validation -> set_rules('ticketOffline', 'offline ticket-sales', 'trim|max_length[21845]');
		$this -> form_validation -> set_rules('checkYourNetwork', 'Check Your Network', 'regex_match[/^on$/]');
		// Default validation location without required
		$this -> form_validation -> set_rules('venueName', 'location name', 'trim|max_length[21845]');
		$this -> form_validation -> set_rules('venueAddress', 'address', 'trim|max_length[21845]');
		$this -> form_validation -> set_rules('venueWebsite', 'website', 'trim|valid_url|max_length[21845]');

		if(!isset($_POST['checkYourNetwork'])) {
			$this -> form_validation -> set_rules('venueName', 'location name', 'trim|required|max_length[21845]');
			$this -> form_validation -> set_rules('venueAddress', 'address', 'trim|required|max_length[21845]');
		}
		$this -> form_validation -> set_rules('venueLatitude', 'Venue Latitude', 'trim|decimal|max_length[20]');
		$this -> form_validation -> set_rules('venueLongitude', 'Venue Logitude', 'trim|decimal|max_length[20]');
		$this -> form_validation -> set_rules('venueZoom', 'Venue Zoom', 'trim|is_natural|max_length[2]');
		$this -> form_validation -> set_rules('email', 'e-mail', 'trim|required|valid_email|max_length[21845]');
		return $this -> form_validation -> run();
	}

	private function _save($method='html', $event = null) {

		$this -> load -> model('EventModel');
		$e = $this -> EventModel -> newEvent($this -> input -> post(NULL, TRUE));

		if(!$this -> _validateForm()) {
			$this -> _showEventForm($e, $method);
			return false;
		}

		if($event == null) {
			$e -> log("Create event");
			$e -> insert();

			if($method == 'html') {
				$this -> _setMessage('Submitted your party for approval. You will get on e-mail when approved.');
				redirect('/');
			} else {
				echo 'Submitted your party for approval. You will get on e-mail when approved.';
			}
			$this -> _mailSubmit($e);
		} else {
			// update
			$e -> id = $event -> id;
			$e -> editCode = $event -> editCode;
			$e -> log = $event -> log;
			$e -> status = $event -> status; // Status should not change when editing

      $e -> log("Update event");
			$e -> update();

			// Delete cache when accepted & recent
			if($e -> status == 'accepted' && strtotime(str_replace('/', '-', $e -> date)) > strtotime(date('Y-m-d'))) {
				$this -> output -> delete_cache('/');
				$this -> output -> delete_cache('/events');
			}
			$this -> output -> delete_cache('/events/show/'.$e -> id);

			if($method == 'html') {
				$this -> _setMessage('Successfully updated the event.');
				$this -> _showEventForm($e);
			} else {
				echo 'Successfully updated the event.';
			}
		}
	}

	public function date_check($str)
	{
	    if (1 !== preg_match('/^([0-9]|[0-2][0-9]|3[0-1])([-]|[\/])([0-9]|0[0-9]|1[0-2])([-]|[\/])20[0-9]{2}$/', $str) && $str != '')
	    {
	        $this -> form_validation -> set_message('date_check', 'The %s field is not valid date!');
	        return FALSE;
	    }
	    else
	    {
	        return TRUE;
	    }
	}
	public function image_url_check($str)
	{
	    if (1 !== preg_match('/^https?:\/\/.+(\.png|\.jpg|\.jpeg|\.gif|\.tif|\.tiff){1}$/', $str) && $str != '')
	    {
	        $this->form_validation->set_message('image_url_check', 'The %s field is not valid image url!');
	        return FALSE;
	    }
	    else
	    {
	        return TRUE;
	    }
	}
	public function date_in_future_check($str)
	{
	    if (strtotime(str_replace('/', '-', $str)) < strtotime(date('Y-m-d')) && $str != '')
	    {
	        $this->form_validation->set_message('date_in_future_check', 'The %s field is not a date in the future!');
	        return FALSE;
	    }
	    else
	    {
	        return TRUE;
	    }
	}
	public function time_check($str)
	{
	    if (1 !== preg_match('/^([0-9]|0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9])$/', $str) && $str != '')
	    {
	        $this->form_validation->set_message('time_check', 'The %s field is not valid time!');
	        return FALSE;
	    }
	    else
	    {
	        return TRUE;
	    }
	}

	public function _mailSubmit($e) {
        mail ( $e -> email , 'Event ready for processing' ,
             "Dear organizer,

Thank you for submitting your new event {$e -> name} !

The event is being prepared for processing. Once the processing is completed you should receive a confirmation email with instructions to adapt or cancel the event if required.

Thank you for using Cares Deeply!

The Cares Deeply Team
info@caresdeeply.be", 'From: info@caresdeeply.be'

             );
	}
	public function _mailAccepted($e) {
        mail ( $e -> email , 'Event accepted' ,
             "Dear organizer,

Your event {$e -> name} was processed and is now successfully approved.
You are added to the CaresDeeply Scoreboard or gained additional points on your account. Congratulations!

Follow this link to access the event specifications: http://www.caresdeeply.be/events/edit/{$e->id}/{$e->editCode} . Do not share this link!

You can see your event on our website: http://www.caresdeeply.be/events/show/{$e->id}

The Cares Deeply Team
info@caresdeeply.be", 'From: info@caresdeeply.be'

             );
	}
	public function _mailRejected($e) {
        mail ( $e -> email , 'Event rejected' ,
             "Dear organizer,

Your event {$e -> name} was processed and is rejected.
Please try harder next time.

Some considerations:
- Free toilet
- Lower your entrance fee
- Cheaper drinks
- Bigger soundsystem

Thank you for using Cares Deeply!

The Cares Deeply Team
info@caresdeeply.be", 'From: info@caresdeeply.be'

             );
	}

	public function delete() {
		$this -> _requireLogin();
		// delete here
		$this -> agenda();
	}
}
