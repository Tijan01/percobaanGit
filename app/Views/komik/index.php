<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Brand</th>
                  <th scope="col">Jumlah</th>
                  <th scope="col">Status</th>
                  <th scope="col">Detail</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1?>
                <?php foreach($device as $d) : ?>
                <tr>
                  <th scope="row"><?= $i++; ?></th>
                  <td><img src="/img/<?= $d['device_image'];?>" alt="" class="sampul"></td>
                  <td><?= $d['device_name'];?></td>
                  <td><?= $d['device_brand'];?></td>
                  <td><?= $d['device_quantity'];?></td>
                  <td><?= $d['device_status'];?></td>
                  
                  <td>
                    <a href="/komik/<?=$d['slug'];?>" class="btn btn-success">Detail</a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>