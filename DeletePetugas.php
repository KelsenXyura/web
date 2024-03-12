<?php 

    require 'functions.php';
    $id_petugas = $_GET["id_petugas"];



        if (DeletePetugas ($id_petugas) > 0 ){
            echo "
            <script>
            alert('Data berhasil di hapus');
            document.location.href='Petugas.php';
            </script>
            ";
            }else {
                echo "
                <script>
                
                alert('data gagal di hapus');
                document.location.href='Petugas.php';
                </script>

            ";
        }
    



 ?>


