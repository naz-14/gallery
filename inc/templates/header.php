<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/styles.css">
  
  <title>Galery</title>
</head>
<body>
  <header class="site-header">
    <div class="site-header__wrapper content">
      <div class="site-header__logo-wrapper">
        <a class="site-header__logo-link" href="/"><h1 class="site-header__logo">Gallery</h1></a>
      </div>
      <div class="site-header__search-form-wrapper">
        <form action="pictures.php" method="get" class="site-header__search-form">
          <input type="text" name="search" placeholder="search" id="searchInput" class="site-header__search-input">
          <button class="site-header__search-submit"><img class="go-icon" src="img/go.svg" alt="go icon"></button>
        </form>
      </div>
    </div>
  </header>