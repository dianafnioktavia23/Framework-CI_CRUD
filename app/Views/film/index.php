<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>

<p>

</p>
<p>

</p>

<h4>
  Data Film
</h4>
<div class="card-header">
                <div class="row">
                    <div class="col-6">
                        
                    </div>
                    <div class="col-6 text-end">
                        <a href="/film/add" class="btn btn-primary">Tambahkan Data Film</a>
                    </div>
                </div>
            </div>

            <table class="table tabel-hover">
           
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama Film</th>
                    <th>Genre</th>
                    <th>Duration</th>
                    <th>action</th>
                </tr>
                <?php $i = 1 ;?>
                <?php foreach($data_film as $film) :?>
                    <tr>
                        <td><?= $i++;?></td>
                        <td >
                          <img style="width: 50px;" src="/assets/cover/<?= $film ['cover']?>" alt="">
                        </td>
                        <td><?= $film['nama_film']?></td>
                        <td><?= $film['nama_genre']?></td>
                        <td><?= $film['duration']?></td>
                        <td>
                        <td>
                                <a href="/film/update/<?= $film["id"]; ?>" class="btn btn-success">Update</a>
                                <a class="btn btn-danger" onclick="return confirmDelete()">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </table>
        </div>
    </div>
    <!-- tambahkan dari sini  -->
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

                    window.location.href = "/film/destroy/<?= encryptUrl($film['id']) ?>";

                } else {
                    swal("Data tidak jadi dihapus!");
                }
            });
    }
</script>
  <!-- sampai sini -->
<?= $this->endSection() ?>
   