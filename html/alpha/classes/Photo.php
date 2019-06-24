<?php
class Photo {
	public function fetch_all() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM photos");
		$query->execute();

		return $query->fetchAll();
	}

	public function fetch_all_id() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM photos ORDER BY id ASC");
		$query->execute();

		return $query->fetchAll();
	}

	

	public function fetch_data($id){
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM photos WHERE id = ?");
		$query->bindValue(1, $id);
		$query->execute();

		return $query->fetch();
	}



		public function fetch_bvi() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM photos WHERE category = 'bvi' ");
		$query->execute();

		return $query->fetchAll();
	}

		public function fetch_dhh() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM photos WHERE category = 'dhh' ");
		$query->execute();

		return $query->fetchAll();
	}

		public function fetch_ergo() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM photos WHERE category = 'ergo' ");
		$query->execute();

		return $query->fetchAll();
	}

		public function fetch_ld() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM photos WHERE category = 'ld' ");
		$query->execute();

		return $query->fetchAll();
	}

		public function fetch_aac() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM photos WHERE category = 'aac' ");
		$query->execute();

		return $query->fetchAll();
	}
}
