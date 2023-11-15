CREATE DATABASE moroco2023 CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

CREATE TABLE groupes (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(10) NOT NULL,
    stade varchar(255) NOT NULL,
    PRIMARY KEY (id)
   
);


CREATE TABLE equipes (
    id int NOT NULL AUTO_INCREMENT,
    drapeau varchar(255) NOT NULL,
    nom varchar(100) NOT NULL,
    joueur varchar(100) NOT NULL,
    capitale varchar(100) NOT NULL,
    continent varchar(100) NOT NULL,
    ppl int NOT NULL,
    MatchsJoues int NOT NULL,
    Victoires int NOT NULL,
    Nuls int NOT NULL,
    Defaites int NOT NULL,
    ButsPour int NOT NULL,
    ButsContre int NOT NULL,
    Points int NOT NULL,
    id_groupe int NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_groupe) REFERENCES groupes (id),



    INSERT INTO groupes  VALUES (NULL, "A", "complexe moulay abdellah");
    INSERT INTO groupes  VALUES (NULL, "B", "Grande stade Marrakech");
    INSERT INTO groupes  VALUES (NULL, "C", "grande stade Adrar Agadir");
    INSERT INTO groupes  VALUES (NULL, "D", "Grand stade de Tanger");
    INSERT INTO groupes  VALUES (NULL, "E", "Complexe sportif de Fès");
    INSERT INTO groupes  VALUES (NULL, "F", "Stade Mohammed-V");
    INSERT INTO groupes  VALUES (NULL, "G", "Stade Cheikh laghdaf laayoune");
    INSERT INTO groupes  VALUES (NULL, "H", "Stade de La Marche Verte Safi");


INSERT INTO equipes (drapeau, nom, joueur, capitale, continent, ppl, MatchsJoues, Victoires, Nuls, Defaites, ButsPour, ButsContre, Points, id_groupe)
VALUES 
('media/c.png', 'Brésil', 'Neymar', 'Brasília', 'Amérique du Sud', 210000000, 0, 0, 0, 0, 0, 0, 0, 1),
('media/arg.png', 'Argentine', 'Lionel Messi', 'Buenos Aires', 'Amérique du Sud', 44000000, 0, 0, 0, 0, 0, 0, 0, 2),
('media/esp.png', 'Espagne', 'Sergio Ramos', 'Madrid', 'Europe', 47000000, 0, 0, 0, 0, 0, 0, 0, 1),
('media/fr.png', 'France', 'Kylian Mbappé', 'Paris', 'Europe', 67000000, 0, 0, 0, 0, 0, 0, 0, 2),
('media/por.png', 'Portugal', 'Cristiano Ronaldo', 'Lisbonne', 'Europe', 102000000, 0, 0, 0, 0, 0, 0, 0, 3),
('media/it.png', 'Italie', 'Ciro Immobile', 'Rome', 'Europe', 60000000, 0, 0, 0, 0, 0, 0, 0, 4),
('media/eng.png', 'Angleterre', 'Harry Kane', 'Londres', 'Europe', 56000000, 0, 0, 0, 0, 0, 0, 0, 2),
('media/b.png', 'Pays-Bas', 'Virgil van Dijk', 'Amsterdam', 'Europe', 17000000, 0, 0, 0, 0, 0, 0, 0, 5),
('media/blg.png', 'Belgique', 'Kevin De Bruyne', 'Bruxelles', 'Europe', 11500000, 0, 0, 0, 0, 0, 0, 0, 6),
('media/urg.png', 'Uruguay', 'Luis Suárez', 'Montevideo', 'Amérique du Sud', 3400000, 0, 0, 0, 0, 0, 0, 0, 3),
('media/col.png', 'Colombie', 'James Rodríguez', 'Bogotá', 'Amérique du Sud', 51000000, 0, 0, 0, 0, 0, 0, 0, 4),
('media/mx.png', 'Mexique', 'Raúl Jiménez', 'Mexico', 'Amérique du Nord', 126000000, 0, 0, 0, 0, 0, 0, 0, 1),
('media/usa.png', 'États-Unis', 'Christian Pulisic', 'Washington, D.C.', 'Amérique du Nord', 331000000, 0, 0, 0, 0, 0, 0, 0, 2),
('media/al.png', 'Allemagne', 'Leroy Sané', 'Berlin', 'Europe', 83000000, 0, 0, 0, 0, 0, 0, 0, 7),
('media/cro.png', 'Croatie', 'Luka Modrić', 'Zagreb', 'Europe', 4100000, 0, 0, 0, 0, 0, 0, 0, 7),
('media/dnm.png', 'Danemark', 'Christian Eriksen', 'Copenhague', 'Europe', 5800000, 0, 0, 0, 0, 0, 0, 0, 2),
('media/sng.png', 'Sénégal', 'Sadio Mané', 'Dakar', 'Afrique', 17000000, 0, 0, 0, 0, 0, 0, 0, 3),
('media/a.png', 'Maroc', 'Hakim Ziyech', 'Rabat', 'Afrique', 36000000, 0, 0, 0, 0, 0, 0, 0, 2),
('media/afsud.png', 'Afrique du Sud', 'Percy Tau', 'Pretoria', 'Afrique', 59000000, 0, 0, 0, 0, 0, 0, 0, 1),
('media/ne.png', 'Nouvelle-Zélande', 'Chris Wood', 'Wellington', 'Océanie', 5000000, 0, 0, 0, 0, 0, 0, 0, 2),
('media/costa.png', 'Costa Rica', 'Keylor Navas', 'San José', 'Amérique du Nord', 5000000, 0, 0, 0, 0, 0, 0, 0, 1),
('media/aust.png', 'Australie', 'Harry Kane', 'Canberra', 'Océanie', 26000000, 0, 0, 0, 0, 0, 0, 0, 0),
('media/Su.png', 'Suède', 'Zlatan Ibrahimović', 'Stockholm', 'Europe', 10000000, 0, 0, 0, 0, 0, 0, 0, 1),
('media/suis.png', 'Suisse', 'Granit Xhaka', 'Berne', 'Europe', 8600000, 0, 0, 0, 0, 0, 0, 0, 2),
('media/chili.png', 'Chili', 'Alexis Sánchez', 'Santiago', 'Amérique du Sud', 19000000, 0, 0, 0, 0, 0, 0, 0, 1),
('media/egy.png', 'Égypte', 'Mohamed Salah', 'Le Caire', 'Afrique', 104000000, 0, 0, 0, 0, 0, 0, 0, 2),
('media/cn.png', 'Corée du Nord', 'Son Min-ki', 'Pyongyang', 'Asie', 25400000, 0, 0, 0, 0, 0, 0, 0, 1),
('media/japon.png', 'Japon', 'Shinji Kagawa', 'Tokyo', 'Asie', 126000000, 0, 0, 0, 0, 0, 0, 0, 1),
('media/cs.png', 'Corée du Sud', 'Son Heung-min', 'Séoul', 'Asie', 51600000, 0, 0, 0, 0, 0, 0, 0, 1);






   
);

UPDATE equipes SET id_groupe = 1 WHERE nom IN ('Brésil', 'Allemagne', 'Argentine', 'Espagne');
UPDATE equipes SET id_groupe = 2 WHERE nom IN ('France', 'Portugal', 'Italie', 'Angleterre');
UPDATE equipes SET id_groupe = 3 WHERE nom IN ('Pays-Bas', 'Belgique', 'Uruguay', 'Colombie');
UPDATE equipes SET id_groupe = 4 WHERE nom IN ('Mexique', 'États-Unis', 'Croatie', 'Danemark');
UPDATE equipes SET id_groupe = 5 WHERE nom IN ('Sénégal', 'Maroc', 'Nigeria', 'Égypte');
UPDATE equipes SET id_groupe = 6 WHERE nom IN ('Japon', 'Corée du Sud', 'Iran', 'Arabie saoudite');
UPDATE equipes SET id_groupe = 7 WHERE nom IN ('Afrique du Sud', 'Nouvelle-Zélande', 'Costa Rica', 'Suède');
UPDATE equipes SET id_groupe = 8 WHERE nom IN ('Suisse', 'Chili', 'Suède', 'Corée du Nord');


