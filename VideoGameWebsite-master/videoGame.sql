CREATE DATABASE IF NOT EXISTS gamereviews;
GRANT ALL PRIVILEGES ON gamereviews.* to 'videogameuser'@'localhost' identified by 'videogamepassword';
USE gamereviews;

CREATE TABLE videogames (
  id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  gamename VARCHAR(255),
  ESRBrating VARCHAR(20),
  genre VARCHAR(15),
  releasedate DATE,
  score DOUBLE(11,1),
  replayability VARCHAR(25),
  AdminReview blob,
  picturelink VARCHAR(255),
  INDEX (gamename)
);

CREATE TABLE systems (
	id int NOT NULL,
	system VARCHAR(255)
);

CREATE TABLE reviews (
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	gameID int NOT NULL,
	userID int NOT NULL,
	userReview blob NOT NULL,
	timeReviewed TIMESTAMP NOT NULL,
	rating int NOT NULL,
	replayability int NOT NULL
);

CREATE TABLE users (
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	userName VARCHAR(25) NOT NULL,
	password VARCHAR(40) NOT NULL,
	name VARCHAR(255) NOT NULL,
	favConsole VARCHAR(255) NOT NULL,
	aboutMe blob,
	piclink VARCHAR(255)
);
	
	
	
INSERT INTO gamereviews.videogames (id, gamename, ESRBrating, genre, releasedate, score, replayability, AdminReview, picturelink) VALUES (NULL, 'Halo 4', 'Mature', 'Shooter', '2012-11-06', '8', 'Medium-High', NULL, 'http://fc00.deviantart.net/fs70/i/2012/057/8/e/10_of_117__halo_4_ost_cover_by_adinosupremacist-d4r44la.png');
INSERT INTO gamereviews.videogames (id, gamename, ESRBrating, genre, releasedate, score, replayability, AdminReview, picturelink) VALUES (NULL, 'World of Warcraft', 'Teen', 'MMORPG', '2004-11-23', '8', 'High', NULL, 'http://www.gamershell.com/static/boxart/large/uk/1769.jpg');
INSERT INTO gamereviews.videogames (id, gamename, ESRBrating, genre, releasedate, score, replayability, AdminReview, picturelink) VALUES (NULL, 'Dishonored', 'Mature', 'Action', '2012-10-29', '6', 'Low', NULL, 'http://vgboxart.com/boxes/PC/48279-dishonored.jpg');
INSERT INTO gamereviews.videogames (id, gamename, ESRBrating, genre, releasedate, score, replayability, AdminReview, picturelink) VALUES (NULL, 'Zelda: A Link to the Past', 'N/A', 'ActionAdventure', '1991-11-21', '8', 'Medium', NULL, 'http://vgboxart.com/boxes/SNES/25284-the-legend-of-zelda-a-link-to-the-past.png');
INSERT INTO gamereviews.videogames (id, gamename, ESRBrating, genre, releasedate, score, replayability, AdminReview, picturelink) VALUES (NULL, 'Pokemon Red', 'Everyone', 'Monster Battle', '1998-09-30', '9', 'High', NULL, 'http://media.giantbomb.com/uploads/3/32557/1311953-pokemon_red_box_1_super.jpg');
INSERT INTO gamereviews.videogames (id, gamename, ESRBrating, genre, releasedate, score, replayability, AdminReview, picturelink) VALUES (NULL, 'Super Smash Bros. Melee', 'Teen', 'Fighting', '2001-12-03', '8', 'High', NULL, 'http://upload.wikimedia.org/wikipedia/en/7/75/Super_Smash_Bros_Melee_box_art.png');
INSERT INTO gamereviews.videogames (id, gamename, ESRBrating, genre, releasedate, score, replayability, AdminReview, picturelink) VALUES (NULL, 'Devil May Cry', 'Mature', 'Hack and Slash', '2001-08-23', '7', 'Medium', NULL, 'http://4chandata.org/images/threads/227786_dmc-devil-may-cry-box-art.jpg');
INSERT INTO gamereviews.videogames (id, gamename, ESRBrating, genre, releasedate, score, replayability, AdminReview, picturelink) VALUES (NULL, 'Guild Wars', 'Teen', 'MMORPG', '2005-04-26', '8', 'Medium-High', NULL, 'http://www.guildwars.com/images/boxart/northamerican-presale-large.jpg');
INSERT INTO gamereviews.videogames (id, gamename, ESRBrating, genre, releasedate, score, replayability, AdminReview, picturelink) VALUES (NULL, 'Armored Core', 'Teen', 'Action Shooter', '1997-10-31', '7', 'Medium', NULL, 'http://ts2.mm.bing.net/th?id=H.4610205918299513&pid=1.7');
INSERT INTO gamereviews.videogames (id, gamename, ESRBrating, genre, releasedate, score, replayability, AdminReview, picturelink) VALUES (NULL, 'Elder Scolls 3: Morrowind', 'Mature', 'Open World RPG', '2002-05-01', '8', 'Medium', NULL, 'http://vgboxart.com/boxes/Xbox/6109-morrowind.jpg');
INSERT INTO gamereviews.videogames (id, gamename, ESRBrating, genre, releasedate, score, replayability, AdminReview, picturelink) VALUES (NULL, 'Grand Theft Auto 3', 'Mature', 'Open World Action', '2001-10-22', '9', 'Medium-High', NULL, 'http://ts4.mm.bing.net/th?id=H.4983202306132051&pid=1.7');
INSERT INTO systems (id, system) VALUES (1,'Xbox 360');
INSERT INTO systems (id, system) VALUES (2,'PC');
INSERT INTO systems (id, system) VALUES (3,'PC');
INSERT INTO systems (id, system) VALUES (3,'PS3');
INSERT INTO systems (id, system) VALUES (3,'Xbox 360');
INSERT INTO systems (id, system) VALUES (4,'SNES');
INSERT INTO systems (id, system) VALUES (4,'GBA');
INSERT INTO systems (id, system) VALUES (4,'Virtual Console');
INSERT INTO systems (id, system) VALUES (5,'Gameboy');
INSERT INTO systems (id, system) VALUES (6,'Gamecube');
INSERT INTO systems (id, system) VALUES (7,'PS2');
INSERT INTO systems (id, system) VALUES (7,'PS3');
INSERT INTO systems (id, system) VALUES (7,'PC');
INSERT INTO systems (id, system) VALUES (7,'Xbox 360');
INSERT INTO systems (id, system) VALUES (8,'PC');
INSERT INTO systems (id, system) VALUES (9,'PS1');
INSERT INTO systems (id, system) VALUES (10,'Xbox');
INSERT INTO systems (id, system) VALUES (10,'PC');
INSERT INTO systems (id, system) VALUES (11,'Android');
INSERT INTO systems (id, system) VALUES (11,'PS2');
INSERT INTO systems (id, system) VALUES (11,'PC');
INSERT INTO systems (id, system) VALUES (11,'Xbox');
INSERT INTO systems (id, system) VALUES (11,'Mac');
INSERT INTO systems (id, system) VALUES (11,'iOS');
INSERT INTO systems (id, system) VALUES (11,'PS3');