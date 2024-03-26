<!DOCTYPE html>
<html>
<head>
    <title>Menu Materi Pemrograman PHP</title>
</head>
<body>
    <h1>List materi</h1>
    <h3>
    [1]PenggunaanIF <br>
    [2]PenggunaanSWITCH..CASE <br>
    [3]Penggunaan Looping <br>
    [4]PenggunaanArray
    </h3>
  
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Pilih Materi:
        <input type="text" name="materi" placeholder="Masukkan nama materi">
        <br><br>
        Nomor Materi (1-4): <input type="number" name="nomor" min="1" max="4" required>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Proses ketika tombol submit ditekan
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        // Cek apakah nilai 'materi' telah dipilih
        if (isset($_POST['materi']) && isset($_POST['nomor'])) {
            $materi = $_POST['materi'];
            $nomor = $_POST['nomor'];

            // Redirect ke halaman yang sesuai dengan nomor materi
            switch ($nomor) {
                case '1':
                    header("Location: PenggunaanIF.php");
                    break;
                case '2':
                    header("Location: PenggunaanSWITCHCASE.php");
                    break;
                case '3':
                    header("Location: PenggunaanLooping.php");
                    break;
                case '4':
                    header("Location: PenggunaanArray.php");
                    break;
                default:
                    echo "Nomor materi tidak valid.";
                    break;
            }
        } else {
            echo "Silakan pilih materi dan isi nomor materi terlebih dahulu.";
        }
    }
    ?>
</body>
</html>
