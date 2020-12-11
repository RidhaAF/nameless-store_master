<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Start Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active mt-5">
            <img src="https://www.spark.co.nz/content/dam/telecomcms/responsive/images/shop/apple/iphone-12-pro/buy-now/buy-now-consumer/iphone12-buy-now-banner-mobile.jpg" class="d-block w-100">
        </div>
        <div class="carousel-item mt-5">
            <img src="https://www.spark.co.nz/content/dam/telecomcms/responsive/images/shop/apple/iphone-12-pro/buy-now/buy-now-consumer/iphone12-buy-now-banner-mobile.jpg" class="d-block w-100">
        </div>
        <div class="carousel-item mt-5">
            <img src="https://www.spark.co.nz/content/dam/telecomcms/responsive/images/shop/apple/iphone-12-pro/buy-now/buy-now-consumer/iphone12-buy-now-banner-mobile.jpg" class="d-block w-100">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- End Carousel -->

<!-- Start Search -->
<!-- End Search -->

<!-- Start Card -->
<div class="container">
    <div class="row mt-3 justify-content-center">
        <div class="col-md-5">
            <form action="" method="POST">
                <div class="input-group mt-5">
                    <input type="text" class="form-control" placeholder="Cari product.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-dark" type="submit" name="submit"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                            </svg></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <h1 class="text-center mt-4">Hot Products</h1>
    <div class="row mt-2 justify-content-center">
        <div class="col-sm-4 mt-3">
            <div class="card" style="width: 21rem;">
                <img src="/img/iphone-12-pro.png" class="card-img-top">
                <div class="card-body">
                    <h6 class="card-title">Apple iPhone 12 Pro</h6>
                    <p class="card-text">Rp. 18.499.000,-</p>
                    <a href="#" class="btn btn-primary">Beli Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-3">
            <div class="card" style="width: 21rem;">
                <img src="/img/reno5-pro.png" class="card-img-top">
                <div class="card-body">
                    <h6 class="card-title">Oppo Reno5 Pro 5G</h6>
                    <p class="card-text">Rp. 8.400.000,-</p>
                    <a href="#" class="btn btn-primary">Beli Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-3">
            <div class="card" style="width: 21rem;">
                <img src="/img/mi-10t-pro.png" class="card-img-top">
                <div class="card-body">
                    <h6 class="card-title">Xiaomi Mi 10T Pro 5G</h6>
                    <p class="card-text">Rp. 8.499.000,-</p>
                    <a href="#" class="btn btn-primary">Beli Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Card -->

<!-- Start About Us -->
<div class="bg-dark text-white p-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h5>Garansi Resmi</h5>
                <p>Produk Bergaransi Resmi</p>
            </div>
            <div class="col-sm-3">
                <h5>Layanan Pelanggan</h5>
                <p>Tim Kami Siap Membantu Seputar Produk</p>
            </div>
            <div class="col-sm-3">
                <h5>Jasa Pengiriman Pengiriman Dan Keamanan</h5>
                <p>Terpercaya</p>
            </div>
            <div class="col-sm-3">
                <h5>Keuntungan Belanja</h5>
                <p>Promo dan Info Terkini Produk Gadget Terbaru</p>
            </div>
        </div>
    </div>
</div>
<!-- End About Us -->

<!-- Start Rangkuman -->
<div class="container my-5">
    <div class="row">
        <div class="col-sm">
            <h1>Nameless Store</h1>
            <p>Nameless Store adalah Premium Reseller terkemuka di Indonesia.</p>
            <p>Jika Anda ingin bantuan atau memiliki masukan, silahkan hubungi kami:</p>
            <p>Jam 9:30 - 17:30 (Senin s.d. Jumat)</p>
            <p>Jam 9:30 - 15:00 (Sabtu)</p>
            <p>Email : customercare@nameless.store.com</p>
            <p>Phone : 01234567</p>
            <p>WA : 0812 3456 7890</p>
        </div>
    </div>
</div>
<!-- End Rangkuman -->
<?= $this->endSection(); ?>