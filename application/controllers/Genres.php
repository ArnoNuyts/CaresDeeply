<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//require_once(BASEPATH.'../application/validationFunctions.php');
require_once('Fullpage.php');
class Genres extends Fullpage {

	private $selected = '';

	function __construct() {
		parent::__construct();
		$this -> _requireLogin();
		$this -> _addJs('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js');
		$this -> _addJs('menu.js');
	}

	protected function _pageTop($title='') {

		parent::_pageTop('Genres');
		$this -> load -> view('submenu', array('selected' =>  $this -> selected,'links' => array('Overview' => base_url().'genres/overview', 'Add new' => base_url().'genres/add')));
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
		$this -> load -> model('GenreModel');
		$data['genres'] = $this -> GenreModel -> getAll();
		$this -> load -> view('genres', $data);
		$this -> _pageBottom();
	}


	public function add() {
		$this -> selected = 'Add new';
		$this -> _showGenreForm();
	}

	public function edit($id='') {
		$this -> load -> model('GenreModel');
		$genre = $this -> GenreModel -> get($id);

		if(!empty($id) AND $genre)
			$this -> _showGenreForm($genre);
		else {
			$this -> _setMessage('Wrong editing url');
			$this -> _overview();
		}
	}

	/*
	public function upload() {

		$genres = array('House', 'Hardcore', 'Hiphop', 'Drum and Bass', 'Acid', 'Jungle', 'Techno', 'Tekno', 'Garage', 'Elektro', 'Dubstep', 'Grime', 'Funk', 'Soul', 'Jazz', 'Disco', 'Goa', 'Trance', 'Electronica', 'Dancehall', 'Reggea', 'Booty', 'Opera', 'Lecture', 'People\'s kitchen', 'Punk', 'Cinema', 'Freeparty', 'Dub', 'Ska', 'World', 'Folk', 'Rhythm and Blues', 'Rock', 'Metal', 'Rap', 'Open Mic', 'Jam', 'Cabaret', 'Noise', 'Bass', 'Ambient');

		foreach($genres as $g) {
			$this -> load -> model('GenreModel');

			$g = $this -> GenreModel -> newGenre(array('name' => $g));
			$g -> insert();
		}
	}
	*/

	public function _showGenreForm($genre = false, $errors = null) {
		$data['genre'] = $genre;
		$data['errors'] = $errors;
		$this -> load -> helper('form');
		$this -> _pageTop();
		$this -> load -> view('genreForm', $data);
		$this -> _pageBottom();
	}

	public function save() {

		$data = $this -> input -> post(NULL, TRUE);

		//Why would you surf to a save page?
		if(!is_array($data) OR count($data) == 0) {
			$this -> _overview();
			return false;
		}

		$this -> load -> model('GenreModel');

		$g = $this -> GenreModel -> newGenre($data);

		// Edit code check + getting old object
		if(!empty($g -> id)) {
			$old = $this -> GenreModel -> get($g -> id);
			if(!$old) {
				$this -> _setMessage('Genre not found.');
				$this -> overview();
				return false;
			}
		}

		$errors = array();
		/* Validation here */
		// Required fields
		foreach(array('name' => 'name') as $var => $field) {
			if(trim($g -> $var) == '')
				$errors[] = "The $field field can't be empty.";
		}

		if(count($errors) > 0) {
			$this -> _showGenreForm($g, $errors);
			return false;
		}

		if(empty($g -> id)) {
			$g -> insert();
			$this -> _setMessage('Succesfully added the genre.');
			$this -> _overview();

		} else {
			// update
			$g -> update();
			$this -> _setMessage('Succesfully update the genre.');
			$this -> _showGenreForm($g, null);
		}
	}


	public function delete($id='') {
		// delete here
		if(empty($id)) {
			$this -> _setMessage('Genre not found.');
			$this -> overview();
			return false;
		}

		$this -> load -> model('GenreModel');

		if(!$g = $this -> GenreModel -> get($id)) {
			$this -> _setMessage('Genre not found.');
			$this -> overview();
			return false;
		}

		$this -> GenreModel -> delete($id);

		$this -> _setMessage('Succesfully deleted the genre.');
		$this -> overview();
	}
}
