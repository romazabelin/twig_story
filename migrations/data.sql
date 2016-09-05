CREATE DATABASE `story` /*!40100 COLLATE 'utf8_general_ci' */;

CREATE TABLE `story` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`title` TEXT NOT NULL,
	`description` TEXT NOT NULL,
	`attachment` TEXT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB;

ALTER TABLE `story`
	ADD COLUMN `attahment_original_file_name` TEXT NULL;

	ALTER TABLE `story`
	CHANGE COLUMN `attahment_original_file_name` `attachment_original_file_name` TEXT NULL;