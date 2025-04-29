<html>
<body>
<h1>Test MariaDB</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error)
{
    echo "<p>Connection failed: " . $conn->connect_error . "</p>\n";
}
else
{
    echo "<p>Connected successfully<p>\n";
    $result = $conn->query("SHOW DATABASES");
    if ($result->num_rows > 0)
    {
		echo "<p>Databases:</p>\n";
        echo "<table>\n";
        while($row = $result->fetch_assoc())
        {
			echo "<tr>\n";
            echo "<td>{$row["Database"]}</td>\n";
			echo "</tr>\n";
		}
        echo "</table>\n";
    }
}
?>
</body>
</html>
