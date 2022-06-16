<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo ( $results['pageTitle'] )?></title>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <div class="header brown">
        
            <img id="logo" src="images/Logo_bleu.png" alt="logo" />
        

        <div class=margenav>
            <div class="nav">
            <a href="./?action=homepage" <?php if(isset($_GET["action"])) {if($_GET["action"]=="homepage" ){echo "class='select'";}} else {echo"class='select'";} ?> >Accueil</a>
            </div>
            <div class="nav">
            <a href="./?action=programmation" <?php if(isset($_GET["action"])) {if($_GET["action"]=="programmation"){echo "class='select'";}} ?>>Programmation</a>
            </div>
            <div class="nav">
            <a href="./?action=infos" <?php if(isset($_GET["action"])) {if($_GET["action"]=="infos"){echo "class='select'";}} ?>>Infos pratiques</a>
            </div>
            <div class="nav">
            <a href="./?action=contact" <?php if(isset($_GET["action"])) {if($_GET["action"]=="contact"){echo "class='select'";}} ?>>Contact</a>
            </div>

            <div>

                <button type="button" class="btn headerBouton"><img src="images/billet.png" />Billeterie</button>
            </div>
            <div>
                
                <a href="admin.php" type="button" class="btn headerBouton"><img src="images/compte.png" />Mon compte</a>
            </div>
        </div>
    </div>

    <main>