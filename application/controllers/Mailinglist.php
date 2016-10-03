<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(BASEPATH.'../application/validationFunctions.php');
require_once('Fullpage.php');
class Mailinglist extends Fullpage {

	function __construct() {
		parent::__construct();
		$this -> _addJs('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js');
		$this -> _addJs('menu.js');
	}

	public function index() {
		$this -> _subscribeForm();
	}


	public function subscribe($method='html') {

		$email = $this -> input -> post('email', TRUE);

		if(empty($email)) {
			if($method == 'html') $this -> _subscribeForm();
			else echo '{"error": "E-mailaddress can\'t be empty."}';

		} else if(!isValidEmail($email)) {
			if($method == 'html') $this -> _subscribeForm();
			else echo '{"error": "This is not a valid e-mailaddress."}';
				$errors[] = "This is not a valid e-mailaddress.";
		} else {
			$this -> load -> model('MailinglistModel');
			$mailinglist = $this -> MailinglistModel -> get($email);

			if($mailinglist) {
				if($method == 'html') $this -> _subscribeForm($email, false, 'This e-mailaddress is already subscribed.');
				else echo '{"error": "This e-mailaddress is already subscribed."}';
			} else {
				$this -> MailinglistModel -> insert($email);
				if($method == 'html') $this -> _subscribeForm($email, 'Successfully suscribed to mailinglist.');
				else echo '{"success": "Successfully subscribed to mailinglist."}';
			}
		}
	}

	public function unsubscribe($email='') {
		if(empty($email)) {
			$email = $this -> input -> post('email', TRUE);
		}

		if(empty($email)) {
			$this -> _unsubscribeForm();
		} else {
			$this -> load -> model('MailinglistModel');
			$mailinglist = $this -> MailinglistModel -> get($email);

			 if($mailinglist) {
				$this -> MailinglistModel -> delete($email);
				$this -> _subscribeForm($email, 'Successfully unsubscribed from the mailinglist.');
			} else {
				$this -> _unsubscribeForm($email, 'E-mail not found');
			}
		}
	}

	private function _subscribeForm($email='', $success = false, $error = false) {
		$data['email'] = $email;
		$data['scribe'] = 'subscribe';
		$this -> _pageTop('Subscribe to mailinglist');
		$this -> _scribeForm($data, $success, $error);
		$this -> _pageBottom();
	}

	private function _unsubscribeForm($email='', $success = false, $error = false) {
		$data['email'] = $email;
		$data['scribe'] = 'unsubscribe';
		$this -> _pageTop('Unsubscribe from mailinglist');
		$this -> _scribeForm($data, $success, $error);
		$this -> _pageBottom();
	}

	private function _scribeForm($data, $success = false, $error = false) {
		$data['success'] = $success;
		$data['error'] = $error;
		$this -> load -> helper('form');
		$this -> load -> view('scribe', $data);
	}



}
