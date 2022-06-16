<?php include "templates/include/header.php" ?>
<div class="main">
      <h1>Programme Archive</h1>

      <ul id="headlines" class="archive">

<?php foreach ( $results['programmes'] as $programme ) { ?>

        <li>
          <h2>
            <span class="pubDate"><?php echo date('j F Y', $programme->publicationDate)?></span><a href=".?action=viewProgramme&amp;programmeId=<?php echo $programme->id?>"><?php echo htmlspecialchars( $programme->title )?></a>
          </h2>
          <p class="content"><?php echo htmlspecialchars( $programme->content )?></p>
        </li>

<?php } ?>

      </ul>

      <p><?php echo $results['totalRows']?> programme<?php echo ( $results['totalRows'] != 1 ) ? 's' : '' ?> in total.</p>

      <p><a href="./">Return to Homepage</a></p>
</div>
<?php include "templates/include/footer.php" ?>