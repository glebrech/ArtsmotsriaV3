<?php include "templates/include/header.php" ?>
<div class="main">
    <div id="adminHeader">
        <h2>Widget News Admin</h2>
        <p>You are logged in as <b><?php echo htmlspecialchars( $_SESSION['username']) ?></b>. <a
                href="admin.php?action=logout" ?>Log out</a></p>
    </div>

    <h1><?php echo $results['pageTitle']?></h1>

    <form action="admin.php?action=<?php echo $results['formAction']?>" method="post">
        <input type="hidden" name="programmeId" value="<?php echo $results['programme']->id ?>" />

        <?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
        <?php } ?>

        <ul>

            <li>
                <label for="title">Programme Title</label>
                <input type="text" name="title" id="title" placeholder="Name of the programme" required autofocus
                    maxlength="255" value="<?php echo htmlspecialchars( $results['programme']->title )?>" />
            </li>

            <li>
                <label for="url_image">Programme URL de l'image</label>
                <textarea name="url_image" id="url_image" placeholder="Brief description of the programme" required
                    maxlength="1000"
                    style="height: 5em;"><?php echo htmlspecialchars( $results['programme']->url_image )?></textarea>
            </li>

            <li>
                <label for="content">Programme Content</label>
                <textarea name="content" id="content" placeholder="The HTML content of the programme" required
                    maxlength="100000"
                    style="height: 30em;"><?php echo htmlspecialchars( $results['programme']->content )?></textarea>
            </li>

            <li>
                <label for="publicationDate">Publication Date</label>
                <input type="date" name="publicationDate" id="publicationDate" placeholder="YYYY-MM-DD" required
                    maxlength="10"
                    value="<?php echo $results['programme']->publicationDate ? date( "Y-m-d", $results['programme']->publicationDate ) : "" ?>" />
            </li>


        </ul>

        <div class="buttons">
            <input type="submit" name="saveChanges" value="Save Changes" />
            <input type="submit" formnovalidate name="cancel" value="Cancel" />
        </div>

    </form>

    <?php if ( $results['programme']->id ) { ?>
    <p><a href="admin.php?action=deleteProgramme&amp;programmeId=<?php echo $results['programme']->id ?>"
            onclick="return confirm('Delete This Programme?')">Delete This Programme</a></p>
    <?php } ?>
</div>
<?php include "templates/include/footer.php" ?>