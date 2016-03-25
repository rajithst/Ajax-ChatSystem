<?php


$host= 'localhost';
$user='root';
$pass='';
$dbname='chat';

$con=new mysqli($host,$user,$pass,$dbname);

function formatdate($date){
    return date('g:i a',strtotime($date));
}


?>