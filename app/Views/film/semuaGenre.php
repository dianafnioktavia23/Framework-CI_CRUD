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
                    <div class="col-12 text-end">
                        <a href="/genre/add_genre" class="btn btn-primary">Tambahkan Data Film</a>
                    </div>
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
                        <a href="/genre/update/<?= $Genre["id_genre"]; ?>" class="btn btn-success">Update</a>
                            <a class="btn btn-danger" onclick="return confirmDelete()">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </table>
        </div>
    </div>

    <script>
    function confirmDelete() {
        swal({
                title: "Apakah Anda yakin?",
                text: "setelah dihapus! data anda akan benar-benar hilang!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {

                    window.location.href = "/genre/hapus/<?= encryptUrl($Genre['id_genre']) ?>";

                } else {
                    swal("Data tidak jadi dihapus!");
                }
            });
    }
</script>
    <?= $this->endSection() ?>