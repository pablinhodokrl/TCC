
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Cadastro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`cadastro` (
  `nome` VARCHAR(50) NOT NULL,
  `empresa` VARCHAR(20) NULL,
  `email` VARCHAR(45) NULL,
  `cpfcnpj` VARCHAR(45) NULL,
  `senha` VARCHAR(45) NULL,
  PRIMARY KEY (`CPF/CNPJ`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Cadastro de Produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Cadastro de Produto` (
  `id` int NOT NULL AUTO_INCREMENT ,
  `NomeProduto` VARCHAR(25) NOT NULL,
  `Validade` DATE NULL,
  `Marca` VARCHAR(45) NULL,
  `PreçoQTD` FLOAT NULL,
  `PreçoEGD` FLOAT NULL,
  `Fornecedor` VARCHAR(45) NULL,
  `Lote` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
