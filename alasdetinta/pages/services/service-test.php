<!doctype html>

<?PHP 
    require $_SERVER['DOCUMENT_ROOT']."/alasdetinta/php-includes/config.php";
?>

<html>
<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>test</title>
    <link rel="stylesheet" type="text/css" href="../../css/style.css" />    
</head>

<body>

    <?php 
        require $_SERVER['DOCUMENT_ROOT']."/alasdetinta/php-includes/navbar.php";
    ?>
    <script>
        document.getElementById("2").classList.toggle("navbar-active-link");
    </script>

    <main class="page-main table">

    <h3>Ilustraciones por ENCARGO</h3> <br/>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur faucibus vulputate orci, 
    vitae vulputate nulla bibendum ut. Proin nulla turpis, imperdiet at facilisis et, dignissim sit 
    amet ipsum. Etiam sed nibh quis lectus scelerisque pulvinar. Phasellus sapien diam, vestibulum at 
    massa id, eleifend pharetra felis. Nullam ac convallis enim. Integer in nulla ut lorem laoreet 
    imperdiet eu vitae tortor. Ut in ex tincidunt, faucibus nulla nec, mattis ligula.
    </p> <br/>
    <p>Sed ac urna quis metus scelerisque egestas. Donec eget auctor tellus, eget tempor sapien. 
    Maecenas pharetra, lacus at posuere dictum, urna eros fermentum nisl, a gravida orci massa at quam. 
    Etiam lacinia aliquam mauris, quis placerat orci. Donec eleifend quam in nisl vulputate, at congue 
    sem fringilla. Cras cursus risus ligula, sit amet volutpat felis rhoncus ultrices. Sed tincidunt 
    varius gravida. Phasellus a sem quis sem laoreet laoreet nec eu sem. Suspendisse gravida 
    condimentum ex, vel feugiat ligula faucibus ut. Nulla at fringilla arcu. Pellentesque elementum 
    ac quam eget egestas.
    </p>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>

    </main>

    <?php
        require $_SERVER['DOCUMENT_ROOT']."/alasdetinta/php-includes/footer.php";
    ?>

</body>
</html>