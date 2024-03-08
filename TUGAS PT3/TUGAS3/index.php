<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="">
        MasukanNilai:
        <input type="text" name="input1"><br><br>
        <input type="submit" value="Proses">
    </form>
    <?php
    if (isset($_POST['input1'])) {
        $nilai = intval($_POST['input1']);
        if ($nilai >= 80)
            printf("anda lulus dengan mendapatkan grade A");
        elseif ($nilai >= 70)
            printf("anda lulus dengan mendapatkan grade B");
        elseif ($nilai >= 60)
            printf("anda lulus dengan mendapatkan grade C");
        elseif ($nilai >= 50)
            printf("anda tidak lulus, grade D");
        else
            printf("anda tidak lulus, grade E");
        ;
    }
    ?>
</body>

</html>