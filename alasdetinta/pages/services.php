<!doctype html>

<?PHP 
    require $_SERVER['DOCUMENT_ROOT']."/alasdetinta/php-includes/config.php";
?>

<html>
<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" />    
</head>

<body>

    <?php 
        require $_SERVER['DOCUMENT_ROOT']."/alasdetinta/php-includes/navbar.php";
    ?>
    <script>
        document.getElementById("2").classList.toggle("navbar-active-link");
    </script>

    <main class="page-main table">
        <div class="tr hcenter">
            <a class="td" href="#">DESIGN</a>
            <a class="td" href="services/service-test.php">ILLUSTRATION</a>
            <a class="td" href="#">PHOTO</a>
        </div>
    </main>

    <?php
        require $_SERVER['DOCUMENT_ROOT']."/alasdetinta/php-includes/footer.php";
    ?>

</body>
</html>