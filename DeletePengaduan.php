<?php 

    require 'functions.php';
    $id_pengaduan = $_GET["id_pengaduan"];



        if (DeletePengaduan ($id_pengaduan) > 0 ){
            echo "
            <script>
            alert('Data berhasil di hapus');
            document.location.href='Pengaduan.php';
            </script>
            ";
            }else {
                echo "
                <script>
                
                alert('data gagal di hapus');
                document.location.href='Pengaduan.php';
                </script>

            ";
        }
    



 ?>


