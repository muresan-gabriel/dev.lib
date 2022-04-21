<?php

$dbhost = "db-mysql-fra1-38926-do-user-11402759-0.b.db.ondigitalocean.com";
$dbuser = "doadmin";
$dbpass = "AVNS_w6xwqh1imm37CIE";
$dbname = "defaultdb";
$dbport = "25060"

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $dbport));
{
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
}

