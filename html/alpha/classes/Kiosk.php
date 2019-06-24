<?php
class Kiosk {
	public function fetch_all() {
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM kiosk");
		$query->execute();

		return $query->fetchAll();
	}


	public function fetch_data($id){
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM kiosk WHERE id = ?");
		$query->bindValue(1, $id);
		$query->execute();

		return $query->fetch();
	}


		public function delete_data($id){
		global $pdo;

		$query = $pdo->prepare("DELETE * FROM kiosk WHERE id = ?");
		$query->bindValue(1, $id);
		$query->execute();

		return $query->fetch();
	}
}

