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
    <title>+Add Member</title>
</head>
<body>
    <div class="w-50 mx-auto border p-3 mt-5">
    <a class="btn-close" href="member.php" type="button" ></a>
    <form action="add-member.php" method="post">
        <label for="user_id">UserID</label>
        <input type="text" id="id" name="id" class="form-control" required>

        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" class="form-control" required>

        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="jenis_kelamin" class="form-select" required>
            <option disabled="disabled" selected="selected">-- Pilih --</option>
            <option value="laki-laki">Laki-Laki</option>
            <option value="perempuan">Perempuan</option>
        </select>

        <label for="alamat">Alamat</label>
        <input type="text" id="alamat" name="alamat" placeholder="example: Jl. Kenangan No.1, City" class="form-control" required>

        <label for="telp">No.HP</label>
        <input type="text" id="telp" name="telp" placeholder="example: 0812-3456-7890" class="form-control" required>

        <input class="btn btn-success mt-3" href="member.php" type="submit" name="add" value="+Add">
    </form>
</div>

<?php
    if(isset($_POST['add'])) {
        $id= $_POST['id'];
        $nama= $_POST['nama'];
        $jenis_kelamin= $_POST['jenis_kelamin'];
        $alamat= $_POST['alamat'];
        $telp= $_POST['telp'];

        $sqlGet= "SELECT * FROM tb_member WHERE id='$id'";
        $queryGet= mysqli_query($conn, $sqlGet);
        $cek= mysqli_num_rows($queryGet);

        $sqlInsert= "INSERT INTO tb_member(id,nama,jenis_kelamin,alamat,telp) VALUES ('$id', '$nama', '$jenis_kelamin', '$alamat', '$telp')";
        $queryInsert= mysqli_query($conn, $sqlInsert);

        if(isset($sqlInsert) && $cek <= 0){
            echo "
            <center><div class='alert alert-success'>Member berhasil ditambahkan! &nbsp; <a href='member.php'</a>View</div></center>";

         }else if($cek >= 1){
                echo "
                <center><div class='alert alert-danger'>Member gagal ditambahkan!<a href='member.php'</a>View</div></center>";
            }
        
    }
?>

    <!--Bootstrap JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!--End Bootstrap JavaScript-->

</body>
</html>
    
