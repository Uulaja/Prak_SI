<?php
include '/laragon/www/Prak_SI/config.php';

$sql = "SELECT * FROM alternatif";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Nama Alternatif</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["idalternatif"]."</td><td>".$row["nmalternatif"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>