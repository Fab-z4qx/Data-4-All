DROP TABLE IF EXISTS user ;
CREATE TABLE user (id_user INT  AUTO_INCREMENT NOT NULL,
password VARCHAR(15),
login VARCHAR(25),
role INT,
entreprise_id_entreprise INT,
PRIMARY KEY (id_user) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS entreprise ;
CREATE TABLE entreprise (id_entreprise INT  AUTO_INCREMENT NOT NULL,
nom VARCHAR(50),
prenom VARCHAR(15),
email VARCHAR(255),
siret VARCHAR(255),
numero VARCHAR(15),
fax VARCHAR(15),
id_bdd VARCHAR(50),
date_immat_rcs DATETIME,
forme_juridique VARCHAR(255),
num_tva VARCHAR(50),
activitee TEXT,
user_id_user INT NOT NULL,
id_adresse INT NOT NULL,
PRIMARY KEY (id_entreprise) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS adresse ;
CREATE TABLE adresse (id_adresse INT  AUTO_INCREMENT NOT NULL,
type_de_voie_ VARCHAR(255),
numero_rue INT,
code_postal INT,
pays VARCHAR(255),
adresse VARCHAR(255),
adresse_complementaire VARCHAR(255),
ville VARCHAR(255),
PRIMARY KEY (id_adresse) ) ENGINE=InnoDB;

ALTER TABLE user ADD CONSTRAINT FK_user_entreprise_id_entreprise FOREIGN KEY (entreprise_id_entreprise) REFERENCES entreprise (id_entreprise);

ALTER TABLE entreprise ADD CONSTRAINT FK_entreprise_user_id_user FOREIGN KEY (user_id_user) REFERENCES user (id_user);
ALTER TABLE entreprise ADD CONSTRAINT FK_entreprise_id_adresse FOREIGN KEY (id_adresse) REFERENCES adresse (id_adresse);
