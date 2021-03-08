<?php 
	session_start();


	// connect to database
    // $conn = mysqli_connect("localhost:3306", "root", "root", "blog_php");

    $conn = mysqli_connect("remotemysql.com", "2SVX3vXyzy", "QR8WO3PH9h", "2SVX3vXyzy");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
    //    coming soon...

	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost/blog_rgh/');
?>