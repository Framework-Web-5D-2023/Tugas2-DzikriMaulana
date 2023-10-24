<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<body class="d-flex flex-column">

  <main class="flex-grow-1">
    <section class="row">
      <div class="col-md-5 d-flex justify-content-end">
        <img src="Assets/img/user.png" alt="Foto profil" height="30%" width="auto" class="padded">
      </div>

      <div class="col-md-6">
        <table class="table">
          <thead>
            <tr>
              <th>Keterangan</th>
              <th>Informasi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Nama</td>
              <td><?= $nama ?></td>
            </tr>
            <tr>
              <td>Tempat lahir</td>
              <td><?= $tempatLahir ?></td>
            </tr>

            <tr>
              <td>Alamat</td>
              <td><?= $alamat ?></td>
            </tr>
            <tr>
              <td>Minat</td>
              <td><?= $minat ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </main>
</body>
<?= $this->endSection() ?>