<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php wp_title(); ?></title>

  <?php wp_head(); ?>

</head>

<body>
  <div class="wrapper">
    <div class="wrapper">

      <?php wp_nav_menu(); ?>

      <nav class="navbar navbar-expand-lg custom-toggler">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="justify-content-center mx-auto navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link grow" href="#bio">Bio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link grow" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link grow" href="#shows">Shows</a>
            </li>
            <li class="nav-item">
              <a class="nav-link grow" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </nav>

      <?php ?>