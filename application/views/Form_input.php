<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input data</title>
</head>
<body>
    <h1>Ini adalah form Input data</h1>
    <table>
        <form action="<?php echo base_url('Welcome/aksi_insert'); ?>" method="post">
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><input type="text" name="nim" require></td>
        </tr>

        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" require></td>
        </tr>

        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><input type="text" name="jurusan" require></td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" value="SIMPAN"></td>
        </tr>
    
        </form>
    </table>
</body>
</html>