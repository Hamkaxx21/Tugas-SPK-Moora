ALTER TABLE kriteriapendidikan RENAME TO kriteriajumlahproyek;
ALTER TABLE kriteriajumlahproyek RENAME COLUMN id_pendidikan TO id_proyek;
ALTER TABLE kriteriajumlahproyek RENAME COLUMN pendidikan TO jumlah_proyek;
