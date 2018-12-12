<!doctype html>

<?PHP require "../php-includes/config.php"; ?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>

<body class="table">

    <!-- HEADER -->
    <?php 
        require "../php-includes/navbar.php";
    ?>

    <script>
        //tells the browser which one is the active link
        document.getElementById("1").classList.toggle("navbar-active-link");
    </script>
    <!-- /HEADER -->


    <!-- CONTENT -->
    <main class="page-main">
    <h1 class="outline-section-title">Main Content</h1>
        <picture>
            <source media="(max-width: 465px)" srcset="../images/logo-alasdetinta-vertical.png">
            <img src="../images/logo_alasdetinta-horizontal@4x.png" alt="alasdetinta logo">
        </picture>
    </main>
    <!-- /CONTENT -->


    <!-- FOOTER -->
    <?php
        require "../php-includes/footer.php";
    ?>
    <!-- /FOOTER -->

</body>

</html>