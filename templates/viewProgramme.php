<?php include "templates/include/header.php" ?>
<div class="main">
      
      <h1 style="width: 75%;"><?php echo htmlspecialchars( $results['programme']->title )?></h1>
      <div style="width: 75%; font-style: italic;"><?php echo htmlspecialchars( $results['programme']->content )?></div>
      <p class="pubDate">Published on <?php echo date('j F Y', $results['programme']->publicationDate)?></p>

      <p><a href="./">Return to Homepage</a></p>
</div>
<?php include "templates/include/footer.php" ?>