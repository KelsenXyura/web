<?php 

$conn = mysqli_connect("localhost","root","","pengaduanmasyarakat");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows [] =$row;
    }
    return $rows;
}

function tambah($post){
    global $conn;
    $nik = $post["nik"];
    $nama = $post["nama"];
    $username = $post["username"];
    $password = $post["password"];
    $telp = $post["telp"];
    

    $query = "INSERT INTO masyarakat VALUES ('$nik','$nama','$username','$password','$telp')";    

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah($post){
    global $conn;
    $nik = $post["nik"];
    $nama = $post["nama"];
    $username = $post["username"];
    $password = $post["password"];
    $telp = $post["telp"];


    $query = "UPDATE masyarakat SET
             nik='$nik',
             nama='$nama',
             username='$username',
             password='$password',
             telp='$telp'
             WHERE nik = $nik
              ";
             mysqli_query($conn, $query);
             return mysqli_affected_rows($conn);
}

 function Delete($nik){
        global $conn;
        mysqli_query($conn,"DELETE FROM masyarakat WHERE nik = $nik");
        return mysqli_affected_rows($conn);
}

function cari($keyword){
$query = "SELECT * FROM masyarakat WHERE
nik  LIKE '%$keyword%' OR
nama  LIKE '%$keyword%' OR
username  LIKE '%$keyword%' OR
password  LIKE '%$keyword%' OR
telp  LIKE '%$keyword%' 
";
return query($query);
}

function cariP($keyword){
$query = "SELECT * FROM pengaduan WHERE
id_pengaduan  LIKE '%$keyword%' OR
tgl_pengaduan  LIKE '%$keyword%' OR
nik  LIKE '%$keyword%' OR
isi_laporan  LIKE '%$keyword%' OR
foto  LIKE '%$keyword%' OR 
status  LIKE '%$keyword%'
";
return query($query);
}

function cariPetugas($keyword){
$query = "SELECT * FROM petugas WHERE
id_petugas  LIKE '%$keyword%' OR
nama_petugas  LIKE '%$keyword%' OR
username  LIKE '%$keyword%' OR
password  LIKE '%$keyword%' OR
telp  LIKE '%$keyword%' OR 
level  LIKE '%$keyword%'
";
return query($query);
}


function cariT($keyword){
$query = "SELECT * FROM tanggapan WHERE
id_tanggapan  LIKE '%$keyword%' OR
id_pengaduan  LIKE '%$keyword%' OR
tgl_tanggapan  LIKE '%$keyword%' OR
tanggapan  LIKE '%$keyword%' OR
id_petugas  LIKE '%$keyword%' 
";
return query($query);
}


 function tambahPengaduan($post){
        global $conn;

        $id_pengaduan = $post["id_pengaduan"];  
        $tgl_pengaduan = $post["tgl_pengaduan"];
        $nik = $post["nik"];
        $isi_laporan = $post["isi_laporan"];
        $status = $post["status"];
       
     
             $foto = upload();
        
        if (!$foto){
            return false;
        }

        $query = "INSERT INTO pengaduan VALUES ('$id_pengaduan','$tgl_pengaduan','$nik','$isi_laporan','$foto','$status')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

    }

    function ubahPengaduan($post){
        global $conn;
         $id_pengaduan      = $post["id_pengaduan"];
         $tgl_pengaduan     = $post["tgl_pengaduan"];
         $nik               = $post["nik"];
         $isi_laporan       = $post["isi_laporan"];
         $status            = $post["status"];
         $fotolama          = $post["fotolama"];
    
    if ($_FILES['foto'] ['error']===4) {
        $foto =$fotolama;
    }else{
        $foto = upload();

    }
    $query = "UPDATE pengaduan SET
              id_pengaduan='$id_pengaduan',
              tgl_pengaduan='$tgl_pengaduan',
              nik='$nik',
              isi_laporan='$isi_laporan',
              status='$status',
              foto='$foto'
              WHERE id_pengaduan = $id_pengaduan
            ";
    
    mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function DeletePengaduan($id_pengaduan){
        global $conn;
        mysqli_query($conn,"DELETE FROM pengaduan WHERE id_pengaduan = $id_pengaduan");
        return mysqli_affected_rows($conn);
    }

    function upload() {
        global $conn;

        $namaFile = $_FILES['foto']['name'];
        $ukuranGambar = $_FILES['foto']['size'];
        $error = $_FILES['foto']['error'];
        $tmpname = $_FILES['foto']['tmp_name'];

        

        if ($error === 4){
            echo"
            <script>
            alert('ayo pilih foto terlebih dahulu');
            </script>
            ";
            return false;
        }

        $ekstensifotoValid =['jpg','jpeg','png'];
        $ekstensfoto =explode('.',$namaFile);
        $ekstensifoto =strtolower(end($ekstensifotoValid));

        if(!in_array ($ekstensifoto, $ekstensifotoValid)){
            echo"
            <script>
            alert('yang anda upload bukan foto');
            </script>
            ";
            return false;
        }
        if($ukuranGambar > 10000000){
            echo"
            <script>
            alert('foto yang anda upload teralu besar ');
            </script>
            ";
            return false;

        }

        $namaFileBaru  = uniqid();
        $namaFileBaru .='.';
        $namaFileBaru .= $ekstensifoto;
        move_uploaded_file($tmpname, 'img/' .  $namaFileBaru);

        return $namaFileBaru;
    }

function tambahPetugas($post){
    global $conn;
    $id_petugas = $post["id_petugas"];
    $nama_petugas = $post["nama_petugas"];
    $username = $post["username"];
    $password = $post["password"];
    $telp = $post["telp"];
    $level = $post["level"];
    
    

    $query = "INSERT INTO petugas VALUES ('$id_petugas','$nama_petugas','$username','$password','$telp','$level')";    

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubahPetugas($post){
    global $conn;
    $id_petugas = $post["id_petugas"];
    $nama_petugas = $post["nama_petugas"];
    $username = $post["username"];
    $password = $post["password"];
    $telp = $post["telp"];
    $level = $post["level"];

    $query = "UPDATE petugas SET
             id_petugas='$id_petugas',
             nama_petugas='$nama_petugas',
             username='$username',
             password='$password',
             telp='$telp',
             level = '$level'
             WHERE id_petugas = $id_petugas
              ";

             mysqli_query($conn, $query);
             return mysqli_affected_rows($conn);
}

 function DeletePetugas($id_petugas){
        global $conn;
        mysqli_query($conn,"DELETE FROM petugas WHERE id_petugas = $id_petugas");
        return mysqli_affected_rows($conn);
}

function tambahTanggapan($post){
    global $conn;
    $id_tanggapan = $post["id_tanggapan"];
    $id_pengaduan = $post["id_pengaduan"];
    $tgl_tanggapan = $post["tgl_tanggapan"];
    $tanggapan = $post["tanggapan"];
    $id_petugas = $post["id_petugas"];
    

    $query = "INSERT INTO tanggapan VALUES ('$id_tanggapan','$id_pengaduan','$tgl_tanggapan','$tanggapan','$id_petugas')";    

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubahTanggapan($post){
    global $conn;
    $id_tanggapan = $post["id_tanggapan"];
    $id_pengaduan = $post["id_pengaduan"];
    $tgl_tanggapan = $post["tgl_tanggapan"];
    $tanggapan = $post["tanggapan"];
    $id_petugas = $post["id_petugas"];


    $query = "UPDATE tanggapan SET
             id_tanggapan='$id_tanggapan',
             id_pengaduan='$id_pengaduan',
             tgl_tanggapan='$tgl_tanggapan',
             tanggapan='$tanggapan',
             id_petugas='$id_petugas'
             WHERE id_tanggapan = $id_tanggapan
              ";
             mysqli_query($conn, $query);
             return mysqli_affected_rows($conn);
}

 function DeleteTanggapan($id_tanggapan){
        global $conn;
        mysqli_query($conn,"DELETE FROM tanggapan WHERE id_tanggapan = $id_tanggapan");
        return mysqli_affected_rows($conn);
}
















 ?>