<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table rules="all" border="1">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Area</th>
        </tr>
        <?php
        include "koneksi.php";
        $cari = $_GET['cari'];
        $query = mysqli_query($koneksi, "SELECT country_id,name,area FROM countries WHERE name like '%$cari%'");
        while ($rs = mysqli_fetch_array($query)) {
            echo "<tr>
            <td>" . $rs['country_id'] . "</td>
            <td>" . $rs['name'] . "</td>
            <td>" . $rs['area'] . "</td>
        </tr>";
        }
        ?>
    </table>
</body>

</html>