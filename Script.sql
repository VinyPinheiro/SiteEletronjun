/* 
 * FileName: Scrpt.sql
 * Description: Script creation of the entities in the database
*/
drop database if exists u762355983_ejdb;
create database u762355983_ejdb;
use u762355983_ejdb;

CREATE USER u762355983_proje IDENTIFIED BY '!gama!';
GRANT ALL ON u762355983_ejdb.* TO u762355983_proje;

CREATE TABLE OFFICE
(
	code INT NOT NULL,
	office VARCHAR(15) NOT NULL,
	PRIMARY KEY office_pk (code)
) ENGINE=InnoDB CHARSET=utf8;

CREATE TABLE DIRECTORATE
(
	code INT NOT NULL,
	directorate VARCHAR(50) NOT NULL,
	PRIMARY KEY directorate_pk (code)
) ENGINE=InnoDB CHARSET=utf8;

CREATE TABLE ADDRESS
(
	code INT NOT NULL,
	logradouro VARCHAR(100) NOT NULL,
	cep VARCHAR(10) NOT NULL,
	cidade  VARCHAR(50) NOT NULL,
	estado  VARCHAR(2) NOT NULL,
	complemento  VARCHAR(50) NULL,
	PRIMARY KEY address_pk (code)
	
) ENGINE=InnoDB CHARSET=utf8;


CREATE TABLE MEMBERS
(
	registration VARCHAR(10) NOT NULL,
	member_name VARCHAR(100) NOT NULL,
	nick VARCHAR(30) NOT NULL,
	email VARCHAR(150) NOT NULL,
	password VARCHAR(32) NOT NULL,
	birthDate DATE NOT NULL,
	rg VARCHAR(9) NOT NULL,
	cpf VARCHAR(15) NOT NULL,
	phone VARCHAR(14) NOT NULL,
	code_address INT NOT NULL,
	code_directorate INT NOT NULL,
	code_office INT NOT NULL,
	isActivity char(1) NOT NULL DEFAULT 'y', /* To account actived, use 'y' or 'n' to inative. */
	image VARCHAR(150) NOT NULL, /* Save file locate. */

	PRIMARY KEY members_pk (registration),
	
	FOREIGN KEY members_address_fk (code_address) REFERENCES ADDRESS(code) ON UPDATE RESTRICT ON DELETE RESTRICT,
	FOREIGN KEY members_directorate_fk (code_directorate) REFERENCES DIRECTORATE(code) ON UPDATE RESTRICT ON DELETE RESTRICT,
	FOREIGN KEY members_office_fk (code_office) REFERENCES OFFICE(code) ON UPDATE RESTRICT ON DELETE RESTRICT
	
) ENGINE=InnoDB CHARSET=utf8;
