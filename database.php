<?php
error_reporting(1);
$server = "localhost";
$username = "root";
$password = "pass123";
$link = new mysqli($server,$username,$password);

$link->query("CREATE DATABASE IF NOT EXISTS FormBuilder;");
$link->commit();

$link->query("USE FormBuilder;");
$link->commit();

$link->query("CREATE TABLE IF NOT EXISTS UserDets (
    UN varchar(25) NOT NULL,
    PW varchar(20) NOT NULL
);");
$link->commit();

$link->query("CREATE TABLE IF NOT EXISTS FormList (
    FormName varchar(25),
    FormURL varchar(50),
    FormOwner varchar(25),
    FormDesc varchar(200)); ");
$link->commit();
$link->close();

mkdir("FormPages");
?>