<?php
//menjalankan session : selalu diletakkan diawal
session_start();
if (Isset($_SESSION['level']) && isset($_SESSION['username'])) {
    //ini adalah halaman level user
    if ($_SESSION['level'] == "user" ) {
        echo "<h3>Ini adalah halaman user</h3>";
        echo "Selamat datang : <b>" . $_SESSION['username'] . "</b><br>";
        echo "Level anda sebagai : <b>" . $_SESSION['level'] . "</b><br>";
        echo "Isi menu menu user disini<br>";
        echo "<a href='logout.php'>Logout</a>";
    }
    else {
        echo "Anda belum terdaftar sebagasi user";
    }
}
if (!isset($_SESSION['level'])) {
    echo "Anda tidak boleh mengakses halaman ini tanpa : ";
    echo "<a href='login.php'>Login</a>";
    echo "<a href='register.php>Belum punya akun?</a>";
}
?>