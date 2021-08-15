<?php
    include 'koneksi.php';
    if(isset($_POST['submit'])){

        //1 ID Terbesar Di Kolom ID Register, Lalu 5 Karakter Dari Sebelah Kanan
        $getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(user_id, 5)) AS id FROM tb_pendaftaran");
        $d = mysqli_fetch_object($getMaxId);
        $generateId = 'U' .date('Y').sprintf("%05s", $d->id + 1);
       
        //Proses Insert
        $insert = mysqli_query($conn, "INSERT INTO tb_pendaftaran VALUES(
                '".$generateId."',
                '".date('Y-m-d')."',
                '".$_POST['tahun']."',
                '".$_POST['pembelian']."',
                '".$_POST['nm']."',
                '".$_POST['tmp_lahir']."',
                '".$_POST['tgl_lahir']."',
                '".$_POST['jk']."',
                '".$_POST['alamat']."'
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
    
        <h2>Formulir Pendaftaran</h2>

        <!--Form-->
        <form action="" method="post">
            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Tahun</td>
                        <td>:</td>
                        <td>
                                <input type="text" name="tahun" class="input-control" value="2021" readonly>
                        </td>
                    </tr>

                    <tr>
                        <td>Pembelian</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="pembelian">
                                 <option value="">--Pilih--</option>
                                 <option value="Mod Kendaraan">Mod Kendaraan</option>
                                 <option value="Map">Map</option>
                                 <option value="Traffic">Traffic</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>

            <h3>Data Diri</h3>
            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>
                                <input type="text" name="nm" class="input-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td>
                                <input type="text" name="tmp_lahir" class="input-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>
                                <input type="date" name="tgl_lahir" class="input-control">
                        </td>
                    </tr>

                    <tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td>
							<input type="radio" name="jk" class="form-check-input" value="Laki-laki"> Laki-laki &nbsp;&nbsp;&nbsp;
							<input type="radio" name="jk" class="form-check-input" value="Perempuan"> Perempuan
						</td>
					</tr>

                    <tr>
                        <td>Alamat Lengkap</td>
                        <td>:</td>
                        <td>
                                <textarea class="input-control" name="alamat"></textarea>
                        </td>
                    </tr>

                    <tr>
                        
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>        
                        <input type="submit" name="submit" class="btn btn-primary" onclick="getLocation()" value="Daftar Sekarang">
                            <p id="demo"></p>
                            <script>
                            var x = document.getElementById("demo");
                            
                            function getLocation() {
                            if (navigator.geolocation) {
                                navigator.geolocation.getCurrentPosition(showPosition);
                            } else { 
                                x.innerHTML = "Geolocation tidak didukung oleh browser ini.";
                            }
                            }
                            
                            function showPosition(position) {
                            x.innerHTML = "Latitude: " + position.coords.latitude + 
                            "<br>Longitude: " + position.coords.longitude + 
                            "<br><b>Lokasi Telah Aktif</b>"; 
                            }
                            </script>     
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