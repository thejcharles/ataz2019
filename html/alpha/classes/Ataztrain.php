<?php
class Ataztrain {
	public function fetch_all() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM trainings");
		$query->execute();

		return $query->fetchAll();
	}

	
	public function fetch_all_date() {
		global $pdo;
		$date ="March 20, 2015";

		$query = $pdo->prepare("SELECT * FROM trainings WHERE dates = $date");
		$query->execute();

		return $query->fetchAll();
	}

	public function fetch_all_county() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM trainings ORDER BY county ASC");
		$query->execute();

		return $query->fetchAll();
	}

	public function fetch_closest() {
		global $pdo;

		$query = $pdo->prepare("SELECT *, ABS( dates - 'march 18, 2015') AS distance FROM trainings ORDER BY distance DESC Limit 3");
		$query->execute();

		return $query->fetchAll();
	}

	public function fetch_data($date){
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM trainings WHERE dates > ? AND event_type = 'RSA' ORDER BY dates ASC, start ASC");
		$query->bindValue(1, $date);
		$query->execute();

		return $query->fetchAll();
	}

		public function fetch_past($date){
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM trainings WHERE dates < ? AND event_type = 'RSA' ORDER BY dates DESC, start ASC");
		$query->bindValue(1, $date);
		$query->execute();

		return $query->fetchAll();
	}

	public function fetch_trainings($date){
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM trainings WHERE dates > ? ORDER BY dates ASC, start ASC");
		$query->bindValue(1, $date);
		$query->execute();

		return $query->fetchAll();
	}

		public function fetch_state($date){
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM trainings WHERE dates > ? AND event_type = 'STATE' ORDER BY dates ASC, start ASC");
		$query->bindValue(1, $date);
		$query->execute();

		return $query->fetchAll();
	}


	public function fetch_id($id){
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM trainings WHERE id = ?");
		$query->bindValue(1, $id);
		$query->execute();

		return $query->fetch();
	}


	public function fetch_kiosk() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM kiosk  ORDER BY list ASC");
		$query->execute();

		return $query->fetchAll();
	}

		public function fetch_kiosk_general() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM kiosk WHERE category = 'general' ORDER BY list ASC");
		$query->execute();

		return $query->fetchAll();
	}

	public function fetch_kiosk_bvi() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM kiosk WHERE category = 'bvi' ORDER BY list ASC");
		$query->execute();

		return $query->fetchAll();
	}

	public function fetch_kiosk_dhh() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM kiosk WHERE category = 'dhh' ORDER BY list ASC");
		$query->execute();

		return $query->fetchAll();
	}

	public function fetch_kiosk_ergo() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM kiosk WHERE category = 'ergo' ORDER BY list ASC");
		$query->execute();

		return $query->fetchAll();
	}

	public function fetch_kiosk_ld() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM kiosk WHERE category = 'ld' ORDER BY list ASC");
		$query->execute();

		return $query->fetchAll();
	}

	public function fetch_kiosk_aac() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM kiosk WHERE category = 'aac' ORDER BY list ASC");
		$query->execute();

		return $query->fetchAll();
	}

			public function fetch_community_general() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM community WHERE category = 'general'");
		$query->execute();

		return $query->fetchAll();
	}

	public function fetch_community_bvi() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM community WHERE category = 'bvi'");
		$query->execute();

		return $query->fetchAll();
	}

	public function fetch_community_dhh() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM community WHERE category = 'dhh'");
		$query->execute();

		return $query->fetchAll();
	}

	public function fetch_community_ergo() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM community WHERE category = 'ergo'");
		$query->execute();

		return $query->fetchAll();
	}

	public function fetch_community_ld() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM community WHERE category = 'ld'");
		$query->execute();

		return $query->fetchAll();
	}

	public function fetch_community_aac() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM community WHERE category = 'aac'");
		$query->execute();

		return $query->fetchAll();
	}


}