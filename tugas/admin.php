<?php
//menjalankan sessioon : selalu diletakkan di awal
session_start();
if (isset($_SESSION['level']) && isset($_SESSION['username'])) {

    //Jika level admin akan masuk ke halaman admin.php
    if ($_SESSION['level'] == "admin") {
        echo "<h3>Ini halaman admin</h3>";
        echo "Selamat datang : <b>" . $_SESSION['username'] . "</b><br>";
        echo "Level anda : <b>" . $_SESSION['level'] . "</b><br>";
        echo "<b>Isi menu menu admin disini</b><br>";
        echo "<a href='logout.php'>Logout</a>";
    }

    //jika kondisi level user maka akan diarahkan kehalaman user.php
    else if ($_SESSION['level'] == "user") {
        header('location: user.php');
    }
}
//jika user belum terdaftar maka akan diarahkan ke halaman register.php
if (!isset($_SESSION['level'])){
    echo "Anda tidak boleh mengakses halaman ini tanpa : ";
    echo "<a href='login.php'>Login</a>";
    echo "<a href='register.php>Belum punya akun?</a>";
}

?>