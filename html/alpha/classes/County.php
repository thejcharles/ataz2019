<?php
class County {
	public function fetch_all() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM county");
		$query->execute();

		return $query->fetchAll();
	}

}