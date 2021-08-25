<?php
    include 'koneksi.php';

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
    <title>Pendaftaran Berhasil</title>
</head>
<body>
<div class="w-50 mx-auto border p-3 mt-5">
    <a class="btn-close" href="register-admin.php" type="button" ></a>
    <!--Box Formulir-->
    
        <center><h2>Pendaftaran Berhasil</h2></center>

            <div class="box d-grid gap-2">
                <center><h4><b>UserID Anda Adalah <?php echo $_GET['id']?></b></h4></center>
               <a href="print.php?id=<?php echo $_GET['id'] ?>" target="_blank" class="btn btn-primary">Print</a>
            </div>
</div>

    <!--Bootstrap JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!--End Bootstrap JavaScript-->
</body>
</html>