<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Welcome to <?= $setting['school_name'] ?></title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href=<?= BURL . "assets/css/style.css" ?>>
      <link rel="icon" href=<?= BURL . "assets/images/logo.png" ?>>
</head>


<body class="body-home">
      <div class="black-fill"><br /> <br />
            <div class="container">
                  <nav class="navbar navbar-expand-lg bg-light" id="homeNav">
                        <div class="container-fluid">
                              <a class="navbar-brand" href=<?= url();?>>
                                    <img src=<?= BURL . "assets/images/logo.png" ?> width="40">
                              </a>
                              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                          <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href=<?= url(); ?>>Home</a>
                                          </li>
                                          <li class="nav-item">
                                                <a class="nav-link" href="#about">About</a>
                                          </li>
                                          <li class="nav-item">
                                                <a class="nav-link" href="#contact">Contact</a>
                                          </li>
                                    </ul>
                                    <ul class="navbar-nav me-right mb-2 mb-lg-0">
                                          <li class="nav-item">
                                                <a class="nav-link" href=<?= url('login/index') ?>>Login</a>
                                          </li>
                                    </ul>
                              </div>
                        </div>
                  </nav>