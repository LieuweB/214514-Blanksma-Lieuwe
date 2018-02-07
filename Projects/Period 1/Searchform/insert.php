<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "searchfrom";

$con = mysqli_connect($server, $username, $password, $dbname);

if(!$con)
{
    echo 'not connected to server';
}



if(!mysqli_select_db($con,'searchfrom'))
{
   echo 'Database Not selected';
}


$Information = $_POST ['Information'];
$Datum = $_POST ['Datum'];

$sql = "INSERT INTO textdb(Information, Datum) VALUES('$Information','$Datum') ";

if (!mysqli_query($con, $sql))
{
   echo 'Not Inserted';
}



else
{
  echo 'inserted';
}


header("refresh:2; url=datatobase.html");

?>
