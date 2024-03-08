<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaan IF</title>
</head>

<body>
    <form method="post" action="">
        Jumlah_Pembelian:
        <input type="text" name="input1"><br><br>
        <input type="submit" value="TentukanDiskon">
    </form>
    <?php
    $totalbeli = $_POST['input1'];
    if (isset($totalbeli)) {
        $totalbeli = intval($totalbeli);
        $pot = 0;
        if ($totalbeli >= 200000)
            $pot = 0.1;
        elseif ($totalbeli >= 100000)
            $pot = 0.05;
        else
            $pot = 0.01;
        $pot = $pot * $totalbeli;
        printf("JumlahPembelian=%s<br>", $totalbeli);
        printf("Diskon =%s<br>", $pot);
        printf("Pembayaran=%s<br>", $totalbeli - $pot);
    }
    ?>
</body>
</html>