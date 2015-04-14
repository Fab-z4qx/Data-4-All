INSERT INTO adresse(adresse,adresse_complementaire,code_postal,ville,pays) VALUE("Rue paul vaillant couturier","",94400,"Vitry","France");
INSERT INTO adresse(adresse,adresse_complementaire,code_postal,ville,pays) VALUE("Rue Leo la grange","",94400,"Vitry","France");
INSERT INTO adresse(adresse,adresse_complementaire,code_postal,ville,pays) VALUE("Rue du kremlin","",75000,"Paris","France");



INSERT INTO entreprise(nom_entreprise,email_entreprise,siret_entreprise,tel_entreprise,fax_entreprise,forme_juridique_entreprise,activite_entreprise,type_offre,espace_disponible,id_adresse)
VALUE ("D4A","d4a@gmail.com","732 829 320 00074","0102030405","0102030405","SAS","Service Open Data",1,104857600,1);

INSERT INTO entreprise(nom_entreprise,email_entreprise,siret_entreprise,tel_entreprise,fax_entreprise,forme_juridique_entreprise,activite_entreprise,type_offre,espace_disponible,id_adresse)
VALUE ("bosh","Bosch@gmail.com","732 829 320 00074","0102030405","0102030405","SAS","Service Open Data",1,104857600,2);

INSERT INTO entreprise(nom_entreprise,email_entreprise,siret_entreprise,tel_entreprise,fax_entreprise,forme_juridique_entreprise,activite_entreprise,type_offre,espace_disponible,id_adresse)
VALUE ("sanofi","sanofi@gmail.com","732 829 320 00074","0102030405","0102030405","SAS","Service Open Data",1,104857600,3);

INSERT INTO entreprise(nom_entreprise,email_entreprise,siret_entreprise,tel_entreprise,fax_entreprise,forme_juridique_entreprise,activite_entreprise,type_offre,espace_disponible,id_adresse)
VALUE ("Rolex","roflex@gmail.com","732 829 320 00074","0102030405","0102030405","SAS","Service Open Data",1,104857600,2);

INSERT INTO entreprise(nom_entreprise,email_entreprise,siret_entreprise,tel_entreprise,fax_entreprise,forme_juridique_entreprise,activite_entreprise,type_offre,espace_disponible,id_adresse)
VALUE ("TEFAL","tefal@gmail.com","732 829 320 00074","0102030405","0102030405","SAS","Fabriquant",1,104857600,3);


INSERT INTO entreprise(nom_entreprise,email_entreprise,siret_entreprise,tel_entreprise,fax_entreprise,forme_juridique_entreprise,activite_entreprise,type_offre,espace_disponible,id_adresse)
VALUE ("EFREI","efrei@efrei.fr","73282932000074","0102050405","0105030405","SAS","Ecole",1,104857600,3);


INSERT INTO user(password,login,role,entreprise_id_entreprise) VALUE("782dd27ea8e3b4f4095ffa38eeb4d20b59069077","d4a@gmail.com",2,1);
INSERT INTO user(password,login,role,entreprise_id_entreprise) VALUE("782dd27ea8e3b4f4095ffa38eeb4d20b59069077","bosch@gmail.com,2,2);
INSERT INTO user(password,login,role,entreprise_id_entreprise) VALUE("782dd27ea8e3b4f4095ffa38eeb4d20b59069077","sanofi@gmail.com",2,3);
INSERT INTO user(password,login,role,entreprise_id_entreprise) VALUE("782dd27ea8e3b4f4095ffa38eeb4d20b59069077","rolex@gmail.com",2,4);
INSERT INTO user(password,login,role,entreprise_id_entreprise) VALUE("782dd27ea8e3b4f4095ffa38eeb4d20b59069077","tefal@gmail.com",2,5);	
INSERT INTO user(password,login,role,entreprise_id_entreprise) VALUE("782dd27ea8e3b4f4095ffa38eeb4d20b59069077","efrei@efrei.fr",2,5);

CREATE DATABASE _1;
CREATE DATABASE _2;
CREATE DATABASE _3;
CREATE DATABASE _4;
CREATE DATABASE _5;
CREATE DATABASE _6;

