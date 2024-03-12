<?php 

    require 'functions.php';
    $id_tanggapan = $_GET["id_tanggapan"];



        if (DeleteTanggapan ($id_tanggapan) > 0 ){
            echo "
            <script>
            alert('Data berhasil di hapus');
            document.location.href='Tanggapan.php';
            </script>
            ";
            }else {
                echo "
                <script>
                
                alert('data gagal di hapus');
                document.location.href='Tanggapan.php';
                </script>

            ";
        }
    



 ?>


