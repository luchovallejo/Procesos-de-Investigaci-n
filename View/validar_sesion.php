<?php
session_start();
$u = @$_SESSION["investigador.login"];
$u = @unserialize($u);
if(!$u){
    $urlBase = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']."../View/login.php";
    header("Location: $urlBase");
    exit;
}