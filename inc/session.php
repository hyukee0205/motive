<?php
session_start();
// isset(  조건   )?  값1 : 값2;
$s_idx =  isset($_SESSION["s_idx"])?  $_SESSION["s_idx"] : "";
$s_name =  isset($_SESSION["s_name"])? $_SESSION["s_name"] : "";
$s_id =  isset($_SESSION["s_id"])? $_SESSION["s_id"] : "";
$s_mobile =  isset($_SESSION["s_mobile"])? $_SESSION["s_mobile"] : "";
$s_email =  isset($_SESSION["s_email"])? $_SESSION["s_email"] : "";
$s_addr =  isset($_SESSION["s_addr"])? $_SESSION["s_addr"] : "";
?>