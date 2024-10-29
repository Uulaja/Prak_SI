<!DOCTYPE html>
<html lang = 'en'>

<head>
    <meta charset = 'UTF-8'>
    <meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
    <title>Form Kriteria</title>
    <link rel = 'stylesheet' href = '/css/style.css'>
</head>
<body>
<header>
    <h1>Form Kriteria</h1>
</header>
<div class = "container">
    <form action="/inserts/insertkriteria.php" method = "post">
        <label for = "nmkriteria">Nama kriteria:</label>
        <input type = "text" id = "nmkriteria" name = "nmkritreia" required>
        <input type="submit" value="Submit">
    </form>
</div>    
</body>
</html>