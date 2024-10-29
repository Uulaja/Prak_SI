<?php
include '/laragon/www/Prak_SI/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nm_alternatif = $_POST['nmalternatif'];

    $sql = "INSERT INTO alternatif (nmalternatif) VALUES ('$nm_alternatif')";

    if ($conn->query($sql) === TRUE) {
        echo "Data alternatif berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
