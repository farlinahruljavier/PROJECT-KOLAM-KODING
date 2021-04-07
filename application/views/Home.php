<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is index</title>
</head>
<body>
    <h1>Halo selamat datang di halaman index</h1>

    <button onclick="location.href='Welcome/input' ">Submit</button>

    <table border="2" cellpadding="20">
        <tr align="center">
            <td><b>No</b></td>
            <td><b>NIM</b></td>
            <td><b>Nama Mahasiswa</b></td>
            <td><b>Jurusan</b></td>
            <td><b>Action</b></td>
        </tr>
        <?php
        $count = 0;
        foreach ($data_mhs as $row) {
            $count = $count + 1;
        ?>
        <tr>
            <td><?php echo $count ?></td>
            <td><?php echo $row->nim ?></td>
            <td><?php echo $row->nama ?></td>
            <td><?php echo $row->jurusan ?></td>
            <td><a href="<?php echo base_url ('Welcome/edit'); ?>">Update</a> <a href="">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>