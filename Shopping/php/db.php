<?php

class CreateDb{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $conn;


    // class constructor
    public function __construct(
        $dbname = "Storedb",
        $tablename = "Productdb",
        $servername = "localhost",
        $username = "root",
        $password = ""
    ) {
        $this->dbname = $dbname;
        $this->tablename = $tablename;
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;

        // create connection
        $this->conn = mysqli_connect($servername, $username, $password);

        // Check connection
        if (!$this->conn) {
            die("Connection failed:" .mysqli_connect_error());
        } 

        // query
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";


        // execute query
        if (mysqli_query($this->conn, $sql)) {
            $this->conn = mysqli_connect($servername, $username, $password, $dbname);

            // sql to create new table
            $sql = "CREATE TABLE IF NOT EXISTS $tablename
            (
                id INT(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                product_name VARCHAR(255) NOT NULL,
                product_price FLOAT,
                product_image VARCHAR(255)
            );";

            if (!mysqli_query($this->conn, $sql)) {
                echo "Error creating table: " .mysqli_error($this->conn);
            }

        } else {
            return false;
        }


    }

    
}