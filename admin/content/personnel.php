<?php
include_once '../includes/dbconnect.php';

if (!isset($_SESSION['usr_id'])) { 
    header("Location: login.php");
}?>
<h2>Personnel</h2>
<?php

    echo "<table class=\"table table-hover\">";
    echo "<thead><tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>Phone</th>";
    echo "<th>On Call</th>";
    echo "</tr></thead><tbody>";

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["phone"] . "</td>";
            echo "<td>" . $row["on_call"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td>No Results</td></tr>";
    }
    echo "</tbody></table>";

?>
