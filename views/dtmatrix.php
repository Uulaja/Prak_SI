<?php
include '/laragon/www/Prak_SI/config.php';

$sql = "SELECT * FROM matrixkeputusan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID Nilai</th><th>ID Alternatif</th><th>ID Bobot</th><th>ID Skala</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id_nilai"]."</td><td>".$row["idalternatif"]."</td><td>".$row["id_bobot"]."</td><td>".$row["id_skala"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>