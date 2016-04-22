/* 
 * FileName: Scrpt.sql
 * Description: Script creation of the entities in the database
*/
drop database if exists u762355983_ejdb;
create database u762355983_ejdb;
use u762355983_ejdb;

/*
CREATE USER u762355983_proje IDENTIFIED BY '!gama!';
GRANT ALL ON u762355983_ejdb.* TO u762355983_proje;
*/

CREATE TABLE OFFICE
(
	code INT NOT NULL AUTO_INCREMENT,
	office VARCHAR(15) NOT NULL,
	PRIMARY KEY office_pk (code)
) ENGINE=InnoDB CHARSET=utf8;

CREATE TABLE DIRECTORATE
(
	code INT NOT NULL AUTO_INCREMENT,
	directorate VARCHAR(50) NOT NULL,
	PRIMARY KEY directorate_pk (code)
) ENGINE=InnoDB CHARSET=utf8;

CREATE TABLE ADDRESS
(
	code INT NOT NULL AUTO_INCREMENT,
	cep VARCHAR(10) NOT NULL,
	address VARCHAR(100) NOT NULL,
    neighborhood VARCHAR(30),
    residence VARCHAR(6) NOT NULL,
	city  VARCHAR(50) NOT NULL,
	state  VARCHAR(2) NOT NULL,
	complement  VARCHAR(50) NULL,
	PRIMARY KEY address_pk (code)
	
) ENGINE=InnoDB CHARSET=utf8;


CREATE TABLE MEMBERS
(
	email VARCHAR(150) NOT NULL,
	registration VARCHAR(10),
	member_name VARCHAR(100) NOT NULL,
    sex VARCHAR(1) NOT NULL,
	nick VARCHAR(30) NOT NULL,
	password VARCHAR(32) NOT NULL,
	birthDate DATE NOT NULL,
	rg VARCHAR(9) NOT NULL,
    rg_agency VARCHAR(8) NOT NULL,
	cpf VARCHAR(15) NOT NULL,
	phone VARCHAR(15) NOT NULL,
	code_address INT NOT NULL,
	code_directorate INT,
	code_office INT,
	isActivity char(1) NOT NULL DEFAULT 'y', /* To account actived, use 'y' or 'n' to inative. */
	image VARCHAR(150) NOT NULL, /* Save file locate. */

	PRIMARY KEY members_pk (email),
    
	CONSTRAINT UNIQUE email_uk(email),
    CONSTRAINT UNIQUE cpf_uk(cpf),
    
	FOREIGN KEY members_address_fk (code_address) REFERENCES ADDRESS(code) ON UPDATE RESTRICT ON DELETE RESTRICT,
	FOREIGN KEY members_directorate_fk (code_directorate) REFERENCES DIRECTORATE(code) ON UPDATE RESTRICT ON DELETE RESTRICT,
	FOREIGN KEY members_office_fk (code_office) REFERENCES OFFICE(code) ON UPDATE RESTRICT ON DELETE RESTRICT
	
) ENGINE=InnoDB CHARSET=utf8;



INSERT INTO OFFICE (office) VALUES ('Presidente');
INSERT INTO OFFICE (office) VALUES ('Diretor');
INSERT INTO OFFICE (office) VALUES ('Gerente');
INSERT INTO OFFICE (office) VALUES ('Assessor');
INSERT INTO OFFICE (office) VALUES ('Trainee');
INSERT INTO OFFICE (office) VALUES ('Colaborador');

INSERT INTO DIRECTORATE (directorate) VALUES ('Administrativo e Financeiro');
INSERT INTO DIRECTORATE (directorate) VALUES ('Gestão de Pessoas e Processos');
INSERT INTO DIRECTORATE (directorate) VALUES ('Marketing');
INSERT INTO DIRECTORATE (directorate) VALUES ('Gestão de Projetos');
