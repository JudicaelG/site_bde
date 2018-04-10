<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BDE eXia.Cesi Strasbourg</title>
</head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../public/css/styleAccueil.css">
<body>

<header>
    <h1>Bienvenue sur le site du BDE</h1>
</header>

<div id="corps">
    @include('menu')

    <div id="evenement">

        <div class="future">
            <h3>Futures événements:</h3>
            <?php //include("displayEventFuture"); ?>
        </div>
        <div class="passer">
            <h3>Evénements passé:</h3>
            <?php //include("displayEventPasser"); ?>
        </div>
        <div class="boite_idee">
            <h3>Boite à idée:</h3>
            <?php //include("displayIdee"); ?>
        </div>
    </div>

    @include("footer")
</div>
</body>
</html>