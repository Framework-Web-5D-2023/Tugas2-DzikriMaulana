<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<main class="flex-grow-1">
    <section class="container text-center mt-5">
        <h1>Hello, <?= $nama ?></h1>
        <h2>Selamat Datang di Profil Pribadi Saya</h2>
        <p>Saya adalah seorang yang tertarik dengan keamanan siber dan berbagi pengetahuan tentang hal itu.</p>
        <img src="Assets/img/user.png" alt="Foto profil" class="img-fluid rounded-circle" width="200">
    </section>
</main>

<?= $this->endSection() ?>