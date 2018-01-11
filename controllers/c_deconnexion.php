<?php

if(isset($_SESSION['logged'])){
    $_SESSION = array();
    session_destroy();
    header("Location: index.php");
}