<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//require_once(BASEPATH.'../application/validationFunctions.php');
require_once('Fullpage.php');
class Menu extends Fullpage {

	function __construct() {
      parent::__construct();
  }

	public function index() {
		if(!$this -> tank_auth -> is_logged_in()) {
			$this -> output -> set_status_header('401');
		} else {
			$this -> bodyData['menu'] = [
				['name' => 'Events', 'url' => 'events/unknown'],
				['name' => 'Venues', 'url' => 'venues'],
				['name' => 'Genres', 'url' => 'genres'],
				['name' => 'Account', 'menu' =>
					[
						['name' => 'Change password', 'url' => 'auth/change_password'],
						['name' => 'Logout', 'url' => 'auth/logout']
					]
				]
			];

			$this -> load -> view('menu', $this -> bodyData);
		}
	}

}
