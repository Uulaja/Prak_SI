<?php
include '/laragon/www/Prak_SI/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idalternatif = $_POST['idalternatif'];
    $idbobot = $_POST['idbobot'];
    $idskala= $_POST['idskala'];
    $sql = "INSERT INTO matrixkeputusan (idalternatif, id_bobot, id_skala) VALUES ('$idalternatif', '$idbobot', '$idskala')";

    if ($conn->query($sql) === TRUE) {
        echo "Data kriteria berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
