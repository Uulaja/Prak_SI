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
    <h1>Form Bobot</h1>
</header>
<div class = "container">
    <form action="/inserts/insertbobot.php" method = "post">
        <label for = "idkriteria">ID Kriteria:</label>
        <input type = "number" id = "idkriteria" name = "idkriteria" required>
        <label for = "vlbobot">Value:</label>
        <input type = "text" id = "vlbobot" name = "vlbobot" required>
        <input type="submit" value="Submit">
    </form>
</div>    
</body>
</html>