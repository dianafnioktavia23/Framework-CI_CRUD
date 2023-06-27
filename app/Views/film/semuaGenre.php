<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>
<p>

</p>
<p>
<h4>
  Data Film
</h4>
</p> 
<div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <tr>
                    <th>No</th>
                    <th>Nama Genre</th>
                    <th>action</th>
                </tr>
                <?php $i = 1 ;?>
                <?php foreach($semuaGenre as $Genre) :?>
                    <tr>
                        <td><?= $i++;?></td>
                        <td><?= $Genre['nama_genre']?></td>
                        <td>
                            <a href="" class="btn btn-success"> Update</a>
                            <a href="" class="btn btn-danger"> Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </table>
        </div>
    </div>
    <?= $this->endSection() ?>