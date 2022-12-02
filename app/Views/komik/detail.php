<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="/img/<?= $device['device_image'];?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $device['device_name'];?></h5>
                <p class="card-text">The lorem ipsum gets its name from the Latin phrase Neque porro quisquam est qui dolorem ipsum quia 
                                     dolor sit amet. which translates to “Nor is there anyone who loves or pursues or desires to obtain
                                     pain of itself, because it is pain.”</p>
                <p class="card-text"><small class="text-muted">Manufactured By <?=$device['device_brand'];?></small></p>
                <a href="/komik/index">Back to List Devices</a>
            </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>