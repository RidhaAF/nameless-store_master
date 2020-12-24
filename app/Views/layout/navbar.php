<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Nama kita</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <a class="nav-link" href="/">Home</a>
                <a class="nav-link" href="/pages/about">About</a>
                <a class="nav-link" href="/pages/contact">Contact</a>
                <a class="nav-link" href="/komik">Komik</a>
                <a class="nav-link" href="/orang">orang</a>
            </ul>
        </div>
        <?php if (logged_in()) :  ?>
            <a class="nav-link" href="/logout">logout</a>
        <?php else : ?>
            <a class="nav-link" href="/login">login</a>
        <?php endif;  ?>


    </div>
</nav>