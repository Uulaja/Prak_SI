<?php
include '/laragon/www/Prak_SI/config.php';

$sql = "SELECT * FROM kriteria";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Nama Kriteria</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id_kriteria"]."</td><td>".$row["nm_kriteria"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>