Desactivar/Activar el safemode en MySQL

SET SQL_SAFE_UPDATES=0;
UPDATE tablename SET columnname=1;
SET SQL_SAFE_UPDATES=1;


moodlecssslaval

user: dev_cssslaval
password: MyCSSl4v4l

cssslaval

CREATE USER 'dev_cssslaval'@'localhost' IDENTIFIED BY 'MyCSSl4v4l';

GRANT ALL PRIVILEGES ON cssslaval.* TO 'dev_cssslaval'@'localhost';



/var/www/dev.cssslaval-moodle.sofad.qc.ca/moodledata

S0fad@T3!us


L'option Afficher le journal complet permet aux enseignants de voir et de faire imprimer en même temps tous les commentaires de tous ses groupes d'apprenants dans un cours.


modification du texte info_view_full


Ajout effectué avec le mot de passe Q1w2e3r4
Site = ldap.sofad.qc.ca
PHP version = 7.1
Répertoire = /var/www/ ldap.sofad.qc.ca/www
Server = sofad-multiphp-dev (10.0.8.13)
BD = ldapsofad
User BD = ldapsofad     Pass = Q1w2e3r4
 
Ldap server = 10.0.8.8 (sofaddc)
User = sofad\ldapuser   Pass = Q1w2e3r4 (Read ldap)
 
User 01 = sofad\test01    pass = Q1w2e3r4
 User 02 = sofad\test02    pass = Q1w2e3r4
 
 