<?php
	
	$host     = 'localhost';
	$user     = 'root';
  $password = '';
  $db       = 'db_pegawai';
  $db       = 'db_pegawai';
  $port     = '3307';

	$konek = new mysqli($host,$user,$password,$db,$port);
  if ($konek->connect_errno) {
    echo "gagal". $konek->connect_errno;}
  else {
    //echo "berhasil";
  }

  
 ?>
