<?php 
$search = $_GET["search"];
$data = file_get_contents("src/categories.json");
$pictures = json_decode($data, true);
$picturesFilter = [];
?>
<?php
foreach ($pictures['pictures'] as $key=>$picture) {
  foreach ($picture['tags'] as  $tag) {
    if ($tag == $search || $picture['category'] == $search) {
      array_push($picturesFilter,$key);
      break 1;
    }
  }
}
$picturesResult = [];
foreach ($picturesFilter as $value) {
  array_push($picturesResult,$pictures['pictures'][$value]);
}
?>
<?php include 'inc/templates/header.php';?>
<div class="content-wrapper">
  <div class="loading">
    <h1>Loading images...</h1>
  </div>
  <main class="pictures">
    <?php if (sizeof($picturesResult) != 0) { ?>
      <div class="grid pictures-wrapper content">
      <?php foreach ($picturesResult as $picture) { ?>
        <div class="item">
          <div class="item-content picture-wrapper">
            <a href="<?php echo $picture["fullres"]?>">
              <picture>
              <source srcset="<?php echo $picture["preview_webp"]?>" type="image/webp">
              <img src="<?php echo $picture["preview"]?>" alt="<?php echo $picture["alt"]?>" class="picture">
              </picture>
            </a>
          </div>
        </div>
      <?php } ?>
    </div>
    <?php }else { ?>
      <div class="content pictures-not-found-wrapper">
        <h2 class="pictures-not-found-text">Pictures not found<br>Please try with other tags</h2>
        <h2>OR</h2>
        <a href="/" class="link-to-categories">Watch categories here</a>
      </div>
    <?php } ?>
  </main>
</div>

<?php include 'inc/templates/footer.php';?>