<!doctype html>

<?PHP 
    require "../php-includes/config.php";
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
        include "../php-includes/navbar.php";
    ?>
    <script>
        document.getElementById("4").classList.toggle("navbar-active-link");
    </script>

    <?php
        require "../php-includes/footer.php";
    ?>

</body>
</html>