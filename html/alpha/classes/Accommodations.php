<?php
class Accommodations {
	public function fetch_all() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM accommodations");
		$query->execute();

		return $query->fetchAll();
	}

	public function fetch_ada_edit($id){
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM accommodations WHERE id = ?");
		$query->bindValue(1, $id);
		$query->execute();

		return $query->fetchAll();
	}


	public function fetch_ada($id){
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM accommodations WHERE location_id = ?");
		$query->bindValue(1, $id);
		$query->execute();

		return $query->fetchAll();
	}
}

	
/*

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

		$query = $pdo->prepare("SELECT * FROM accommodations WHERE id = ?");
		$query->bindValue(1, $id);
		$query->execute();

		return $query->fetch();
	}
	*/
