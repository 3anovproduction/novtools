<?php
    include 'koneksi.php';
    if(isset($_GET['user_id'])){
        $delete = mysqli_query($conn, "DELETE FROM tb_pendaftaran WHERE user_id = '".$_GET['user_id']."'");
        echo '<script>window.location ="member.php"</script>';
    }
?>