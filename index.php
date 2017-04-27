<?php
session_start();
 
// Load the Savant3 class file and create an instance.
require_once 'Savant3.php';
$tpl = new Savant3();
$data = array(
    array("First Name","Last Name","DOB","Address","City","State","Country\n"),
    array("First Name","Last Name","DOB","Address","City","State","Country\n"),
    array("First Name","Last Name","DOB","Address","City","State","Country\n"),
);

$tpl->datas = $data;
$csv = $tpl->fetch("template_generate.tpl.php");

$f = fopen("books.csv","w");
fwrite( $f, $csv );
fclose( $f );
?>