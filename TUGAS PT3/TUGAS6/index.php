<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Hari Ini :
    <?Php
    $namahari = date("l");
    switch ($namahari) {
        case "Sunday";
            print("Minggu");
            print "Waktu untuk istirahat";
            break;
        case "Monday";
            print("Senin<br>");
            print "Meeting awal minggu jam 08.00";
            break;
        case "Tuesday";
            print("Selasa<br>");
            print "Pembukaan Workshop Diklat";
            break;
        case "Wednesday";
            print("Rabu<br>");
            print("Seminar Launchig Window VistadiJHCC");
            break;
        case "Thrusday";
            print("Kamis<br>");
            print "Pertemuan dengan Mahasiswa";
            break;
        case "Friday";
            print("Jum’at<br>");
            print "Jogging bersama";
            break;
        default:
            print("Sabtu<br>");
            print "Survey harga ke Dusit,ManggaDua";
    }
    ?>
</body>

</html>