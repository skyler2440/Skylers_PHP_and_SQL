<?php
//connect to database handler if you are inputting to a database.
require 'incl/dbh.incl.php';
//Set form variable to empty
$fnm = $lnm = $eml = $phn = $cmt ="";

//get form data

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fnm = ($_POST["fnm"]);
    $lnm = ($_POST["lnm"]);
    $eml = ($_POST["eml"]);
    $phn = ($_POST["phn"]);
    $cmt = ($_POST["cmt"]);
}
$sqlCreate = `CREATE DATABASE IF NOT EXISTS 'LOGIN';`;
