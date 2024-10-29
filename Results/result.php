<?php
include '/laragon/www/Prak_SI/config.php';  

$metode = isset($_GET['metode']) ? $_GET['metode'] : 'SAW';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan</title>
    <link rel="stylesheet" href="../css/style.css"> 
</head>
<body>

<header>
    <h1>Hasil Perhitungan - Metode <?php echo $metode; ?></h1>
</header>

<div class="container">
    <?php
    if ($metode == 'SAW') {
        echo "<h2>Matrix Keputusan - SAW</h2>";
        $sql = "SELECT * FROM vmatrixkeputusan";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<table>
                    <thead>
                        <tr>
                            <th>ID Nilai</th>
                            <th>ID Alternatif</th>
                            <th>Nama Alternatif</th>
                            <th>ID Kriteria</th>
                            <th>Nama Kriteria</th>
                            <th>ID Bobot</th>
                            <th>Bobot</th>
                            <th>Nilai</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id_nilai']}</td>
                        <td>{$row['idalternatif']}</td>
                        <td>{$row['nmalternatif']}</td>
                        <td>{$row['id_kriteria']}</td>
                        <td>{$row['nm_kriteria']}</td>
                        <td>{$row['id_bobot']}</td>
                        <td>{$row['value']}</td>
                        <td>{$row['nilai']}</td>
                        <td>{$row['keterangan']}</td>
                      </tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "Data Matrix Keputusan tidak ditemukan untuk SAW.";
        }

        echo "<h2>Normalisasi - SAW</h2>";
        $sql = "SELECT * FROM vnormalisasi";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>
                    <thead>
                        <tr>
                            <th>ID Nilai</th>
                            <th>ID Alternatif</th>
                            <th>Nama Alternatif</th>
                            <th>ID Kriteria</th>
                            <th>Nama Kriteria</th>
                            <th>ID Bobot</th>
                            <th>Bobot</th>
                            <th>Nilai</th>
                            <th>Keterangan</th>
                            <th>Normalisasi</th>
                        </tr>
                    </thead>
                    <tbody>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id_nilai']}</td>
                        <td>{$row['idalternatif']}</td>
                        <td>{$row['nmalternatif']}</td>
                        <td>{$row['id_kriteria']}</td>
                        <td>{$row['nm_kriteria']}</td>
                        <td>{$row['id_bobot']}</td>
                        <td>{$row['value']}</td>
                        <td>{$row['nilai']}</td>
                        <td>{$row['keterangan']}</td>
                        <td>{$row['normalisasi']}</td>
                      </tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "Data Normalisasi tidak ditemukan untuk SAW.";
        }

        echo "<h2>Perangkingan - SAW</h2>";
        $sql = "SELECT * FROM vranking";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>
                    <thead>
                        <tr>
                            <th>ID Alternatif</th>
                            <th>Nama Alternatif</th>
                            <th>Rangking</th>
                        </tr>
                    </thead>
                    <tbody>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['idalternatif']}</td>
                        <td>{$row['nmalternatif']}</td>
                        <td>{$row['rangking']}</td>
                      </tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "Data Perangkingan tidak ditemukan untuk SAW.";
        }
    } elseif ($metode == 'WP') {
        echo "<h2>Hasil Perhitungan - WP Jumlah Bobot</h2>";
        $sql = "SELECT * FROM wp_jumbobot";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>
                    <thead>
                        <tr>
                            <th>Jumlah Bobot</th>
                        </tr>
                    </thead>
                    <tbody>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['jumlah']}</td>
                      </tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "Data tidak ditemukan untuk WP.";
        }

        echo "<h2>Hasil Perhitungan - WP Nilai S</h2>";
        $sql = "SELECT * FROM wp_nilais";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>
                    <thead>
                        <tr>
                            <th>ID Alternatif</th>
                            <th>Nama Alternatif</th>
                            <th>Nilai S</th>
                        </tr>
                    </thead>
                    <tbody>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['idalternatif']}</td>
                        <td>{$row['nmalternatif']}</td>
                        <td>{$row['nilaiS']}</td>
                      </tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "Data Nilai S tidak ditemukan untuk WP.";
        }

        echo "<h2>Hasil Perhitungan - WP Nilai V</h2>";
        $sql = "SELECT * FROM wp_nilaiv";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>
                    <thead>
                        <tr>
                            <th>ID Alternatif</th>
                            <th>Nama Alternatif</th>
                            <th>Nilai V</th>
                        </tr>
                    </thead>
                    <tbody>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['idalternatif']}</td>
                        <td>{$row['nmalternatif']}</td>
                        <td>{$row['nilaiv']}</td>
                      </tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "Data Nilai V tidak ditemukan untuk WP.";
        }
    } else {
        echo "<p>Metode yang dipilih tidak valid.</p>";
    }

    $conn->close();
    ?>
</div>


</body>
</html>
