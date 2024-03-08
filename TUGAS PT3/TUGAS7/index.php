<?php
echo "<u>MenuPilihan</u><br>";
echo "[1]Trapesium<br>";
echo "[2]PersegiPanjang<br>";
echo "[3]BujusSangkar<br><br>";
echo "<form method='post'>";
echo "Pilihan<input type='text'name='pilih'size=2>";
echo "<input type='submit'value='kirim'><br>";
if (isset($_POST['pilih'])) {
    $pil = $_POST['pilih'];
    switch ($pil) {
        case 1:
            $atas = 12;
            $bawah = 17;
            $tinggi = 7;
            $luas = ($atas + $bawah) / 2 * $tinggi;
            echo "<br>Mencari Luas Trapesium<br>";
            echo "Garis atas=$atascm<br>";
            echo "Garis bawah=$bawahcm<br>";
            echo "Tinggi=$tinggicm<br>";
            echo "Luas Trapesium=$luascm<sup>2</sup><br>";
            break;
        case 2:
            $panjang1 = 25;
            $lebar1 = 14;
            $luas1 = $panjang1 * $lebar1;
            echo "<br>Mencari Luas PersegiPanjang<br>";
            echo "Panjang=$panjang1 cm<br>";
            echo "Lebar=$lebar1 cm<br>";
            echo "Luas Bujur Sangkar=$luas1 cm<sup>2</sup><br>";
            break;
        case 3:
            $sisi = 12;
            $luas = $sisi * $sisi;
            echo "<br>Mencari Luas Bujur Sangkar<br>";
            echo "Sisi=$sisicm<br>";
            echo "Luas Bujur Sangkar=$luascm<sup>2</sup><br>";
            break;
        default:
            echo "<br><blink>Pilihan anda salah,silakan cobalagi</blink>";
            break;
    }
}

?>