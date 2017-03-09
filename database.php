<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="my";
	   $firstname=$_POST['firstname'];
	   $email=$_POST['email'];
	   $passwd=$_POST['passwd'];
	   $birthDate=$_POST['birthDate'];
	   $country=$_POST['country'];
	   $gender=$_POST['gender'];
	   echo $firstname;
	   echo "<br>";
	   echo $email;
	   echo "<br>";
	   echo $passwd;
	   echo "<br>";
	   echo $birthDate;
       echo "<br>";   
	   echo $country;
	   echo "<br>";
	   echo $gender;
	   echo "<br>";
	$new=new mysqli($servername,$username,$password,$dbname);
	if ($new->connect_error) {
    die("Connection failed: " . $new->connect_error);
	} 
	/*$sql = "CREATE TABLE singup 
			(
				id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
				firstname VARCHAR(30) NOT NULL,
				email VARCHAR(50),
				password VARCHAR(50),
				birthDate INT(20),
				country VARCHAR(25),
				gender VARCHAR(10),
				reg_date TIMESTAMP
			)";*/
	$sql = "INSERT INTO singup(firstname, email, password, birthDate,country, gender) VALUES ('$firstname','$email','$passwd','$birthDate','$country','$gender')";		
	if ($new->query($sql) === TRUE) {
			echo "Table MyGuests created successfully";
		}
		else {
			echo "Error creating table: " . $new->error;
		}
		

		$new->close();

?>