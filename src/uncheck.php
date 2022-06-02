<?php
session_start();
ob_start();
if($_SERVER['REQUEST_METHOD'=='POST'])
foreach ($SESSION['todo'] as $key => $value) {
    if(($key==$_POST['unchk'])&&($key>=0)){
        array_push($_SESSION['complete-todo'],$value);
        array_splice($_SESSION['todo'],$key,1);
    }
}
?>