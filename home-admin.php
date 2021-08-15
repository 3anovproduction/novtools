<?php
    session_start();
    include 'koneksi.php';
    if($_SESSION['stat_login'] != true){
        echo '<script>window.location="login-admin.php"</script>';
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <title>Home Admin</title>
</head>
<body>

    <!--Header Admin-->
    <header>
        <h1><a href="home-admin.php">Administrator</a></h1>
        <ul>
            <li><a href="home-admin.php">Home</a></li>

            <li><a href="member.php">Member</a></li>

            <li><a href="logout-admin.php">Logout</a></li>
        </ul>
    </header>    

    <!--Konten-->
    <section class="content">
        <h2>Home</h2>
        <div class="box">
            <h3><?php echo $_SESSION['nama'] ?>, Selamat Datang</h3>

        </div>
    </section>

</body>
</html>