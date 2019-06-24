<?php
class User {
	private $_db,
			$_data,
			$_sessionName,
			$_cookieName,
			$_isLoggedIn;

	public function __construct ($user = null) {
		$this->_db = DB::getInstance();

		$this->_sessionName = Config::get('session/session_name');
		$this->_cookieName = Config::get('remember/cookie_name');

		if(!$user) {
			if(Session::exists($this->_sessionName)){
				$user = Session::get($this->_sessionName);

				if($this->find($user)) {
					$this->_isLoggedIn = true;
				} else {
					//process logout
				}
			}
		} else {
			$this->find($user);
		}
	}

	public function update($fields = array(), $id = null) {
		if(!$id && $this->isLoggedIn()) {
			$id = $this->data()->id;


		}

		if(!$this->_db->update('users', $id, $fields)) {
			throw new Exception("Error Processing Request.");
			
		}

	}

	public function update_password($fields = array(), $id = null) {
		if(!$id && $this->isLoggedIn()) {
			$id = $data['id'];


		}

		if(!$this->_db->update('users', $id, $fields)) {
			throw new Exception("Error Processing Request.");
			
		}

	}

	public function create($fields = array()) {
		if(!$this->_db->insert('users', $fields)) {
			throw new Exception('There was a problem creating this account.');
		}
	}


		public function createOnestop($fields = array()) {
		if(!$this->_db->onestopInsert('onestops', $fields)) {
			print_r($fields);
			throw new Exception('There was a problem creating this One Stop Location.');
		}
	}


	public function bvi_AT_create($fields = array()) {
		if(!$this->_db->onestopInsert('bvi_AT', $fields)) {
			print_r($fields);
			throw new Exception('There was a problem creating this One Stop Location.');
		}
	}



	public function dhh_AT_create($fields = array()) {
		if(!$this->_db->onestopInsert('dhh_AT', $fields)) {
			print_r($fields);
			throw new Exception('There was a problem creating this One Stop Location.');
		}
	}

			public function createKioskDoc($fields = array()) {
		if(!$this->_db->kioskInsert('kiosk', $fields)) {
			print_r($fields);
			throw new Exception('There was a problem creating this Kiosk entry. Please contact your awesome webmaster :-) ');
		}
	}

		public function updateOnestop($fields = array(), $id = null) {
				$id = escape(Input::get('id'));
		if(!$this->_db->update('onestops', $id, $fields)) {
			throw new Exception("Error Processing Request.");
			
		}

	}



			public function updateKiosk($fields = array(), $id = null) {
				$id = $_POST['id'];
		if(!$this->_db->update('kiosk', $id, $fields)) {
			throw new Exception("Error Processing Request!!!");
			
		}

	}

		public function updateTraining($fields = array(), $id = null) {
				$id = escape(Input::get('id'));
		if(!$this->_db->update('trainings', $id, $fields)) {
			throw new Exception("Sorry. There was an error updating this event.");
			
		}

	}

	public function createTraining($fields = array()) {
		if(!$this->_db->insert('trainings', $fields)) {
			print_r($fields);
			throw new Exception('There was a problem creating this event.');
		}
	}

	public function ada_create($fields = array()) {
		if(!$this->_db->ada_insert('accommodations', $fields)) {
			print_r($fields);
			throw new Exception('There was a problem creating this ADA accommodation.');
		}
	}

	public function ada_update($fields = array(), $id = null) {
				$id = escape(Input::get('id'));
		if(!$this->_db->update('accommodations', $id, $fields)) {
			throw new Exception("Sorry. There was an error updating this event.");
			
		}

	}


	public function find($user = null) {
		if($user) {
			$field = (is_numeric($user)) ? 'id' : 'username';
			$data = $this->_db->get('users', array($field, '=', $user));

			if($data->count()) {
				$this->_data = $data->first();
				return true;
			}
		}
		return false;
	}

	public function find_email($user = null) {
		if($user) {
			$field = (is_numeric($user)) ? 'id' : 'email';
			$data = $this->_db->get('users', array($field, '=', $user));

			if($data->count()) {
				$this->_data = $data->first();
				return true;
			}
		}
		return false;
	}



	public function fetch_id_from_email($email) {
		global $pdo;
		//$email ='charlieballs420@gmail.com';

		$query = $pdo->prepare("SELECT * FROM users WHERE email = ?");
		$query->bindValue(1, $email);
		$query->execute();

		return $query->fetch();
	}



	public function login($username = null, $password = null, $remember = false) {
		$user = $this->find($username);		

		if(!$username && !$password && $this->exists()) {
			Session::put($this->_sessionName, $this->data()->id);
		} else {

		$user = $this->find($username);
		if($user) {		 
			if($this->_data->password === Hash::make($password, $this->_data->salt)) {					
				Session::put($this->_sessionName, $this->data()->id);
				if($remember) {
					$hash = Hash::unique();
					$hashCheck = $this->_db->get('users_session', array('user_id', '=', $this->data()->id));

					if(!$hashCheck->count()){
						$this->_db->insert('users_session', array(
							'user_id' => $this->data()->id,
							'hash' => $hash
							));
					} else {
						$hash = $hashCheck->first()->hash;
					}
					Cookie::put($this->_cookieName, $hash, Config::get('remember/cookie_expiry'));

					}

				
				return true;

		}
	}
}
		return false;

	
	} 

	public function hasPermission($key){
		$group = $this->_db->get('groups', array('id', '=', $this->data()->group)); 
		if($group->count()) {
			$permissions = json_decode($group->first()->permissions, true);
			if($permissions[$key] == true) {
				return true;
			}
		}
		return false;
	}

	public function exists() {
		return (!empty($this->_data)) ? true : false;
	}

	public function logout() {

		$this->_db->delete('users_session', array('user_id', '=', $this->data()->id));

		Session::delete($this->_sessionName);
		Cookie::delete($this->_cookieName);
	}

	public function data() {
			return $this->_data;
		}

	public function isLoggedIn() {
		return $this->_isLoggedIn;
}

	


}