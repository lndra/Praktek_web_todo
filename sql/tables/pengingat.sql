CREATE TABLE `db_pekerjaan_rumah`.`pengingat` ( 
    `id_pengingat` INT NOT NULL AUTO_INCREMENT ,
    `id_mata_kuliah` INT NOT NULL ,
    `deskripsi` TEXT NOT NULL ,
    `deadline` DATE NOT NULL ,
    `selesai` BOOLEAN NOT NULL ,
    PRIMARY KEY (`id_pengingat`)) ENGINE = InnoDB;