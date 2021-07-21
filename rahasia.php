<?php include_once("inc_header.php") ?>

<?php
    if($_SESSION['status']!="login"){
    header("location:index.php?pesan=belum_login");
}
?>

<!DOCTYPE html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="styleloginhome.css">
    <link rel="icon" type="image/png" href="logo/favicon.ico"/>
</head>
<body>

<div>
    <h3>Welcome Back, <b><?php echo $_SESSION['members_nama_lengkap']; ?></b></h3>

    <p>Anda telah login dengan email <b><?php echo $_SESSION['members_email']; ?></b>.</p>
    
    <a href="logout.php" class="tbl-biru" onclick="return confirm('apakah anda yakin ingin logout ?')">LOGOUT</a>
</div>
    
</body>
</html>