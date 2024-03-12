<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="container">
<br><br>
    <div>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                 <tr>
               <th>id_tanggapan</th>
                <th>id_pengaduan</th>
                <th>tgl_tanggapan</th>
                <th>tanggapan</th>
                <th>id_petugas</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include "database.php";
                $select = mysqli_query($koneksi, 'select * from tanggapan');
                while($data = mysqli_fetch_array($select)){
            ?>
            <td><?php echo $d['id_tanggapan']; ?></td>
             <td><?php echo $d['id_pengaduan']; ?></td>
            <td><?php echo $d['tgl_tanggapan']; ?></td>
            <td><?php echo $d['tanggapan']; ?></td>
            <td><?php echo $d['id_petugas']; ?></td>

            </a></td>
            <?php } ?>
        </tbody>
    </table>
    </div>
</div>