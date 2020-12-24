<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Start Card -->
<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-5">
            <form action="" method="POST">
                <div class="input-group mt-5">
                    <input type="text" class="form-control" placeholder="Cari produk.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-dark" type="submit" name="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-2">
        <?php foreach ($product as $p) : ?>
            <div class="col-sm-3 mt-3">
                <div class="card" style="width: 16rem;">
                    <img src="/img/<?= $p['image']; ?>" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title"><?= $p['nama_brand']; ?> <?= $p['type']; ?></h6>
                        <p class="card-text">Rp. <?= $p['price']; ?>,-</p>
                        <p><a href="/product/<?= $p['slug']; ?>">Spesifikasi Lengkap</a></p>
                        <a href="/transaction/<?= $p['slug']; ?>" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- End Card -->

<?= $this->endSection(); ?>