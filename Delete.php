<?php 

    require 'functions.php';
    $nik = $_GET["nik"];



        if (Delete ($nik) > 0 ){
            echo "
            <script>
            alert('Data berhasil di hapus');
            document.location.href='Masyarakat1.php';
            </script>
            ";
            }else {
                echo "
                <script>
                
                alert('data gagal di hapus');
                document.location.href='Masyarakat1.php';
                </script>

            ";
        }
    



 ?>


