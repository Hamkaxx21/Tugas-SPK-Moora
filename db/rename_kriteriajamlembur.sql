ALTER TABLE kriteriaratanilai RENAME TO kriteriajamlembur;
ALTER TABLE kriteriajamlembur RENAME COLUMN id_ratanilai TO id_lembur;
ALTER TABLE kriteriajamlembur RENAME COLUMN rata_nilai TO jam_lembur;
