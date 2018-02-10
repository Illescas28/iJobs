
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- areaslaborales
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `areaslaborales`;

CREATE TABLE `areaslaborales`
(
    `arealaboral_id` INTEGER NOT NULL AUTO_INCREMENT,
    `arealaboral_clave` VARCHAR(45) NOT NULL,
    `arealaboral_nombre` VARCHAR(255) NOT NULL,
    `arealaboral_fecha_alta` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `arealaboral_usuario_alta` INTEGER NOT NULL,
    `arealaboral_fecha_modifica` DATETIME,
    `arealaboral_usuario_modifica` INTEGER,
    PRIMARY KEY (`arealaboral_id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- educacion
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `educacion`;

CREATE TABLE `educacion`
(
    `educacion_id` INTEGER NOT NULL AUTO_INCREMENT,
    `educacion_nombre` VARCHAR(45) NOT NULL,
    `educacion_descripcion` TEXT,
    `educacion_fecha_alta` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `educacion_usuario_alta` INTEGER NOT NULL,
    `educacion_fecha_modifica` DATETIME,
    `educacion_usuario_modifica` INTEGER,
    PRIMARY KEY (`educacion_id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- empresacontactos
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `empresacontactos`;

CREATE TABLE `empresacontactos`
(
    `empresacontacto_id` INTEGER NOT NULL AUTO_INCREMENT,
    `empresa_id` INTEGER NOT NULL,
    `empresacontacto_nombre` VARCHAR(255) NOT NULL,
    `empresacontacto_email` VARCHAR(255) NOT NULL,
    `empresacontacto_telefono` VARCHAR(45),
    `empresacontacto_movil` VARCHAR(45),
    `empresacontacto_fecha_alta` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `empresacontacto_usuario_alta` INTEGER NOT NULL,
    `empresacontacto_fecha_modifica` DATETIME,
    `empresacontacto_usuario_modifica` INTEGER,
    PRIMARY KEY (`empresacontacto_id`),
    INDEX `empresa_id` (`empresa_id`),
    CONSTRAINT `empresa_id_empresacontratos`
        FOREIGN KEY (`empresa_id`)
        REFERENCES `empresas` (`empresa_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- empresas
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `empresas`;

CREATE TABLE `empresas`
(
    `empresa_id` INTEGER NOT NULL AUTO_INCREMENT,
    `empresa_nombre` VARCHAR(255) NOT NULL,
    `empresa_logo_url` TEXT,
    `empresas_razon_social` VARCHAR(255),
    `empresa_rfc` VARCHAR(45),
    `empresa_direccion_fiscal` TEXT,
    `empresa_estatus` TINYINT(1) DEFAULT 1 NOT NULL,
    `empresa_fecha_alta` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `empresa_usuario_alta` INTEGER NOT NULL,
    `empresa_fecha_actualiza` DATETIME,
    `empresa_usuario_modifica` INTEGER,
    PRIMARY KEY (`empresa_id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- postulantes
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `postulantes`;

CREATE TABLE `postulantes`
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
    `postulante_cv_url` TEXT NOT NULL,
    `postulante_educacion_estatus` enum('trunco','pasante','titulado','cursando'),
    `postulante_educacion_certificado` TINYINT(1),
    `postulante_estatus` TINYINT(1) DEFAULT 1 NOT NULL,
    `postulante_fecha_alta` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `postulante_usuario_alta` INTEGER NOT NULL,
    `postulante_fecha_modifica` DATETIME,
    `postulante_usuario_modifica` INTEGER,
    PRIMARY KEY (`postulante_id`),
    INDEX `vacante_id` (`vacante_id`),
    INDEX `arealaboral_id` (`arealaboral_id`),
    INDEX `educacion_id` (`educacion_id`),
    CONSTRAINT `arealaboral_id_postulante`
        FOREIGN KEY (`arealaboral_id`)
        REFERENCES `areaslaborales` (`arealaboral_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `educacion_id_postulante`
        FOREIGN KEY (`educacion_id`)
        REFERENCES `educacion` (`educacion_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `vacante_id_postulante`
        FOREIGN KEY (`vacante_id`)
        REFERENCES `vacantes` (`vacante_id`)
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
-- sucursales
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `sucursales`;

CREATE TABLE `sucursales`
(
    `sucursal_id` INTEGER NOT NULL AUTO_INCREMENT,
    `empresa_id` INTEGER NOT NULL,
    `sepomex_id` INTEGER,
    `sucursal_nombre` VARCHAR(45),
    `sucursal_calle_numero` VARCHAR(45),
    `sucursal_fecha_alta` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `sucursal_usuario_alta` INTEGER NOT NULL,
    `sucursal_fecha_modifica` DATETIME,
    `sucursal_usuario_modifica` INTEGER,
    PRIMARY KEY (`sucursal_id`),
    INDEX `empresa_id` (`empresa_id`),
    INDEX `sepomex_id` (`sepomex_id`),
    CONSTRAINT `empresa_id_sucursal`
        FOREIGN KEY (`empresa_id`)
        REFERENCES `empresas` (`empresa_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `sepomex_id_sucursal`
        FOREIGN KEY (`sepomex_id`)
        REFERENCES `sepomex` (`sepomex_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- usuarios
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios`
(
    `usuario_id` INTEGER NOT NULL AUTO_INCREMENT,
    `empresa_id` INTEGER,
    `postulante_id` INTEGER,
    `usuario_contrasena` VARCHAR(16) NOT NULL,
    `usuario_fecha_alta` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `usuario_usuario_alta` INTEGER NOT NULL,
    `usuario_fecha_modifica` DATETIME,
    `usuario_usuario_modifica` INTEGER,
    PRIMARY KEY (`usuario_id`),
    INDEX `empresa_id` (`empresa_id`),
    INDEX `postulante_id` (`postulante_id`),
    CONSTRAINT `empresa_id`
        FOREIGN KEY (`empresa_id`)
        REFERENCES `empresas` (`empresa_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `postulante_id`
        FOREIGN KEY (`postulante_id`)
        REFERENCES `postulantes` (`postulante_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- vacantes
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `vacantes`;

CREATE TABLE `vacantes`
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
    `vacante_fecha_alta` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `vacante_usuario_alta` INTEGER NOT NULL,
    `vacante_fecha_modifica` DATETIME,
    `vacante_usuario_modifica` INTEGER,
    PRIMARY KEY (`vacante_id`),
    INDEX `sucursal_id` (`sucursal_id`),
    CONSTRAINT `sucursal_id_vacante`
        FOREIGN KEY (`sucursal_id`)
        REFERENCES `sucursales` (`sucursal_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
