<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?= session()->getFlashdata('msg') ?>
    <table border="1">
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Level</th>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($admin as $row):?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['nama_admin']?></td>
                <td><?= $row['email']?></td>
                <td><?= $row['level']?></td>
            </tr>
            <?php
            endforeach;
            ?>
        </tbody>
    </table>
</body>

</html>