<?php $this ->extend("layout/layout");
$this->section("content");


?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h1> Halaman Tambah Data Genre</h1>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="/genre" class="btn btn-dark" >kembali</a> 
                    </div>
                </div>
            </div>
            <div class="card-body">
            <form action="/genre/baru" method="POST" enctype="multipart/form-data">
                    <div class="row">

                        <div class="col-md-6">
                            <label for="nama_genre" class="form-label">Nama Genre</label>
                            <input type="text" class="form-control <?= isset($errors['nama_genre']) ? 'is-invalid ' : ''; ?>" id="nama_genre" name="nama_genre" value="<?= old('nama_genre'); ?>">
                            <?php if (isset($errors['nama_genrem'])) : ?>
                                <div class="invalid-feedback">
                                    <?= $errors['nama_genre'] ?>
                                </div>
                            <?php endif; ?>

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary mt-5">Simpan</button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>

</div>





<?php $this->endSection();