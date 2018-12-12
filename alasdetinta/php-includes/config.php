<?PHP 
    //connect to db
    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $db = mysqli_connect( $servername , $username , $password ,'alasdetinta_db')
    or die('Error connecting to MySQL server.');

    //language
    $language = "name_esp";
?>