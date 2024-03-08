<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Menentukanbilanganganjil/genap</h3>
<form method="post"action="">
MasukanNilai:
<input type="text" name="input1"><br><br>
<input type="submit"value="Proses">
</form>
<?php
if(isset($_POST['input1']))
{
$nilai=intval($_POST['input1']);
if($nilai%2==0)
printf("$nilaimerupakanbilanggenap");
else
printf("$nilaimerupakanbilangganjil");;
}
?>
</body>
</html>