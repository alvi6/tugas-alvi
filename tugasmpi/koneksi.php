<?php
session_start();
class koneksi{
    function getkoneksi(){
$db = mysqli_connect("localhost","root","","data_siswaa");

return new PDO("mysql:host=localhost;dbname=data_siswaa","root","");
    }

}