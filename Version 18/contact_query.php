<?php
include("functions.php");

$dblink = db_connect("contact_data");

// Extra credit
$sql = "SELECT first_name, last_name, email, phone, comments 
        FROM contact_info
        ORDER BY auto_id DESC";

$result = $dblink->query($sql) or
    die("<tr><td colspan='5'>Something went wrong: " . $dblink->error . "</td></tr>");

while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['first_name']) . "</td>";
    echo "<td>" . htmlspecialchars($row['last_name']) . "</td>";
    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
    echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
    echo "<td>" . nl2br(htmlspecialchars($row['comments'])) . "</td>";
    echo "</tr>";
}
?>
