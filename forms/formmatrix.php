<!DOCTYPE html>
<html lang = 'en'>

<head>
    <meta charset = 'UTF-8'>
    <meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
    <title>Form Bobot</title>
    <link rel = 'stylesheet' href = '/css/style.css'>
</head>
<body>
<header>
    <h1>Form matrixkeputusan</h1>
</header>
<div class = "container">
    <form action="/inserts/insertmatrix.php" method = "post">
        <label for = "idalternatif">id_alternatif:</label>
        <input type = "number" id = "idalternatif" name = "idalternatif" required>
        <label for = "idbobot">id_bobot:</label>
        <input type = "number" id = "idbobot" name = "idbobot" required>
        <label for = "idskala">id_skala:</label>
        <input type = "number" id = "idskala" name = "idskala" required>
        <input type="submit" value="Submit">
    </form>
</div>    
</body>
</html>