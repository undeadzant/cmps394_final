<?php
// include_once '../includes/dbconnect.php';

if (!isset($_SESSION['usr_id'])) { 
    header("Location: login.php");
}?>
<h2>Emergency Issues</h2>
<?php

    echo "<table class=\"table table-hover\">";
    echo "<thead><tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Issue Type</th>";
    echo "<th>Issue</th>";
    echo "<th>Lat</th>";
    echo "<th>Long</th>";
    echo "<th>Created</th>";
    echo "</tr></thead><tbody>";

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["issue_type"] . "</td>";
            echo "<td>" . $row["issue"] . "</td>";
            echo "<td>" . $row["X(location)"] . "</td>";
            echo "<td>" . $row["Y(location)"] . "</td>";
            echo "<td>" . $row["created_at"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td>No Results</td></tr>";
    }
    echo "</tbody></table>";

?>
