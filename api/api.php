<?php
	
	class Api {

		function __construct() {
			header('Content-Type: application/json');
			header('Access-Control-Allow-Origin: *');
		}

		function conn() {
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "jsnow_vlookup";
			$conn = new mysqli($servername, $username, $password, $dbname);

			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			return $conn;
		}

		function getUser($limit = 5, $offset = 0) {
			$conn = $this->conn();
			$sql = "SELECT id, username, password, fullname FROM users LIMIT $limit OFFSET $offset";
			$result = $conn->query($sql);

			$callback = [];
			if ($result->num_rows > 0) {
			  while($row = $result->fetch_assoc()) {
			    array_push($callback, $row);
			  }
			}
			$conn->close();
			return $callback;
		}
		function getTotalUser() {
			$conn = $this->conn();
			$sql = "SELECT COUNT(*) AS count FROM users";
			$result = $conn->query($sql);
			$count = 0;

			if ($result->num_rows > 0) {
			  while($row = $result->fetch_assoc()) {
			    $count = $row['count'];
			  }
			}
			$conn->close();
			return $count;
		}

		function getUserBySearch($limit = 5, $offset = 0, $searchValue = '') {
			$conn = $this->conn();
			$sql = "
				SELECT id, username, password, fullname 
				FROM users 
				WHERE username LIKE '%$searchValue%' 
				OR password LIKE '%$searchValue%' 
				OR fullname LIKE '%$searchValue%' 
				LIMIT $limit OFFSET $offset
			";
			$result = $conn->query($sql);

			$callback = [];
			if ($result->num_rows > 0) {
			  while($row = $result->fetch_assoc()) {
			    array_push($callback, $row);
			  }
			}
			$conn->close();
			return $callback;
		}
		function getTotalUserBySearch($searchValue = '') {
			$conn = $this->conn();
			$sql = "
				SELECT COUNT(*) AS count FROM users 
				WHERE username LIKE '%$searchValue%' 
				OR password LIKE '%$searchValue%' 
				OR fullname LIKE '%$searchValue%' 
			";
			$result = $conn->query($sql);
			$count = 0;

			if ($result->num_rows > 0) {
			  while($row = $result->fetch_assoc()) {
			    $count = $row['count'];
			  }
			}
			$conn->close();
			return $count;
		}

	}
	$api = new Api();

	$post = json_decode(file_get_contents("php://input"));
	if ($post->searchValue) {
        $data = $api->getUserBySearch($post->limit, $post->offset, $post->searchValue);
        $total = $api->getTotalUserBySearch($post->searchValue);
    } else {
        $data = $api->getUser($post->limit, $post->offset);
        $total = $api->getTotalUser();
    }

    echo json_encode([
        'total' => $total,
        'data' => $data
    ]);


