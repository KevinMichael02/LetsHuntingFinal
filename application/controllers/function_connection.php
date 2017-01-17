<?php
    session_start();
    
    
    function getConnection(){
        $servername ="127.0.0.1";
        $username = "root";
        $password = "";
        $database = "ukm_photo";
		$conn = new mysqli($servername, $username, $password,$database);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		return $conn;
	}
    function alert($msg){
        echo "<script>";
        echo "alert('$msg')";
        echo "</script>";
    }
    function pindah($url){
        echo "<script>";
        echo "window.location='$url'";
        echo "</script>";
    }    
?>