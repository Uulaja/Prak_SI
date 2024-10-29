<?php
include '/laragon/www/Prak_SI/config.php';

$sql = "SELECT * FROM bobotskala";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID Bobot</th><th>ID Kriteria</th><th>Value</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id_bobot"]."</td><td>".$row["id_kriteria"]."</td><td>".$row["value"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>