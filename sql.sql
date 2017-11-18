-- MySQL Script generated by MySQL Workbench
-- Sun Sep 24 14:23:07 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema HTJ
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema HTJ
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `HTJ` DEFAULT CHARACTER SET utf8 ;
USE `HTJ` ;

-- -----------------------------------------------------
-- Table `HTJ`.`setores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `HTJ`.`setores` (
  `id_setor` INT NOT NULL AUTO_INCREMENT,
  `setor` VARCHAR(45) NULL,
  PRIMARY KEY (`id_setor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `HTJ`.`areas_tecnicas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `HTJ`.`areas_tecnicas` (
  `id_area_tecnica` INT NOT NULL AUTO_INCREMENT,
  `nome_area_tecnica` VARCHAR(45) NULL,
  PRIMARY KEY (`id_area_tecnica`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `HTJ`.`funcionarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `HTJ`.`funcionarios` (
  `id_funcionario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NULL DEFAULT NULL,
  `email` VARCHAR(20) NULL DEFAULT NULL,
  `telefone` VARCHAR(13) NULL DEFAULT NULL,
  `login` VARCHAR(20) NULL DEFAULT NULL,
  `senha` VARCHAR(20) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL DEFAULT NULL,
  `id_area_tecnica` INT NOT NULL,
  `id_setor` INT NOT NULL,
  PRIMARY KEY (`id_funcionario`),
  INDEX `fk_usuarios_setores1_idx` (`id_setor` ASC),
  INDEX `fk_funcionarios_areas_tecnicas1_idx` (`id_area_tecnica` ASC),
  CONSTRAINT `fk_usuarios_setores1`
    FOREIGN KEY (`id_setor`)
    REFERENCES `HTJ`.`setores` (`id_setor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_funcionarios_areas_tecnicas1`
    FOREIGN KEY (`id_area_tecnica`)
    REFERENCES `HTJ`.`areas_tecnicas` (`id_area_tecnica`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `HTJ`.`chamados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `HTJ`.`chamados` (
  `id_chamado` INT NOT NULL AUTO_INCREMENT,
  `hora_chamado` DATETIME NULL,
  `assunto` VARCHAR(45) NULL,
  `descricao` TEXT NULL,
  `fechado` TINYINT NOT NULL DEFAULT 0,
  `id_funcionario` INT NOT NULL,
  `id_area_tecnica` INT NOT NULL,
  PRIMARY KEY (`id_chamado`),
  INDEX `fk_chamados_funcionarios1_idx` (`id_funcionario` ASC),
  INDEX `fk_chamados_areas_tecnicas1_idx` (`id_area_tecnica` ASC),
  CONSTRAINT `fk_chamados_funcionarios1`
    FOREIGN KEY (`id_funcionario`)
    REFERENCES `HTJ`.`funcionarios` (`id_funcionario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_chamados_areas_tecnicas1`
    FOREIGN KEY (`id_area_tecnica`)
    REFERENCES `HTJ`.`areas_tecnicas` (`id_area_tecnica`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `HTJ`.`status`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `HTJ`.`status` (
  `id_status` INT NOT NULL AUTO_INCREMENT,
  `status` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_status`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `HTJ`.`historicos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `HTJ`.`historicos` (
  `id_historico` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NULL,
  `datahora` DATETIME(45) NULL,
  `chamados_id_chamado` INT NOT NULL,
  `status_id_status` INT NOT NULL,
  PRIMARY KEY (`id_historico`),
  INDEX `fk_historico_status1_idx` (`status_id_status` ASC),
  INDEX `fk_historicos_chamados1_idx` (`chamados_id_chamado` ASC),
  CONSTRAINT `fk_historico_status1`
    FOREIGN KEY (`status_id_status`)
    REFERENCES `HTJ`.`status` (`id_status`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_historicos_chamados1`
    FOREIGN KEY (`chamados_id_chamado`)
    REFERENCES `HTJ`.`chamados` (`id_chamado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
