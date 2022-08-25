<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= $data['title'] ?> || PHP Native Fundamental</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?= BASEURL ?>/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container">
    <a class="navbar-brand" href="<?= BASEURL ?>">PHP MVC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
        <a class="nav-link <?= $data['title'] == 'Home'
            ? 'active'
            : '' ?>" href="<?= BASEURL ?>">Home</a>
        <a class="nav-link <?= $data['title'] == 'About'
            ? 'active'
            : '' ?>" href="<?= BASEURL ?>/about">About</a>
        <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
      </div>
    </div>
  </div>
</nav>