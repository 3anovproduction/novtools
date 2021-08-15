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
    <title>Pendaftaran Berhasil</title>
</head>
<body>

    <!--Box Formulir-->
    <section class="box-formulir">
    
        <center><h2>Pendaftaran Berhasil</h2></center>

            <div class="box">
                <center><h4>Kode Pendaftaran Anda Adalah <?php echo $_GET['id']?></h4></center>
                <center><a href="print.php?id=<?php echo $_GET['id'] ?>" target="_blank" class="btn-print">Print</a></center>
            </div>
    </section>

</body>
</html>