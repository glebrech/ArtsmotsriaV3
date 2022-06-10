<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo htmlspecialchars( $results['pageTitle'] )?></title>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div class="header brown">
        <div>
            <img id="logo" src="images/Logo_bleu.png" alt="logo" />
        </div>

        <div class=margenav>
            <div class="nav">
                <p>Accueil</p>
            </div>
            <div class="nav">
                <p>Programmation</p>
            </div>
            <div class="nav">
                <p>Infos Pratiques</p>
            </div>
            <div class="nav">
                <p>Contact</p>
            </div>

            <div>

                <button type="button" class="btn headerBouton"><img src="images/billet.png" />Billeterie</button>
            </div>
            <div>
                <button type="button" class="btn headerBouton"><img src="images/compte.png" />Mon compte</button>
            </div>
        </div>
    </div>