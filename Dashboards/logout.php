<?php

session_start();

$_SESSION = array();

if(isset($_COOKIE[session_name()])){
    setcookie(session_name(), '', time()-1000, '/');
}

session_destroy();

header('Location: ../php/Login.Php');

?>