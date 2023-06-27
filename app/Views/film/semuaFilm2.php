<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data film</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
    <h1>Data Film</h1>
    <table border ="1" cellspacing="2" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Cover</th>
            <th>Nama Film</th>
            <th>id genre</th>
            <th>Durasi</th>

        </tr>
        <?php $i = 1 ;?>
        <?php foreach($semuaFilm as $film): ?>
            <tr>
                <td><?= $i++;?></td>
                <td >
                    <img style="width: 50px;" src="/assets/cover/<?= $film ['cover']?>" alt="">
                </td>
                <td><?php echo $film['nama_film']?></td>
                <td><?= $film['nama_genre']?></td>
                <td><?= $film['duration']?></td>
            </tr>
        <?php endforeach;?>
    </table>

    <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>