<header class="page-header">
    <!-- title -->
    <h1 class="outline-section-title">Page Header</h1>
    <!-- navbar -->
    <section class="navbar">
        <h2 class="outline-section-title">Navigation Bar</h2>
        <!-- navbar for phones and tablets -->
        <section class="navbar-left-content">
            <h3 class="outline-section-title">For Tablets</h3>
            <a class="alasdetinta-logo" onclick="myFunction()">
                <span class="navbar-dropmenu-icon" id="caca">☰</span>
            </a>
            <div id="myDropdown" class="dropdown-content">
                <?PHP navbarMenus(1); ?>
            </div>
        </section>
        <!-- navbar for browser -->
        <section class='navbar-links'>
            <h3 class="outline-section-title">For PC</h3>
            <?PHP navbarMenus(0);?>
        </section>
    </section>
</header>

<?php
    function navbarMenus($selector){
        global $db;
        global $language;
        
        //querrys everything from a table
        $query = mysqli_query($db,'SELECT * FROM navbar_menu_item;') 
            or die ("error de consulta");
        $nrows = mysqli_num_rows ($query) or die("no funciona");

        //case 0 for normal navbar
        //case 1 for dropdown menu
        switch($selector){
            case 0:
            for( $i=0 ; $i<$nrows; $i++){
                $res=mysqli_fetch_array($query);
                echo("<a id='".$res["id"]."' href='".$res["link"]."'>".$res[$language]."</a>
            ");
            }
            break;

            case 1:
            for( $i=0 ; $i<$nrows; $i++){
                $res=mysqli_fetch_array($query);
                echo("<a href='".$res["link"]."'>".$res[$language]."</a>
            ");
            }
            break;

            default:
            echo("non valid selector");
        }
    }
?>

<script>
    /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
        if (caca.innerHTML == "☰") caca.innerHTML = "×";
        else caca.innerHTML = "☰";
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function (event) {
        if (!event.target.matches('.alasdetinta-logo')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
            caca.innerHTML = "☰";
        }
    }
</script>
