<?php
	
	$host     = 'localhost';
	$user     = 'root';
  $password = '';
  $db       = 'db_pegawai';
  $db       = 'db_pegawai';

	$konek = new mysqli($host,$user,$password,$db);
  if ($konek->connect_errno) {
    echo "gagal". $konek->connect_errno;}
  else {
    //echo "berhasil";
  }

  
 ?>
