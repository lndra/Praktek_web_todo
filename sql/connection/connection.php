<?php
//OFFLINE ONLY
class Database{

  private $host;
  private $db_name;
  private $username;
  private $password;
  public $conn;

  function __construct() {
    $this->host     ='localhost';
    $this->username = 'root';
    $this->password = '';
    $this->db_name    = 'db_pekerjaan_rumah';

  }
  // get the database connection
  public function getConnection(){

    $this->conn = null;

    try{
      $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
      $this->conn->exec("set names utf8");
    }catch(PDOException $exception){
      echo "Connection error: " . $exception->getMessage();
    }
    return $this->conn;
  }
}
?>
