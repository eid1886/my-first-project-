<?php


$c = mysqli_connect('localhost','root','1234','users');


if (!$c){
    echo 'FAIL';
}