<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
</head>
<body>

<h2>Formulir Buku Tamu</h2>

<form action="process_form.php" method="post">
    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama"><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>

    <label for="komentar">Komentar:</label><br>
    <textarea id="komentar" name="komentar" rows="4" cols="50"></textarea><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
