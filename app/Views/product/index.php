<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Start Card -->
<section id="product">
    <div class="container justify-content-center">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-6">
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
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success mt-4" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('success') != null) : ?>
            <div class="alert alert-success mt-4" role="alert">
                <?= session()->getFlashdata('success'); ?>
            </div>
        <?php endif; ?>
        <div class="row mt-2">
            <?php foreach ($product as $p) : ?>
                <div class="col-sm-3 mt-3">
                    <a href="/product/<?= $p['slug']; ?>" class="info-pro">
                        <div class="card card-product" style="width: 16rem;">
                            <img src="/img/<?= $p['image']; ?>" class="card-img-top">
                            <div class="card-body">
                                <h6 class="card-title"><?= $p['nama_brand']; ?> <?= $p['type']; ?></h6>
                                <p class="card-text">Rp. <?= number_format($p['price'], 0, 0, '.'); ?>,-</p>
                                <a href="/cart/beli/<?= $p['id']; ?>" class="btn btn-dark">
                                    <h6>+ Keranjang</h6>
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="row mt-4">
            <div class="col">
                <?= $pager->links('product', 'product_pagination'); ?>
            </div>
        </div>
    </div>
</section>
<!-- End Card -->

<?= $this->endSection(); ?>