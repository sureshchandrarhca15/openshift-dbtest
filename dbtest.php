<?php
$dbhost = getenv("EXTERNAL_MYSQL_SERVICE_SERVICE_HOST");
$dbport = getenv("EXTERNAL_MYSQL_SERVICE_SERVICE_PORT");
$dbuser = 'root';
$dbname = 'sampledb';
$dbpwd = 'supersecret';

$connection = mysqli_connect($dbhost.":".$dbport, $dbuser, $dbpwd, $dbname) or die("Error " . mysqli_error($connection));

$query = "SELECT * from users" or die("Error in the consult.." . mysqli_error($connection));

echo "Hello All.. Here is the list of users: <br>";
$rs = $connection->query($query);
while ($row = mysqli_fetch_assoc($rs)) {
    echo "User Id: ".$row['user_id'] . " User Name: " . $row['username'] . "<br>";
}
echo "End of the list <br>";

mysqli_close($connection);

?>
