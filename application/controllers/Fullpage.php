<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fullpage extends CI_Controller {

	public $bodyData = [
		'javascripts' => ['https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js'],
		'css' => ['https://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,500,700|Droid+Sans:700','main5.css'],
		'title' => '',
    'fb_img' => 'http://www.caresdeeply.be/img/logo.png',
    'fb_title' => 'Cares Deeply',
    'fb_description' => 'quality - selection / democatic - festivities / brussels',
		'message' => '',
		'logged_in' => false
	];

	protected $firstPage = '/';

	function Fullpage() {
		parent::__construct();
		if(isset($_cookie['lggdn']) && $_cookie['lggdn']=='1')
		// create cookie for menu
			setcookie ('lggdn', '1', strtotime( '+2 hours' ),'/');
	}

	protected function _requireLogin() {
		if(!$this -> tank_auth -> is_logged_in()) {
			$this -> load -> helper('url');
			 redirect('/login/');
		} else {
			setcookie ('lggdn', '1', strtotime( '+2 hours' ),'/');
		}
	}

	protected function _setMessage($message, $type='info') {
		$_SESSION['message'] = $message;
		$_SESSION['message_type'] = $type;
	}

	protected function _getBodyData() {
		return $this -> bodyData;
	}

	protected function _pageTop($title='') {
		$this -> bodyData['title']=$title;
		if(isset($_SESSION['message'])) {
			$this -> bodyData['message'] = $_SESSION['message'];
			unset($_SESSION['message']);
		}
		if(isset($_SESSION['message_type'])) {
			$this -> bodyData['message_type'] = $_SESSION['message_type'];
			unset($_SESSION['message_type']);
		}
		$this -> load -> view('top', $this -> _getBodyData());
	}

	protected function _pageBottom() {
		//$this -> load -> view('modal');
		$this -> load -> view('bottom', $this -> _getBodyData());
	}

	protected function _addCss($css) {
		$this -> bodyData['css'][] = $css;
	}

	protected function _addJavascript($js) {
		$this -> bodyData['javascripts'][] = $js;
	}

	protected function _addJs($js) {
		$this -> _addJavascript($js);
	}
}
