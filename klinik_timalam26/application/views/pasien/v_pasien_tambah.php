<section class="konten mt-2">
    <div class="container-fluid">
     <div class="card">
        <div class="card-header">
            <?= $title; ?>

            <a href="<?= base_url('pasien'); ?>"class="btn btn-success float-right">Kembali</a>
        </div>
        <div class="card-body">
            <form action="<?= base_url('pasien/insert'); ?>"method="POST">
            <form action="" method="POST">
                <div class="form-group">
                    <label>Nama Pasien</label>
                    <input type="text" name="nama_pasien" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                 </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                 </div>
                  <div class="form-group">
                    <label>Umur</label>
                    <input type="text" name="umur" maxlength="3" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                 </div>

                  <div class="form-group">
                   <button type="submit"class="btn btn-primary">Simpan</button>
                 </div>
            </form>
      </div>
    </div>
 </div>
</section>