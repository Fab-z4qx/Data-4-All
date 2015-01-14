DROP TABLE IF EXISTS user ;
CREATE TABLE user (id_user INT  AUTO_INCREMENT NOT NULL,
password VARCHAR(15),
login VARCHAR(25),
role INT,
id_entreprise INT NOT NULL,
PRIMARY KEY (id_user) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS entreprise ;
CREATE TABLE entreprise (id_entreprise INT  AUTO_INCREMENT NOT NULL,
nom_entreprise VARCHAR(50),
email_entreprise VARCHAR(255),
siret_entreprise VARCHAR(255),
tel_entreprise VARCHAR(15),
fax_entreprise VARCHAR(15),
id_bdd_entreprise VARCHAR(50),
date_immat_rcs_entreprise DATETIME,
forme_juridique_entreprise VARCHAR(255),
num_tva_entreprise VARCHAR(50),
activite_entreprise TEXT,
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

DROP TABLE IF EXISTS contact ;
CREATE TABLE contact (id_contact INT  AUTO_INCREMENT NOT NULL,
nom_contact VARCHAR(50),
email_contact VARCHAR(255),
sujet_contact VARCHAR(255),
message_contact TEXT,
PRIMARY KEY (id_contact) ) ENGINE=InnoDB;

ALTER TABLE user ADD CONSTRAINT FK_user_id_entreprise FOREIGN KEY (id_entreprise) REFERENCES entreprise (id_entreprise);

ALTER TABLE entreprise ADD CONSTRAINT FK_entreprise_id_adresse FOREIGN KEY (id_adresse) REFERENCES adresse (id_adresse);
