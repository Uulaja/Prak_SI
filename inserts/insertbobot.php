<?php
include 'laragon/www/Prak_Si/config.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id_kriteria = $_POST['idkriteria'];
    $vlbobot = $_POST['vlbobot'];

    $sql = "INSERT INTO bobotskala (id_kriteria, value) VALUES ('$id_kriteria', '$vlbobot')";

    if($conn->query($sql)== TRUE){
        echo "Data Bobot berhasil ditambahkan";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>