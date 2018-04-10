<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <title>Boutique du BDE</title>

    <link rel="stylesheet" type="text/css" href="../public/css/barreDeNavigation.css">
    <link rel="stylesheet" type="text/css" href="../public/css/boutique.css">


</head>
<body>

    <div id="fondBoutique">
        <p id="titreFondBoutique">Boutique BDE</p>
    </div>

    @include('menu')

    <div id="meilleuresVentes">
        <p>Meilleures Ventes</p>
        <div class="imgMeilleuresVentes">
            <div class="produits"><img src="http://vision.gel.ulaval.ca/~jflalonde/cours/4105/h15/tps/results/tp2/SEBEL83/images/lena.jpg"></div>
            <div class="produits"><img src="https://cdn.pixabay.com/photo/2013/04/06/11/50/image-editing-101040_1280.jpg"></div>
            <div class="produits"><img src="https://cdn.pixabay.com/photo/2016/06/18/17/42/image-1465348_1280.jpg"></div>
        </div>
    </div>

    <div id="meilleursArticlesBDE">
        <p>Meilleurs Produits BDE</p>
        <div class="imgMeilleuresVentes">
            <div class="produits"><img src="../public/img/mugBDE.png"></div>
            <div class="produits"><img src="../public/img/poloBDE.png"></div>
            <div class="produits"><img src="../public/img/casquetteBDE.png"></div>
        </div>
    </div>

    <footer>
        Footer
    </footer>
</body>
</html>