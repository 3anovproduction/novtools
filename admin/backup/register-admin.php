<?php
    include('koneksi.php');
    session_start();
    $error = '';
$validate = '';
//mengecek apakah form registrasi di submit atau tidak
if( isset($_POST['submit']) ){
        // menghilangkan backshlases
        $user = stripslashes($_POST['user']);
        //cara sederhana mengamankan dari sql injection
        $user = mysqli_real_escape_string($conn, $user);
        $nama_admin     = stripslashes($_POST['nama_admin']);
        $nama_admin     = mysqli_real_escape_string($conn, $nama_admin);
        $pass = stripslashes($_POST['pass']);
        $pass = mysqli_real_escape_string($conn, $pass);
        //cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
        if(!empty(trim($nama_admin)) && !empty(trim($user)) && !empty(trim($pass)) ){
            //mengecek apakah password yang diinputkan sama dengan re-password yang diinputkan kembali
            if($pass){
                //memanggil method cek_nama untuk mengecek apakah user sudah terdaftar atau belum
                if( cek_nama($nama_admin,$conn) == 0 ){
                    //hashing password sebelum disimpan didatabase
                    $pass  = password_hash($pass, PASSWORD_DEFAULT);
                    //insert data ke database
                    $query = "INSERT INTO tb_admin (id_admin,nama_admin,username, password ) VALUES ('','$nama_admin','$user','$pass')";
                    $result   = mysqli_query($conn, $query);
                    //jika insert data berhasil maka akan diredirect ke halaman index.php serta menyimpan data username ke session
                    if ($result) {
                        $_SESSION['user'] = $user;
                        
                        header('Location: login-admin.php');
                     
                    //jika gagal maka akan menampilkan pesan error
                    } else {
                        $error =  'Register User Gagal !!';
                    }
                }else{
                        $error =  'Username sudah terdaftar !!';
                }
            }else{
                $validate = 'Password tidak sama !!';
            }
             
        }else {
            $error =  'Data tidak boleh kosong !!';
        }
    } 
    //fungsi untuk mengecek username apakah sudah terdaftar atau belum
    function cek_nama($user,$conn){
        $nama = mysqli_real_escape_string($conn, $user);
        $query = "SELECT * FROM tb_admin WHERE username = '$nama'";
        if( $result = mysqli_query($conn, $query) ) return mysqli_num_rows($result);
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
    <title>Admin</title>
</head>
<body>
<div class="container mt-5">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5"><b>Admin Register</b></h5>

            <form action="" method="post">
            <div class="form-floating mb-3">
                <input type="text" name="nama_admin" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Nama Lengkap</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="user" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Username</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>

              <div class="d-grid">
                <input type="submit" name="submit" value="register" class="btn btn-primary btn-login text-uppercase fw-bold">
              </div>
              <div class="d-grid mt-3">
                <a type="submit" name="login" href="login-admin.php">Sudah punya akun?</a>
              </div>
    </form>
    </div>

    </section>
    
    <!--Bootstrap JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!--End Bootstrap JavaScript-->

</body>
</html>