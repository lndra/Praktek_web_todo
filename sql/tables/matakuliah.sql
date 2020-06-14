CREATE TABLE `db_pekerjaan_rumah`.`matakuliah` (
  `id_matakuliah` INT NOT NULL AUTO_INCREMENT ,
  `nama_matakuliah` VARCHAR(200) NOT NULL ,
  `singkatan_matakuliah` VARCHAR(9) NOT NULL ,
  `nama_dosen` VARCHAR(200) NOT NULL ,
  `kontak_dosen` VARCHAR(200) NOT NULL ,
  `aktif` BOOLEAN NOT NULL ,
  PRIMARY KEY (`id_matakuliah`)) ENGINE = InnoDB;
