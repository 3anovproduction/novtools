<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
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
    <title>Member</title>
</head>
<body>
    <div class="container mt-3">
        <a href="add-member.php" class="btn btn-primary btn-md mb-3">+Add Member</a>
    <table class="table table-striped table-hover table-bordered mt-1">
        <thead class="table-dark">
            <th>UserID</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No.HP</th>
            <th>Action</th>
    </thead>

    <!--GET DATA FROM DATABASE-->
    <?php
        $sqlGet= "SELECT * FROM tb_pendaftaran";
        $query= mysqli_query($conn, $sqlGet);

        while($data= mysqli_fetch_array($query)){
            echo"
                    <tbody>
                    <tr>
                        <td>$data[user_id]</td>
                        <td>$data[nama]</td>
                        <td>$data[jenis_kelamin]</td>
                        <td>$data[alamat]</td>
                        <td>$data[telp]</td>

                        <td>
                            <div class='row'>
                                <div class='d-flex justify-content-center'>
                                <a href='edit-member.php?user_id=$data[user_id]' class='btn btn-sm btn-warning'>Edit</a> &nbsp; &nbsp;
                                <a href='delete-member.php?user_id=$data[user_id]' class='btn btn-sm btn-danger'>Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
                "; 
        }
    ?>
    </table>
    <!--END GET DATA FROM DATABASE-->
    </div>

    <!--Bootstrap JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!--End Bootstrap JavaScript-->

</body>
</html>
    
