<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-12">
            <h1 class="text-center mt-5">Spesifikasi</h1>
        </div>
        <div class="col-md-5 mt-3">
            <img src="/img/<?= $product['image']; ?>" class="img-fluid">
        </div>

        <div class="col-md-5 mt-5">
            <ul class="list-group">
                <li class="list-group-item">
                    <h3><?= $product['nama_brand']; ?> <?= $product['type']; ?></h3>
                </li>
                <li class="list-group-item"><b>Harga :</b> Rp. <?= number_format($product['price'], 0, 0, '.'); ?>,-</li>
                <li class="list-group-item"><b>Operating System :</b> <?= $product['os']; ?></li>
                <li class="list-group-item"><b>CPU :</b> <?= $product['cpu']; ?></li>
                <li class="list-group-item"><b>RAM :</b> <?= $product['ram']; ?></li>
                <li class="list-group-item"><b>Storage :</b> <?= $product['storage']; ?></li>
                <hr>
                <a href="/cart/beli/<?= $product['id']; ?>" class="btn btn-dark">
                    <h6>+ Keranjang</h6>
                </a>
            </ul>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>