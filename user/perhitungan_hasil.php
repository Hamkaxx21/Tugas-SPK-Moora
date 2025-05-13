<?php
//-- query untuk mendapatkan semua data kriteria di tabel moo_kriteria
$sql = 'SELECT * FROM moo_kriteria';
$result = $konek->query($sql);
//-- menyiapkan variable penampung berupa array
$kriteria=array();
//-- melakukan iterasi pengisian array untuk tiap record data yang didapat
foreach ($result as $row) {
   $kriteria[$row['id_kriteria']]=array($row['kriteria'],$row['type'],$row['bobot']);
}

//-- query untuk mendapatkan semua data kriteria di tabel moo_alternatif
$sql = 'SELECT * FROM moo_alternatif';
$result = $konek->query($sql);
//-- menyiapkan variable penampung berupa array
$alternatif=array();
//-- melakukan iterasi pengisian array untuk tiap record data yang didapat
foreach ($result as $row) {
   $alternatif[$row['id_alternatif']] = array(
     $row['id_alternatif'],
     $row['namapegawai'],
     $row['gaji_bulanan'],
     $row['hari_sakit'],
     $row['jam_kerja'],
     $row['jumlah_proyek'],
     $row['jam_lembur'],
     $row['jam_training'],
   );
   
}

foreach ($result as $row) {
   $id_pegawai[$row['id_pegawai']] = array(
     $row['id_pegawai'],
   );
   
}

//-- query untuk mendapatkan semua data sample penilaian di tabel moo_nilai
$sql = 'SELECT * FROM moo_nilai ORDER BY Id_alternatif, Id_kriteria';
$result = $konek->query($sql);
//-- menyiapkan variable penampung berupa array
$sample=array();
//-- melakukan iterasi pengisian array untuk tiap record data yang didapat
foreach ($result as $row) {
   //-- jika array $sample[$row['Id_alternatif']] belum ada maka buat baru
   //-- $row['Id_alternatif'] adalah id kandidat/alternatif
   if (!isset($sample[$row['Id_alternatif']])) {
      $sample[$row['Id_alternatif']] = array();
   }
   $sample[$row['Id_alternatif']][$row['Id_kriteria']] = $row['nilai'];
}

//-- inisialisasi nilai normalisasi dengan nilai dari $sample
$normal = $sample;
foreach($kriteria as $id_kriteria=>$k){
   //-- inisialisasi nilai pembagi tiap kriteria
   $pembagi=0;
   foreach($alternatif as $id_alternatif=>$a){
      $pembagi+=pow($sample[$id_alternatif][$id_kriteria],2);
   }
   foreach($alternatif as $id_alternatif=>$a){
      $normal[$id_alternatif][$id_kriteria]/=sqrt($pembagi);
   }
}
//-- menyiapkan variabel untuk menyimpan data yang sudah dioptimasi
$optimasi=array();
foreach($alternatif as $id_alternatif=>$a){
   $optimasi[$id_alternatif] = 0;
   foreach($kriteria as $id_kriteria => $k){
     $optimasi[$id_alternatif] += $normal[$id_alternatif][$id_kriteria] * ($k[1] == 'Benefit' ? 1 : -1) * $k[2]/100;
   }
}
?>
