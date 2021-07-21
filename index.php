<?php include_once("inc_header.php") ?>

<?php
if(isset($_GET['pesan'])){
    if($_GET['pesan']=="logout"){
        echo "<div class='sukses1'>Anda telah berhasil logout !</div>";
    }else if($_GET['pesan']=="belum_login"){
        echo "<div class='error1'>Anda harus login terlebih dahulu untuk mengakses halaman tersebut !</div>";
    }
}
?>