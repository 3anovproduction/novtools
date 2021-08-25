<?php
    include 'koneksi.php';
    if(isset($_POST['submit'])){

        //1 ID Terbesar Di Kolom ID Register, Lalu 5 Karakter Dari Sebelah Kanan
        $getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id, 5)) AS id FROM tb_admin");
        $d = mysqli_fetch_object($getMaxId);
        $generateId = 'A' .date('Y').sprintf("%05s", $d->id + 1);
       
        //Proses Insert
        $insert = mysqli_query($conn, "INSERT INTO tb_admin VALUES(
                '".$generateId."',
                '".$_POST['nama_admin']."',
                '".$_POST['user']."',
                '".$_POST['pass']."'
            )");

            if($insert){
                echo '<script>window.location="berhasil.php?id='.$generateId.'"</script>';
            }else{
                echo 'huft '.mysqli_error($conn);
            }
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
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--End Bootstrap-->
    <title>Register</title>
</head>
<body>


    <!--Box Formulir-->
    <section class="box-formulir">
    
        <h2>Admin Register</h2>

        <!--Form-->
        <form action="" method="post">
            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>
                                <input type="text" name="nama_admin" class="input-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td>
                                <input type="text" name="user" class="input-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td>
                                <input type="password" name="pass" class="input-control">
                        </td>
                    </tr>

                    <tr>
                        
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>        
                        <input type="submit" name="submit" class="btn btn-primary" value="Daftar Sekarang">
                        </td>
                    </tr>

                    

                </table>
            </div>
         </form>
    </section>
    
    <!--Bootstrap JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!--End Bootstrap JavaScript-->
</body>
</html>