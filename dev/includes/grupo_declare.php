<?
//connect to database
 $c_username = "jpsmith1981";
 $c_password = "Mander1ne";
 $c_host = "mysql.thecodemonkey.biz";
 $c_database = "thecodemonkey";

    // Connect.
    $connection = mysql_connect($c_host, $c_username, $c_password)
    or die ("It seems this site's database can't connect.");

    mysql_select_db($c_database)
    or die ("It seems this site's database isn't responding.");





//path to employe pics
$empPicDir = "images/grupo_employees/";


//root
$site_root = "http://grupo.joshuapaulsmith.net/dev/";
?>