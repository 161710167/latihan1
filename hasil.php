<?php

require_once 'absen.php';

$absen = new absen ('yeni','161710167','xi-rpl 1');

echo"nama =".$absen->get_nama()."<br>";
echo"tempat =".$absen->get_nis()."<br>";
echo"kelas =".$absen->get_kelas()."<br>";


?>