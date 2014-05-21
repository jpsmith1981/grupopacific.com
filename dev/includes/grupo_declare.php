<?php
//connect to database
 $c_username = "root";
 $c_password = "root";
 $c_host = "127.0.0.1";
 $c_database = "grupopacific";

    // Connect.
    $connection = mysql_connect($c_host, $c_username, $c_password)
    or die ("It seems this site's database can't connect.");

    mysql_select_db($c_database)
    or die ("It seems this site's database isn't responding.");





//path to employe pics
$empPicDir = "images/grupo_employees/";


//root
//$site_root = "http://grupo.joshuapaulsmith.net/dev/";
$site_root = "http://localhost:8888/grupopacific.com/dev/";

?>