<?php
//menjalankan session : selalu diletakkan diawal
session_start();
//menghapus session userrname dan level
unset($_SESSION['username']);
unset($_SESSION['level']);
//menghapus semua session dari browser
echo "<h1>Anda telah Logout</h1>";
echo "<p><a href='login.php'>Login</a> kembali</p>";
?>