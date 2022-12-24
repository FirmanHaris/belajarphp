<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form</title>
    <style>
        body {
            height: 80vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .card {
            max-width: 450px;
            width: 100%;
            border: 1px solid black;
            height: auto;
            padding: 5px;
            border-radius: 10px;
            background-color: #f1f1f1;
        }

        input[type=text] {
            width: 100%;
            padding: 12px 5px;
            margin: 8px 0;
            border: 2px solid blue;
            border-radius: 8px;
        }

        textarea {
            width: 100%;
            border: 2px solid blue;
            border-radius: 8px;
            padding: 5px;
        }

        select {
            width: 100%;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            background-color: grey;
        }

        input[type=submit] {
            background-color: #04AA6D;
            border: none;
            border-radius: 8px;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="card">
        <form action="biodata.php" method="POST">
            <h1 align="center">Biodata Mahasiswa</h1>
            <table align="center">
                <tr>
                    <td>
                        <label for="nim"> Nim</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nim" placeholder="Nim">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nama"> Nama</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" placeholder="Nama">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="alamat"> alamat</label>
                    </td>
                    <td>:</td>
                    <td>
                        <textarea name="alamat" id="" cols="20" rows="5" placeholder="alamat"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="jk">Jenis Kelamin</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" value="Laki-Laki">Laki-Laki
                        <input type="radio" name="jk" value="Perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="prodi">Prodi</label>
                    </td>
                    <td>:</td>
                    <td>
                        <select name="prodi" id="prodi">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="hobi">Hobi</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="checkbox" name="hobi" value="music">
                        <label for="music">music</label>
                        <input type="checkbox" name="hobi" value="olahraga">
                        <label for="olahrag">olahraga</label>
                        <input type="checkbox" name="hobi" value="coding">
                        <label for="coding">coding</label>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" value="Kirim">
                    </td>
                </tr>
            </table>
    </div>
    </form>
</body>

</html>