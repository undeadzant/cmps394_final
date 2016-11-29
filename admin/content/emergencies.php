<?php
include_once '../includes/dbconnect.php';

if (!isset($_SESSION['usr_id'])) { 
    header("Location: login.php");
}?>
<h2>Emergency Issues</h2>
<?php
    $sql = "SELECT id, name, issue_type, issue, ST_AsText(location), created_at FROM Issues";
    $result = $conn->query($sql);

    echo "<table class=\"table table-hover\">";
echo "<thead><tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Issue Type</th>";
echo "<th>Issue</th>";
echo "<th>Location</th>";
echo "<th>Created</th>";
echo "</tr></thead><tbody>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["issue_type"] . "</td>";
        echo "<td>" . $row["issue"] . "</td>";
        echo "<td>" . $row["ST_AsText(location)"] . "</td>";
        echo "<td>" . $row["created_at"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td>No Results</td></tr>";
}
echo "</tbody></table>";

$conn->close();

?>
