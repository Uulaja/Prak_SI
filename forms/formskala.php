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
    <h1>Form Skala</h1>
</header>
<div class = "container">
    <form action="/inserts/insertskala.php" method = "post">
        <label for = "vlskala">value :</label>
        <input type = "number" id = "vlskala" name = "vlskala" required>
        <label for = "nmketerangan">keterangan:</label>
        <input type = "text" id = "nmketerangan" name = "nmketerangan" required>
        <br>
        <input type="submit" value="Submit">
    </form>
</div>    
</body>
</html>