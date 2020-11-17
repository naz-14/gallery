<?php 
  include 'inc/templates/header.php';
  $data = file_get_contents("src/categories.json");
  $categories = json_decode($data, true);
  $categoriesArray = $categories["categories"];
?>
  <div class="content-wrapper">
    <section class="navegation content">
      <nav class="site-nav">
        <ul class="site-nav__ul content">
          <li class="site-nav__close-btn"><img src="img/btn-close.svg" alt=""></li>
          <li class="site-nav__li"><a href="index.php" class="site-nav__link link">Discover</a></li>
          <li class="site-nav__li"><a href="pictures.php?search=recomended" class="site-nav__link link">Recomended</a></li>
          <li class="site-nav__li"><a href="pictures.php?search=popular" class="site-nav__link link">Most popular</a></li>
        </ul>
      </nav>
      <button class="hamburger-button">
        <img src="img/hamburger.svg" alt="hamburger">
      </button>
    </section>
    <main class="site-main categories">
      <div class="site-main__wrapper content">
        <?php foreach ($categoriesArray as $category) {?>
        <div class="site-main__galery-section">
          <a href="pictures.php?search=<?php echo $category["name"]?>" class="site-main__galery-section-link">
            <div class="site-main__section-preview-wrapper">
              <picture>
                <source srcset="<?php echo $category["preview_webp"]?>" type="image/webp">
                <img src="<?php echo $category["preview"] ?>" alt="section-preview" class="site-main__section-preview">
              </picture>
              <h2 class="section-title"><?php echo $category["name"]?></h2>
            </div>
          </a>
        </div>
        <?php } ?>
      </div>
    </main>
  </div>
<?php include 'inc/templates/footer.php'?>