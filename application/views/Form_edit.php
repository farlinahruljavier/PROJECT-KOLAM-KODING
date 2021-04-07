<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data</title>
</head>
<body>
    <h1>Ini adalah form Edit data</h1>
    <table>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><input type="text" disabled value="<?php echo $data_mhs->nim ?>">  <!--  menampilkan isi name  -->
                <input type="hidden" name="nim">    <!--  menyimpan isi name  -->
            </td>
        </tr>

        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo $data_mhs->nama ?>"></td>
        </tr>

        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><input type="text" name="jurusan" value="<?php echo $data_mhs->jurusan ?>"></td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" value="SIMPAN"></td>
        </tr>
    </table>
</body>
</html>