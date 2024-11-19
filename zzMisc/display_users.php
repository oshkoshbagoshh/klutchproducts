<?php
// TODO: change to using .env file
// displays users into an HTML table

// Connection info
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="rootroot";
$dbname="klutchproducts";

$conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());



// query the users

// Assuming you've already established a connection $conn

$sql = "SELECT UserID, Username, DisplayName, Email, PasswordHash, Registered, Roles FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "UserID: " . $row["UserID"].
         " - Username: " . $row["Username"].
         " - Display Name: " . $row["DisplayName"].
         " - Email: " . $row["Email"].
         "  - PasswordHash" . $row["PasswordHash"]. // TODO: actually hash this
         " - Registered: " . $row["Registered"].
         " - Roles: " . $row["Roles"]. "<br>";
        }
} else {
    echo "0 results";
}



// Display results in table

echo "<table border='1'>";
echo "<tr><th>ID</th><th>User Login</th><th>Display Name</th><th>User Email</th><th>Pass</th><th>User Registered</th><th>Roles</th></tr>";

if ( $result->num_rows > 0) {
    // Output data of each row in table rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['UserID']) . "</td>";
        echo "<td>" . htmlspecialchars($row['Username']) . "</td>";
        echo "<td>" . htmlspecialchars($row['DisplayName']) . "</td>";
        echo "<td>" . htmlspecialchars($row['Email']) . "</td>";
        echo "<td>" . htmlspecialchars($row['PasswordHash']) . "</td>";
        echo "<td>" . htmlspecialchars($row['Registered']) . "</td>";
        echo "<td>" . htmlspecialchars($row['Roles']) . "</td>";
        echo "</tr>";
    }
}
    else {
        echo "<tr><td colspan='6'> 0 results </td></tr>";
    }
    echo "</table>";


// close the connection
$conn->close();