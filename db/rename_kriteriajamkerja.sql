ALTER TABLE kriteriatanggungan RENAME TO kriteriajamkerja;
ALTER TABLE kriteriajamkerja RENAME COLUMN id_tanggungan TO id_kerja;
ALTER TABLE kriteriajamkerja RENAME COLUMN tanggungan TO jam_kerja;
