<?php
include "src/lib/myDb.php";
class User
{
	private string $_id;
	private string $_name;
	private string $_lastName;
	private string $_email;
	private string $_phone;
	private string $_birthDay;

	public function __construct(string $name, string $lastName, string $email, string $phone, string $birthDay)
	{
		$this->_id = uniqid();
		$this->_name = $name;
		$this->_lastName = $lastName;
		$this->_email = $email;
		$this->_phone = $phone;
		$this->_birthDay = $birthDay;
	}

	public function createUser($id, $name, $lastName, $email, $phone, $birthDay){
		$servername = "localhost";
		$database = "leader";
		$username = "leader";
		$password = "root";

		$conn = mysqli_connect($servername, $username, $password, $database);

		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		$sql = $conn->query("INSERT INTO users(id, name, last_name, email, phone_numbers, birth_day) VALUES('$id', '$name', '$lastName', '$email', '$phone', '$birthDay')");
		return $sql;

	}
	public function getId(): string
	{
		return $this->_id;
	}
	public function getName(): string
	{
		return $this->_name;
	}
	public function getLastName(): string
	{
		return $this->_lastName;
	}
	public function getEmail(): string
	{
		return $this->_email;
	}
	public function getPhone(): string
	{
		return $this->_phone;
	}
	public function getBirthDay(): string
	{
		return $this->_birthDay;
	}

	public function setName(string $name): void
	{
		$this->_name = $name;
	}
	public function setLastName(string $lastName): void
	{
		$this->_lastName = $lastName;
	}
	public function setEmail(string $email): void
	{
		$this->_email = $email;
	}
	public function setPhone(string $phone): void
	{
		$this->_phone = $phone;
	}
	public function setBirthDay(string $birthDay): void
	{
		$this->_birthDay = $birthDay;
	}
	public function __destruct()
	{
	}
}
