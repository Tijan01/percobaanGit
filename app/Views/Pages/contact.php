<?= $this->extend('layout/template'); ?>

    <?= $this->section('content'); ?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="mt-2">Contact Us</h2>
                    <?php foreach($data as $a) : ?>
                    <ul>
                        <li><?= $a['Nama']; ?></li>
                        <li><?= $a['NIM']; ?></li>
                        <li><?= $a['Universitas']; ?></li>
                    </ul>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>



<?= $this->endSection(); ?>