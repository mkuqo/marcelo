<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if(! $conn ) {
    die('Could not connect: ' . mysql_error());
}

$sql = 'SELECT * FROM accounts';
mysql_select_db('online_banking');
$retval = mysql_query( $sql, $conn );

if(! $retval ) {
    die('Could not get data: ' . mysql_error());
}

while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
    echo $row['account_type']."\n";
    echo $row['minbalance'];
    echo "\n";
}

echo "Fetched data successfully\n";

mysql_close($conn);
?>
