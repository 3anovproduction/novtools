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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css" />
    <!--End Bootstrap-->
    <title>Member</title>
</head>
<body>

    <!--NavBar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand"><h2 class="text-white">Admin</h2></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mob-navbar" aria-label="Toggle">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mob-navbar">
                <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home-admin.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="member-admin.php">Member</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">#</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a class="btn btn-primary" href="login-admin.php" type="button">Logout</a>
                </form>
            </div>
        </div>
    </nav>
    <!--End NavBar-->
    <div class="container mt-3">
        <a href="add-member.php" class="btn btn-primary btn-md mb-3">+Add Member</a>
    <table class="table table-striped table-hover table-bordered mt-1 text-center">
        <thead class="table-dark">
            <th>UserID</th>
            <th>Nama Lengkap</th>
            <th>Alamat</th>
            <th>Telp</th>
            <th>Email</th>
            <th>Action</th>

    </thead>

    <!--GET DATA FROM DATABASE-->
    <?php
        $sqlGet= "SELECT * FROM tb_member";
        $query= mysqli_query($conn, $sqlGet);

        while($d= mysqli_fetch_array($query)){
            echo"
                    <tbody>
                    <tr>
                        <td>$d[id]</td>
                        <td>$d[nama]</td>
                        <td>$d[alamat]</td>
                        <td>$d[telp]</td>
                        <td>$d[email]</td>

                        <td>
                            <div class='row'>
                                <div class='d-flex justify-content-center'>
                                <a href='detail-member.php?id=$d[id]' class='btn btn-sm btn-warning'>Detail</a> &nbsp; &nbsp;
                                <a href='delete-member.php?id=$d[id]' class='btn btn-sm btn-danger'>Delete</a>
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
    <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
    <!--End Bootstrap JavaScript-->

</body>
</html>
    
