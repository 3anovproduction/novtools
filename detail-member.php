<?php
    session_start();
    include 'koneksi.php';
    if($_SESSION['stat_login'] != true){
        echo '<script>window.location="login-admin.php"</script>';
    }

    $member = mysqli_query($conn, "SELECT * FROM tb_member WHERE id = '".$_GET['id']."'");
    $u = mysqli_fetch_object($member);

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
        <h2>Detail Member</h2>
        <div class="box">
            
        <table class="table-data" border="0">
       <tr>
           <td>User ID</td>
           <td>:</td>
           <td><?php echo $u->id ?></td>
        </tr>

        <tr>
           <td>Tanggal Pendaftaran</td>
           <td>:</td>
           <td><?php echo $u->tgl_pendaftaran ?></td>
        </tr>

        <tr>
           <td>Pembelian</td>
           <td>:</td>
           <td><?php echo $u->pembelian ?></td>
        </tr>

        <tr>
           <td>Nama</td>
           <td>:</td>
           <td><?php echo $u->nama ?></td>
        </tr>
        
        <tr>
           <td>Jenis Kelamin</td>
           <td>:</td>
           <td><?php echo $u->jenis_kelamin ?></td>
        </tr>

        <tr>
           <td>Alamat</td>
           <td>:</td>
           <td><?php echo $u->alamat ?></td>
        </tr>

        <tr>
           <td>No.HP</td>
           <td>:</td>
           <td><?php echo $u->telp ?></td>
        </tr>

        <tr>
           <td>Email</td>
           <td>:</td>
           <td><?php echo $u->email ?></td>
        </tr>
    
    </table>    

        </div>
    </section>

</body>
</html>