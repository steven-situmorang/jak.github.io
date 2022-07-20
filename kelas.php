<html>
    <title>latihan</title>
    <table border="1">
        <tr>
        <td>ID_kelas</TD>
        <td>nama_kelas</td>
        <?php 
        include "koneksi.php";
        $data = mysqli_query($koneksi,"SELECT * FROM kelas");
        while ($d = mysqli_fetch_array($data)){
        ?>
        <tr>
        <td><?php echo $d['id_kelas'];?></TD> 
        <td><?php echo $d['nama_kelas'];?></TD>
        <?php 
       } ?>
    </table>
</html>   