<?php

class Database
{

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM,
    ];
    private $conn;
    private $dbname = "softdrinksorganiser";
    public function connect()
    {
        $this->conn = null;
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($conn->connect_error) {
            die("Connection failed: ") . $conn->connect_error;
        }

        return $conn;
    }
    //here we can send the email or the username
    public function getUserByUsernameAndPassword($username,$password)
    {
        $this->conn = null;
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        $query = "select u.id from users u where ( username='" . $username . "' OR email='" . $username . "') and password = '" . $password . "'";
        $resultQuery      = mysqli_query($conn, $query);
        $numberRows = mysqli_num_rows($resultQuery);
        
        if ($numberRows == 1) {
            echo("i m here");
            $row = $resultQuery->fetch_row();
            $result = $row[0];
            echo($result);
            return $result;
        } else {
             echo("i m here2121");
            return null;
        }
    }
    //here we can send the email or the username
    public function getUserEmailByCredentials($username,$password){
        $this->conn = null;
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        $query = "select u.email from users u where ( username='" . $username . "' OR email='" . $username . "') and password = '" . $password . "'";
        $resultQuery      = mysqli_query($conn, $query);
        $numberRows = mysqli_num_rows($resultQuery);
        
        if ($numberRows == 1) {
            echo("i m here");
            $row = $resultQuery->fetch_row();
            $result = $row[0];
            echo($result);
            return $result;
        } else {
             echo("i m here2121");
            return null;
        }
    }

    public function getUserUsernameByCredentials($username,$password){
        $this->conn = null;
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        $query = "select u.username from users u where ( username='" . $username . "' OR email='" . $username . "') and password = '" . $password . "'";
        $resultQuery      = mysqli_query($conn, $query);
        $numberRows = mysqli_num_rows($resultQuery);
        
        if ($numberRows == 1) {
            echo("i m here");
            $row = $resultQuery->fetch_row();
            $result = $row[0];
            echo($result);
            return $result;
        } else {
             echo("i m here2121");
            return null;
        }
    }

    public function getFullnameByCredentials($username,$password){
         $this->conn = null;
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        $query = "select u.fullname from users u where ( username='" . $username . "' OR email='" . $username . "') and password = '" . $password . "'";
        $resultQuery      = mysqli_query($conn, $query);
        $numberRows = mysqli_num_rows($resultQuery);
        
        if ($numberRows == 1) {
            echo("i m here");
            $row = $resultQuery->fetch_row();
            $result = $row[0];
            echo($result);
            return $result;
        } else {
             echo("i m here2121");
            return null;
        }
    }
}
