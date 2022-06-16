<?php include "templates/include/header.php" ?>
<div class="main">
      <div id="adminHeader">
        <h2>Widget News Admin</h2>
        <p>You are logged in as <b><?php echo htmlspecialchars( $_SESSION['username']) ?></b>. <a href="admin.php?action=logout"?>Log out</a></p>
      </div>

      <h1>All Programmes</h1>

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>


<?php if ( isset( $results['statusMessage'] ) ) { ?>
        <div class="statusMessage"><?php echo $results['statusMessage'] ?></div>
<?php } ?>

      <table>
        <tr>
          <th>Publication Date</th>
          <th>Programme</th>
        </tr>

<?php foreach ( $results['programmes'] as $programme ) { ?>

        <tr onclick="location='admin.php?action=editProgramme&amp;programmeId=<?php echo $programme->id?>'">
          <td><?php echo date('j M Y', $programme->publicationDate)?></td>
          <td>
            <?php echo $programme->title?>
          </td>
        </tr>

<?php } ?>

      </table>

      <p><?php echo $results['totalRows']?> programme<?php echo ( $results['totalRows'] != 1 ) ? 's' : '' ?> in total.</p>

      <p><a href="admin.php?action=newProgramme">Add a New Programme</a></p>

      <p><a href="./?action=archive">Programme Archive</a></p>

</div>
<?php include "templates/include/footer.php" ?>