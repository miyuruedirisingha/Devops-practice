<?php
class DbConnector
{
    private string $host = 'db'; // Use 'localhost' for XAMPP, 'db' for Docker
	private string $user = 'root';
	private string $pass = '';
	private string $dbname = 'login';

	
	private static ?mysqli $connection = null;

	private function __construct() {}

	public static function getConnection(): mysqli
	{
		if (self::$connection === null) {
			$instance = new self();
			$conn = new mysqli($instance->host, $instance->user, $instance->pass, $instance->dbname);
			if ($conn->connect_error) {
				die('Failed to connect to database: ' . $conn->connect_error);
			}
			$conn->set_charset('utf8mb4');
			self::$connection = $conn;
		}

		return self::$connection;
	}
}
?>