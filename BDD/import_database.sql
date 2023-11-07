CREATE DATABASE `goFast`;

CREATE TABLE `utilisateur` (
	`id` INT NOT NULL,
	`email` VARCHAR(100) NOT NULL,
	`password` VARCHAR(50) NOT NULL
)
COLLATE='utf8mb4_0900_ai_ci';

CREATE TABLE `url` (
	`id` INT NOT NULL,
	`link` INT NOT NULL,
	`link_rewrite` INT NOT NULL
    `click` INT  NULL
)
COLLATE='utf8mb4_0900_ai_ci';