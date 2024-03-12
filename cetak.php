<!DOCTYPE html>
<html>
<head>
 <title> Cetak laporan PDF </title>
</head>
<body>
 <style type="text/css">
 body{
 font-family: sans-serif;
 }
 table{
 margin: 20px auto;
 border-collapse: collapse;
 }
 table th,
 table td{
 border: 1px solid #3c3c3c;
 padding: 3px 8px;

 }
 a{
 background: skyblue;
 color: #fff;
 padding: 8px 10px;
 text-decoration: none;
 border-radius: 2px;
 }

    .tengah{
        text-align: center;
    }
 </style>
 <table>
               <tr>
               <th>id_tanggapan</th>
                <th>id_pengaduan</th>
                <th>tgl_tanggapan</th>
                <th>tanggapan</th>
                <th>id_petugas</th>
 </tr>
 <?php 
 // koneksi database
 $koneksi = mysqli_connect("localhost","root","","pengaduanmasyarakat");

 // menampilkan data 
 $data = mysqli_query($koneksi,"select * from tanggapan");
 while($d = mysqli_fetch_array($data)){
 ?>
 <tr>
 <td style='text-align: center;'><?php echo $d['id_tanggapan'] ?></td>
 <td><?php echo $d['id_pengaduan']; ?></td>
 <td><?php echo $d['tgl_tanggapan']; ?></td>
 <td><?php echo $d['tanggapan']; ?></td>
<td><?php echo $d['id_petugas']; ?></td>
 </tr>
 <?php 
 }
 ?>
    </table>
    <script>
 window.print();
 </script>
</body>
</html>