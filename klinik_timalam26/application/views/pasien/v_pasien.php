<section class="konten mt-2">
    <div class="container-fluid">
     <div class="card">
        <div class="card-header">
            <?= $title; ?>

            <a href="<?=base_url('pasien/tambah'); ?>"class="btn btn-success float-right">Tambah Pasien</a>
        </div>
        <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Id Pasien</th>
                  <th scope="col">Nama Pasien</th>
                  <th scope="col">Alamat</th>
    
                  <th scope="col">Aksi</th>
                </tr>
               </thead>
               <tbody>
                 <?php $no=1; foreach($pasien as $r) { ?>
                 <tr>
                  <th scope="row"><?=$no; ?></th>
                  <td><?= $r['id_pasien']; ?></td>
                   <td><?= $r['nama_pasien']; ?></td>
                   <td><?= $r['alamat']; ?></td>
                   
                  <td>
                      <a href="<?= base_url().'pasien/edit/'.$r['id_pasien']; ?>">Edit</a>
                      | Aksi
                  </td>
                 </tr>
                 <?php } ?>
                </tbody>
            </table>
      </div>
    </div>
 </div>
</section>