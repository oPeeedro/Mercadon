<?php
    //require '../Mercadon-v2/Mercadon/lsb/stg.php';
    
    $config = array($host = "localhost",  
                   $user = "root",  
                   $password = 'Pedro2203*',  
                   $db_name = "mercadon");

    //steganize($config);
      
    $con = mysqli_connect($host, $user, $password,$db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  