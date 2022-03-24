

CREATE TABLE SECTION (
id_Se varchar(30) ,
Section  varchar(30),
CONSTRAINT PK_SECTION PRIMARY KEY (id_Se)
);
CREATE TABLE Fonction (
id_F varchar(30),
Desc_F varchar(30),
CONSTRAINT PK_Fonction PRIMARY KEY (id_F)
);
CREATE TABLE Employes (
Matricule int ,
Nom_E varchar(30),
Prenom_E varchar(30),
DateEmbauche date ,
Actif varchar(30),
id_F varchar(30),
id_Se varchar(30) ,
CONSTRAINT PK_Employes PRIMARY KEY (Matricule),
CONSTRAINT FK_EmployesF FOREIGN KEY (id_F) REFERENCES Fonction (id_F), 
CONSTRAINT FK_EmployesSe FOREIGN KEY (id_Se) REFERENCES Section (id_Se)
);
Create table Attacher(
Matricule int,
id_Se varchar(30),
CONSTRAINT PK_Attacher PRIMARY KEY (Matricule,id_Se),
CONSTRAINT FK_AttacherM  FOREIGN KEY (Matricule) REFERENCES Employes (Matricule),
CONSTRAINT FK_Attacherid  FOREIGN KEY (id_Se) REFERENCES SECTION (id_Se)
);
CREATE TABLE Solde(
id_Solde int,
Matricule int,
Annee date,
Droit float,
Pris float ,
Solde float ,
CONSTRAINT PK_Solde PRIMARY KEY (id_Solde),
CONSTRAINT FK_Solde  FOREIGN KEY (Matricule) REFERENCES Employes (Matricule)
);
CREATE TABLE demande( 
Num int AUTO_INCREMENT,
Matricule int ,
droit_anne float,
deja_pris float, 
Total float,
conges_pris float,
Reste float,
Date_depart float,
date_fin float,
Statut varchar(200),
 CONSTRAINT PK_DEMANDE PRIMARY KEY (Num),
CONSTRAINT FK_Demande  FOREIGN KEY (Matricule) REFERENCES Employes (Matricule)
);