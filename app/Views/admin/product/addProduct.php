<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content-admin'); ?>

<!-- Start Card -->
<div class="container">
    <h1 style="margin-top: 70px;">Tambah Product Baru</h1>
    <form action="/admin/saveProduct" method="POST">
        <?= csrf_field(); ?>
        <div class="form-group">
            <label for="brand">Brand</label>
            <select class="custom-select" id="brand" name="brand">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="form-group">
            <label for="type">Type Gadget</label>
            <input type="text" class="form-control" name="type" id="type" aria-describedby="textHelp" autofocus>
            <!-- <small id="textHelp" class="form-text text-muted">We'll never share your text with anyone else.</small> -->
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="int" class="form-control" name="price" id="price" aria-describedby="textHelp">
        </div>
        <div class="form-group">
            <label for="os">Oprasi Sistem</label>
            <input type="text" class="form-control" name="os" id="os">
        </div>
        <div class="form-group">
            <label for="storage">Storage</label>
            <input type="text" class="form-control" name="storage" id="storage" aria-describedby="textHelp">
        </div>
        <div class="form-group">
            <label for="cpu">CPU</label>
            <input type="text" class="form-control" name="cpu" id="cpu" aria-describedby="textHelp">
        </div>
        <div class="form-group">
            <label for="ram">RAM</label>
            <input type="text" class="form-control" name="ram" id="ram" aria-describedby="textHelp">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="image" name="image">
                <label class="custom-file-label" for="image">Choose file</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Product</button>
        <a href="/admin/" class="btn btn-primary">Kembali</a>
    </form>
</div>

<?= $this->endSection(); ?>