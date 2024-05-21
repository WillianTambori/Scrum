-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Forum
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `Forum` ;

-- -----------------------------------------------------
-- Schema Forum
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Forum` ;
USE `Forum` ;

-- -----------------------------------------------------
-- Table `Forum`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Forum`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `idade` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Forum`.`pergunta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Forum`.`pergunta` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `usuario_id` INT NOT NULL,
  `dataHora` DATETIME NOT NULL,
  `pergunta` LONGTEXT NOT NULL,
  `titulo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_pergunta_usuario1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `Forum`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_pergunta_usuario1_idx` ON `Forum`.`pergunta` (`usuario_id` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `Forum`.`resposta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Forum`.`resposta` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `usuario_id` INT NOT NULL,
  `pergunta_id` INT NOT NULL,
  `resposta` LONGTEXT NOT NULL,
  `dataHora` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_assunto_usuario`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `Forum`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_resposta_pergunta1`
    FOREIGN KEY (`pergunta_id`)
    REFERENCES `Forum`.`pergunta` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_assunto_usuario_idx` ON `Forum`.`resposta` (`usuario_id` ASC) VISIBLE;

CREATE INDEX `fk_resposta_pergunta1_idx` ON `Forum`.`resposta` (`pergunta_id` ASC) VISIBLE;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
