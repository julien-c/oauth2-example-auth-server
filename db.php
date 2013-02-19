<?php

class DB {

	private $conn;
	private $statement;

	function __construct()
	{
		$this->conn = new PDO('mysql:host=localhost;dbname=oauth-test', 'root', 'root');
	}

	function query($sql = '', $params = array())
	{
		$statement = $this->conn->prepare($sql);
		$statement->setFetchMode(PDO::FETCH_OBJ);
		$statement->execute($params);
		return $statement;
	}

	public function getInsertId()
	{
		return (int) $this->conn->lastInsertId();
	}

	function setup()
	{
		/*
		INSERT INTO oauth_clients (`id`, `secret`, `name`, `auto_approve`) VALUE ('I6Lh72kTItE6y29Ig607N74M7i21oyTo', 'dswREHV2YJjF7iL5Zr5ETEFBwGwDQYjQ', 'Hello World App', 0);

		INSERT INTO oauth_client_endpoints (`client_id`, `redirect_uri`) VALUE ('I6Lh72kTItE6y29Ig607N74M7i21oyTo', 'http://client.dev/signin/redirect');
		 */
	}

}