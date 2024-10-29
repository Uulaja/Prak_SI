<?php
include '/laragon/www/Prak_SI/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namakriteria = $_POST['nmakriteria'];

    $sql = "INSERT INTO kriteria (nm_kriteria) VALUES ('$namakriteria')";

    if ($conn->query($sql) === TRUE) {
        echo "Data kriteria berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
