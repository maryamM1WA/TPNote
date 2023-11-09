
/** Creation de la base de donnée de la banque**/

CREATE DATABASE banque;

use banque;

/********************************************************************
Creation des tables
*******************************************************************/

/** création de la table client**/
create table client(
  id_client INT UNIQUE PRIMARY KEY,
  nom VARCHAR(60),
  prenom VARCHAR (60),
  ddn DATE,
  statut_matrimonial VARCHAR(120),
  nbEnfants INT,
  statutPro VARCHAR(120),
  id_conseiller INT,
  id_adresse INT,
  id_agence INT

);

/** création de la table possède**/

create table possede(
  id_client INT,
  id_compte INT
);


/**creation table compteBanquaire**/

create table compteBanquaire(
  id_compte INT UNIQUE PRIMARY KEY,
  type VARCHAR(60),
  nb_personne INT
);

/**creation de la table transactionHistorique**/

create table transactionHistorique(
  id_transaction INT UNIQUE,
  date_transaction DATE,
  heure_transaction DATE,
  montant_transaction INT,
  id_client INT
);

/**creation de la table adresse**/

create table adresse(
  id_adresse INT UNIQUE,
  num_rue INT,
  nom_rue VARCHAR(120),
  ville VARCHAR (120),
  cdp INT,
  id_agence INT
);

/* creation de la table agence*/

create table agence(
  id_agence INT UNIQUE,
  nb_conseiller INT,
  nb_client INT,
  id_adresse INT
);

/* creation de la table conseiller*/

create table conseiller(
  id_conseiller INT UNIQUE,
  nom VARCHAR (60),
  prenom VARCHAR (60),
  ddn DATE,
  id_agence INT
);



/********************************************************************
Insertion de valeur dans les tables
/*******************************************************************/
/*insertion dans la table client*/
insert into client values(0,'eid','maryam','16-11-1998','celibataire',0,'etudiante',0,0,0);
insert into client values(1,'rahmanie','lydia','01-03-1999','concubinage',1,'etudiante',1,1,1);
insert into client values(3,'mathieu','maryan','01-08-1998','celibataire',2,'ouvrière',2,2,2);

/*insertion dans la table comptBanquaire*/
insert into compteBanquaire values(0,'personel','1');
insert into compteBanquaire values(1,'partagé','2');
insert into compteBanquaire values (2,'personel','1');


/*insertion dans possède*/

insert into possede values(0,0);
insert into possede values(0,1);
insert into possede values(2,1);
insert into possede values(1,2);

/*remplissage de la table transaction*/
insert into transactionHistorique values(0,'12-12-2002','15:20',50,2);
insert into transactionHistorique values(1,'15-10-2022','18:30',150,1);

/*remplissage de la table adresse*/
insert into adresse values(0,5,'rue des teinturiers','Lyon','42100','1');
insert into adresse values(1,3,'rue des cerisiers','Lille','59120','0');

/*remplissage de la table agence*/
insert into agence values(0,'30','2003','1');
insert into agence values(1,'5','1302','0');

/*remplissage de la table conseiller*/

insert into conseiller values(0,'Jean','Pierre','16-12-1975',1);
insert into conseiller values(1,'galile','Pitter','14-05-1995',1);
