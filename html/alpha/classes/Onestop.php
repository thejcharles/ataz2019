<?php
class Onestop {
	public function fetch_all() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM onestops");
		$query->execute();

		return $query->fetchAll();
	}

	public function fetch_all_by_name() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM onestops ORDER BY name ASC");
		$query->execute();

		return $query->fetchAll();
	}

	public function fetch_all_city() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM onestops ORDER BY city ASC");
		$query->execute();

		return $query->fetchAll();
	}

	public function fetch_all_county() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM onestops ORDER BY county, city ASC");
		$query->execute();

		return $query->fetchAll();
	}


	public function fetch_at_bvi() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM bvi_AT");
		$query->execute();

		return $query->fetchAll();
	}

		public function fetch_at_dhh() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM dhh_AT");
		$query->execute();

		return $query->fetchAll();
	}


	public function fetch_data($id){
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM onestops WHERE id = ?");
		$query->bindValue(1, $id);
		$query->execute();

		return $query->fetch();
	}
}