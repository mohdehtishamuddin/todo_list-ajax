<?php
session_start();
ob_start();
if(!isset($_SESSION['complete-todo'])){
    $_SESSION ['complete-todo'] = array();
}
if($_SERVER['REQUEST_METHOD']=="POST")
foreach ($_SESSION['todo'] as $key => $value) {
    if(($key==$_POST['chk'])&&($key>=0)){
        array_push($_SESSION['complete-todo'],$value);
        array_splice($_SESSION['todo'],$key,1);
    }
    header('Location:index.php');
    die();
}


?>