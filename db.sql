CREATE DATABASE moroco2023 CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

CREATE TABLE groupes (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(10) NOT NULL,
    stade varchar(255) NOT NULL,
    PRIMARY KEY (id)
   
);
CREATE TABLE groupes (
    id int NOT NULL AUTO_INCREMENT,
    nom varchar(10) NOT NULL,
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
('/chemin/vers/drapeau1.png', 'Brésil', 'Neymar', 'Brasília', 'Amérique du Sud', 210000000, 0, 0, 0, 0, 0, 0, 0, 0),
('/chemin/vers/drapeau2.png', 'Allemagne', 'Leroy Sané', 'Berlin', 'Europe', 83000000, 0, 0, 0, 0, 0, 0, 0, 0),
('/chemin/vers/drapeau3.png', 'Argentine', 'Lionel Messi', 'Buenos Aires', 'Amérique du Sud', 44000000, 0, 0, 0, 0, 0, 0, 0, 0),
('/chemin/vers/drapeau4.png', 'Espagne', 'Sergio Ramos', 'Madrid', 'Europe', 47000000, 0, 0, 0, 0, 0, 0, 0, 0),
('/chemin/vers/drapeau5.png', 'France', 'Kylian Mbappé', 'Paris', 'Europe', 67000000, 0, 0, 0, 0, 0, 0, 0, 0),
('/chemin/vers/drapeau6.png', 'Portugal', 'Cristiano Ronaldo', 'Lisbonne', 'Europe', 102000000, 0, 0, 0, 0, 0, 0, 0, 0),
('/chemin/vers/drapeau32.png', 'Australie', 'Harry Kane', 'Canberra', 'Océanie', 26000000, 0, 0, 0, 0, 0, 0, 0, 0),
('/chemin/vers/drapeau5.png', 'France', 'Kylian Mbappé', 'Paris', 'Europe', 67000000, 0, 0, 0, 0, 0, 0, 0, 1),
('/chemin/vers/drapeau6.png', 'Portugal', 'Cristiano Ronaldo', 'Lisbonne', 'Europe', 102000000, 0, 0, 0, 0, 0, 0, 0, 2),
('/chemin/vers/drapeau7.png', 'Italie', 'Ciro Immobile', 'Rome', 'Europe', 60000000, 0, 0, 0, 0, 0, 0, 0, 1),
('/chemin/vers/drapeau8.png', 'Angleterre', 'Harry Kane', 'Londres', 'Europe', 56000000, 0, 0, 0, 0, 0, 0, 0, 2),
('/chemin/vers/drapeau9.png', 'Pays-Bas', 'Virgil van Dijk', 'Amsterdam', 'Europe', 17000000, 0, 0, 0, 0, 0, 0, 0, 1),
('/chemin/vers/drapeau10.png', 'Belgique', 'Kevin De Bruyne', 'Bruxelles', 'Europe', 11500000, 0, 0, 0, 0, 0, 0, 0, 2),
('/chemin/vers/drapeau11.png', 'Uruguay', 'Luis Suárez', 'Montevideo', 'Amérique du Sud', 3400000, 0, 0, 0, 0, 0, 0, 0, 1),
('/chemin/vers/drapeau12.png', 'Colombie', 'James Rodríguez', 'Bogotá', 'Amérique du Sud', 51000000, 0, 0, 0, 0, 0, 0, 0, 2),
('/chemin/vers/drapeau13.png', 'Mexique', 'Raúl Jiménez', 'Mexico', 'Amérique du Nord', 126000000, 0, 0, 0, 0, 0, 0, 0, 1),
('/chemin/vers/drapeau14.png', 'États-Unis', 'Christian Pulisic', 'Washington, D.C.', 'Amérique du Nord', 331000000, 0, 0, 0, 0, 0, 0, 0, 2),
('/chemin/vers/drapeau15.png', 'Brésil', 'Neymar', 'Brasília', 'Amérique du Sud', 210000000, 0, 0, 0, 0, 0, 0, 0, 1),
('/chemin/vers/drapeau16.png', 'Allemagne', 'Leroy Sané', 'Berlin', 'Europe', 83000000, 0, 0, 0, 0, 0, 0, 0, 2),
('/chemin/vers/drapeau17.png', 'Argentine', 'Lionel Messi', 'Buenos Aires', 'Amérique du Sud', 44000000, 0, 0, 0, 0, 0, 0, 0, 1),
('/chemin/vers/drapeau18.png', 'Espagne', 'Sergio Ramos', 'Madrid', 'Europe', 47000000, 0, 0, 0, 0, 0, 0, 0, 2),
('/chemin/vers/drapeau19.png', 'Croatie', 'Luka Modrić', 'Zagreb', 'Europe', 4100000, 0, 0, 0, 0, 0, 0, 0, 1),
('/chemin/vers/drapeau20.png', 'Danemark', 'Christian Eriksen', 'Copenhague', 'Europe', 5800000, 0, 0, 0, 0, 0, 0, 0, 2),
('/chemin/vers/drapeau21.png', 'Sénégal', 'Sadio Mané', 'Dakar', 'Afrique', 17000000, 0, 0, 0, 0, 0, 0, 0, 1),
('/chemin/vers/drapeau22.png', 'Maroc', 'Hakim Ziyech', 'Rabat', 'Afrique', 36000000, 0, 0, 0, 0, 0, 0, 0, 2),
('/chemin/vers/drapeau23.png', 'Nigeria', '



   
);

