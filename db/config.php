<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'bookermarker';

$errorEncountered = false;

$dbs = new mysqli($host, $user, $pass, $dbname);

if ($dbs -> connect_error){
    die('Database Not Configured Properly. Try Reading the UserManual.');
}







/*
DATABASE INFO:

tableName: bookmarks
columns:
name | type 
id | int (PRIMARYKEY)
title | varchar(255)
imageurl | text
page | int(11)

*/



?>