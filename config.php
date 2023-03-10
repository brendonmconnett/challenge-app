<?php
// Connect to database
$host = 'localhost';
$user = 'mubtfezwth';
$password = 'jKR2YyjB22';
$dbname = 'mubtfezwth';
$conn = mysqli_connect($host, $user, $password, $dbname);

// Select a random challenge
$sql = 'SELECT challenge FROM challenges ORDER BY RAND() LIMIT 1';
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$challenge = $row['challenge'];

// Output the challenge
echo $challenge;

// Close database connection
mysqli_close($conn);
?>
