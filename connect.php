<?php

class database {
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "testgmaps";
    var $koneksi;


    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }


    function show_hotel()
    {
        $data = mysqli_query($this->koneksi, "SELECT * FROM hotel");
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }
}

?>