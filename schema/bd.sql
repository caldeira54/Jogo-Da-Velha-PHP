-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema jogoDaVelha
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema jogoDaVelha
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `jogoDaVelha` DEFAULT CHARACTER SET utf8 ;
USE `jogoDaVelha` ;

-- -----------------------------------------------------
-- Table `jogoDaVelha`.`jogador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jogoDaVelha`.`jogador` (
  `idJogador` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idJogador`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
