<?php
    include 'koneksi.php';
    if(isset($_GET['id'])){
        $delete = mysqli_query($conn, "DELETE FROM tb_member WHERE id = '".$_GET['id']."'");
        echo '<script>window.location ="member.php"</script>';
    }
?>