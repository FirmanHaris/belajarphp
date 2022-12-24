<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$hobi = $_POST['hobi'];
?>
<table align="center" rules="all" border="1" cellpadding="10">
    <tr>
        <th>NIM</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>JENIS KELAMIN</th>
        <th>PRODI</th>
        <th>HOBY</th>
    </tr>
    <tr>
        <td><?php echo $nim; ?></td>
        <td><?php echo $nama; ?></td>
        <td><?php echo $alamat; ?></td>
        <td><?php echo $jk; ?></td>
        <td><?php echo $prodi; ?></td>
        <td><?php echo $hobi; ?></td>
    </tr>
</table>