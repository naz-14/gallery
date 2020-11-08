<?php include 'inc/templates/header.php';?>

<?php 
$sectionId = $_GET["id"];
$data = file_get_contents("src/categories.json");
$categories = json_decode($data, true);
?>
<?php if ($sectionId) {
  $picturesArray = $categories[$sectionId];
}?>
<main class="pictures">
  <div class="grid pictures-wrapper content">
    <?php foreach ($picturesArray as $picture) { ?>
      <div class="item">
        <div class="item-content picture-wrapper">
          <a href="<?php echo $picture["fullres"]?>">
            <img src="<?php echo $picture["preview"]?>" alt="<?php echo $picture["alt"]?>" class="picture">
          </a>
        </div>
      </div>
    <?php } ?>
  </div>
</main>

<?php include 'inc/templates/footer.php';?>