<?php
include 'laragon/www/Prak_Si/config.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $valuelskala = $_POST['vlskala'];
    $namakriteria = $_POST['nmkriteria'];

    $sql = "INSERT INTO skala (value,keterangan) VALUES ('$valueskala', '$namakriteria')";

    if($conn->query($sql)== TRUE){
        echo "Data Bobot berhasil ditambahkan";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>