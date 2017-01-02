<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("MYSQL_USER");
$dbpwd = getenv("MYSQL_PASSWORD");
$dbname = getenv("MYSQL_DATABASE");

$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database");
	
	$query = mysql_query("SELECT * from loadtable");
$values = "";
while($row = mysql_fetch_assoc($query))
{
    $value1 = $row['id'];
    $value2 = $row['name'];
    $value3 = $row['number'];
    $value4 = $row['email'];

    //notice the '.' below.
    $values .= "<tr><td>".$value1."</td><td>".$value2."</td><td>".$value3."</td><td>".$value4."</td></tr>";
}
echo $values;
echo "welcome";
	
}
$connection->close();
?>