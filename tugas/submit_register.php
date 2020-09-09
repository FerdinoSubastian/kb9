<?php
$username = $_POST['username'];
$password1 = $_POST['pass1'];
$password2 = $_POST['pass2'];
$level = "user"; //otomatis setiap register dianggap level user

if ($password1 == $password2){
    include "koneksi.php";

    //perlu dibuat sebarang pengacak
    $pengacak = "muehehe";

    //menenkripsi password dengan md5() dan pengacak
    $passmd = md5($pengacak . md5($password1));

    //menyimpan username dan password terenkripsi ke database
    $query = "INSERT INTO tb_user VALUES('$username', '$passmd', '$level')";
    $hasil = mysqli_query($db_koneksi, $query);

    //menampilkan status pendaftaran
    if ($hasil) echo "User berhasil terdaftar";
    else echo "Username sudah ada yang memiliki";

}
else echo "Password yang dimasukkan tidak sama";

?>