<?php
    include 'koneksi.php';

    $user_id = $_GET ['user_id'];
    $sqlGet = "SELECT * FROM tb_pendaftaran WHERE user_id= '$user_id'";

    $queryGet= mysqli_query($conn, $sqlGet);
    $data = mysqli_fetch_array($queryGet);
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
    <title>Add Member</title>
</head>
<body>
    <div class="w-50 mx-auto border p-3 mt-5">
    <a href="member.php">Back</a>
    <form action="edit-member.php" method="post">
        <label for="user_id">UserID</label>
        <input type="text" id="user_id" name="user_id" value="<?php echo $data['user_id']?>" class="form-control" readonly>

        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" value="<?php echo $data['nama']?>" class="form-control" required>

        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="jenis_kelamin" class="form-select" required>
            <option><?php echo $data['jenis_kelamin']?></option>
            <option value="laki-laki">Laki-Laki</option>
            <option value="perempuan">Perempuan</option>
        </select>

        <label for="alamat">Alamat</label>
        <input type="text" id="alamat" name="alamat" value="<?php echo $data['alamat']?>" class="form-control" required>

        <label for="telp">No.HP</label>
        <input type="text" id="telp" name="telp" value="<?php echo $data['telp']?>" class="form-control" required>

        <input class="btn btn-primary mt-3" type="submit" name="edit" value="Edit">
    </form>
</div>

<?php
    if(isset($_POST['edit'])) {
        $user_id= $_POST['user_id'];
        $nama= $_POST['nama'];
        $jenis_kelamin= $_POST['jenis_kelamin'];
        $alamat= $_POST['alamat'];
        $telp= $_POST['telp'];


        $sqlUpdate= "UPDATE tb_pendaftaran 
                    SET nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', telp='$telp', WHERE user_id= '$user_id'";
        $queryUpdate= mysqli_query($conn, $sqlUpdate);
        
    }
?>

    <!--Bootstrap JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!--End Bootstrap JavaScript-->

</body>
</html>
    
