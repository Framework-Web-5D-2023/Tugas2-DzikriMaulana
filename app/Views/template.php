<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="Assets/css/style.css">
  <title><?= $title ?></title>
</head>

<body class="d-flex flex-column min-vh-100">

  <header class="p-3 bg-primary text-white">
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <h1>Profil Pribadi</h1>
        <nav class="navbar navbar-expand-lg navbar-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About Us</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>

  <!-- Konten Utama -->
  <?= $this->renderSection('content') ?>

  <main class="flex-grow-1">
    <section class="container">
      <br>
      <br>
      <!-- Konten Profil Anda -->
    </section>
  </main>

  <footer class="p-3 bg-primary text-white sticky-footer">

    <p class="card-text">Anda dapat menghubungi saya melalui:</p>
    <table>
      <tbody>
        <tr>
          <td><img src="Assets/img/email.png" alt="email logo" class="me-2 text-white" width="20px" height="20px">
          </td>
          <td>
            <a href="mailto:dzikrimaulana1781945@gmail.com">dzikrimaulana1781945@gmail.com</a></li>
          </td>
        </tr>
        <tr>
          <td><img src="Assets/img/instagram.png" alt="instagram logo" class="me-2 text-white" width="20px"
              height="20px"></td>
          <td>
            <a href="https://www.instagram.com/dzikrimaulana87/">@Dzikrimaulana87</a>
            </li>
          </td>
        </tr>
        <tr>
          <td><img src="Assets/img/github.png" alt="github logo" class="me-2 text-white" width="20px" height="20px">
          </td>
          <td>
            <a href="https://github.com/dzikrimaulana87">dzikrimaulana87</a></li>
          </td>
        </tr>


      </tbody>
    </table>

  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-wsBDqLbHcfo2eWHNhOnrACrsf6WlcihWxLrOPUKGg6Km6EehFJiGB2BQaNUUd51P"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-fd3ifMzRkX4t2bMT3A7pCKlUpa17tC+UKzvSmqHtLjPD4NhM2I1LWcBEriU2e3Xo"
    crossorigin="anonymous"></script>

</body>

</html>