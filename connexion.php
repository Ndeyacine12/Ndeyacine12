<?php 
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="ranch";
 $conn=new mysqli($servername,$username,$password,$dbname);
 
 if($conn->connect_error){
	 die("Connexion failed:".$conn->connect_error);
	 echo("non connect�" );}
	 
	 ?>