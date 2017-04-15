
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- arealaboral
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `arealaboral`;

CREATE TABLE `arealaboral`
(
    `arealaboral_id` INTEGER NOT NULL AUTO_INCREMENT,
    `arealaboral_nombre` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`arealaboral_id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- correo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `correo`;

CREATE TABLE `correo`
(
    `correo_id` INTEGER NOT NULL AUTO_INCREMENT,
    `correo_nombre` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`correo_id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- educacion
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `educacion`;

CREATE TABLE `educacion`
(
    `educacion_id` INTEGER NOT NULL AUTO_INCREMENT,
    `educacion_nombre` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`educacion_id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- empresa
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `empresa`;

CREATE TABLE `empresa`
(
    `empresa_id` INTEGER NOT NULL AUTO_INCREMENT,
    `empresa_nombre` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`empresa_id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- postulante
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `postulante`;

CREATE TABLE `postulante`
(
    `postulante_id` INTEGER NOT NULL AUTO_INCREMENT,
    `vacante_id` INTEGER NOT NULL,
    `arealaboral_id` INTEGER,
    `educacion_id` INTEGER,
    `postulante_correo` VARCHAR(255) NOT NULL,
    `postulante_nombre_completo` VARCHAR(255) NOT NULL,
    `postulante_telefono` VARCHAR(15) NOT NULL,
    `postulante_enlace` VARCHAR(255),
    `postulante_mensaje` VARCHAR(1020) NOT NULL,
    `postulante_curriculum_vitae` VARCHAR(255) NOT NULL,
    `postulante_educacion_estatus` enum('trunco','pasante','titulado','cursando'),
    `postulante_educacion_certificado` enum('si','no'),
    PRIMARY KEY (`postulante_id`),
    INDEX `vacante_id` (`vacante_id`),
    INDEX `arealaboral_id` (`arealaboral_id`),
    INDEX `educacion_id` (`educacion_id`),
    CONSTRAINT `arealaboral_id_postulante`
        FOREIGN KEY (`arealaboral_id`)
        REFERENCES `arealaboral` (`arealaboral_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `educacion_id_postulante`
        FOREIGN KEY (`educacion_id`)
        REFERENCES `educacion` (`educacion_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `vacante_id_postulante`
        FOREIGN KEY (`vacante_id`)
        REFERENCES `vacante` (`vacante_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- sepomex
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `sepomex`;

CREATE TABLE `sepomex`
(
    `sepomex_id` INTEGER NOT NULL AUTO_INCREMENT,
    `sepomex_idestado` smallint(5) unsigned NOT NULL,
    `sepomex_estado` VARCHAR(35) NOT NULL,
    `sepomex_idmunicipio` smallint(5) unsigned NOT NULL,
    `sepomex_municipio` VARCHAR(60) NOT NULL,
    `sepomex_ciudad` VARCHAR(60),
    `sepomex_zona` VARCHAR(15) NOT NULL,
    `sepomex_cp` SMALLINT(9) NOT NULL,
    `sepomex_asentamiento` VARCHAR(70) NOT NULL,
    `sepomex_tipo` VARCHAR(20) NOT NULL,
    PRIMARY KEY (`sepomex_id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- sucursal
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `sucursal`;

CREATE TABLE `sucursal`
(
    `sucursal_id` INTEGER NOT NULL AUTO_INCREMENT,
    `empresa_id` INTEGER NOT NULL,
    `sepomex_id` INTEGER,
    `sucursal_nombre` VARCHAR(45),
    `sucursal_calle_numero` VARCHAR(45),
    PRIMARY KEY (`sucursal_id`),
    INDEX `empresa_id` (`empresa_id`),
    INDEX `sepomex_id` (`sepomex_id`),
    CONSTRAINT `empresa_id_sucursal`
        FOREIGN KEY (`empresa_id`)
        REFERENCES `empresa` (`empresa_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `sepomex_id_sucursal`
        FOREIGN KEY (`sepomex_id`)
        REFERENCES `sepomex` (`sepomex_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- usuario
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario`
(
    `usuario_id` INTEGER NOT NULL AUTO_INCREMENT,
    `usuario_nombre` VARCHAR(45) NOT NULL,
    `usuario_contrasena` VARCHAR(16) NOT NULL,
    PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- vacante
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `vacante`;

CREATE TABLE `vacante`
(
    `vacante_id` INTEGER NOT NULL AUTO_INCREMENT,
    `sucursal_id` INTEGER NOT NULL,
    `vacante_nombre` VARCHAR(255) NOT NULL,
    `vacante_descripcion` VARCHAR(1020) NOT NULL,
    `vacante_horario` VARCHAR(250) NOT NULL,
    `vacante_sueldo` DECIMAL(10,2),
    `vacante_sueldo_tipo_pago` enum('semanal','quincenal','mensual'),
    `vacante_candidatos` INTEGER DEFAULT 0,
    `vacante_fecha_inicia` DATETIME,
    `vacante_fecha_termina` DATETIME,
    `vacante_visitas` INTEGER DEFAULT 0,
    `vacante_estatus` enum('activo','inactivo') DEFAULT 'inactivo' NOT NULL,
    `vacante_fecha` DATETIME,
    PRIMARY KEY (`vacante_id`),
    INDEX `sucursal_id` (`sucursal_id`),
    CONSTRAINT `sucursal_id_vacante`
        FOREIGN KEY (`sucursal_id`)
        REFERENCES `sucursal` (`sucursal_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- vacantecorreo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `vacantecorreo`;

CREATE TABLE `vacantecorreo`
(
    `vacantecorreo_id` INTEGER NOT NULL AUTO_INCREMENT,
    `vacante_id` INTEGER NOT NULL,
    `correo_id` INTEGER NOT NULL,
    PRIMARY KEY (`vacantecorreo_id`),
    INDEX `vacante_id` (`vacante_id`),
    INDEX `correo_id` (`correo_id`),
    CONSTRAINT `correo_id_vacantecorreo`
        FOREIGN KEY (`correo_id`)
        REFERENCES `correo` (`correo_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `vacante_id_vacantecorreo`
        FOREIGN KEY (`vacante_id`)
        REFERENCES `vacante` (`vacante_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
