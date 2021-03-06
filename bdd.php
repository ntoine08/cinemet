-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 07 Mai 2019 à 16:09
-- Version du serveur :  5.7.25-0ubuntu0.18.04.2
-- Version de PHP :  7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cinemets`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteur`
--

CREATE TABLE `acteur` (
  `ID_acteur` int(11) NOT NULL,
  `nom_acteur` varchar(100) NOT NULL,
  `nationalite_acteur` varchar(100) NOT NULL,
  `date_de_naissance_acteur` date NOT NULL,
  `age_acteur` varchar(100) NOT NULL,
  `lieu_de__naissance_acteur` varchar(100) NOT NULL,
  `biographie_acteur` text NOT NULL,
  `img_acteur` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `acteur`
--

INSERT INTO `acteur` (`ID_acteur`, `nom_acteur`, `nationalite_acteur`, `date_de_naissance_acteur`, `age_acteur`, `lieu_de__naissance_acteur`, `biographie_acteur`, `img_acteur`) VALUES
(1, 'Brie Larson', 'Américaine', '1989-10-01', '29 ans', 'Sacramento - Californie - Etats-Unis', 'Depuis qu\'elle est enfant, Brie Larson sait qu\'elle veut devenir comédienne. C\'est à l\'âge de 7 ans qu\'elle intègre l\'American Conservatory Theatre de San Fransisco et devient ainsi la plus jeune élève de l\'Histoire de l\'école, qui a l\'habitude d\'accepter ses étudiants à partir de 8 ans. Elle joue dans ses premières productions à 9 ans en enchaînant des rôles secondaires dans des épisodes de séries télévisées comme Les Anges du Bonheur (1998) ou encore Popular (1999). Elle endosse également des petits rôles dans des fictions pour le cinéma, dont 30 ans sinon rien (2004) avec Jennifer Garner.\r\n\r\n\r\nEn 2005, Brie est l\'une des têtes d\'affiche de la comédie Hoot, aux côtés de Luke Wilson et Logan Lerman, où des adolescents tentent de sauver une espèce de hiboux en voie d\'extinction. Après un passage éclair sur la saison 3 de la série Ghost Whisperer, elle rejoint en 2009 les castings de Tanner Hall avec Rooney Mara et House Broken avec Danny DeVito avant de décrocher le rôle qui la fait connaître du grand public, celui de Kate Gregson dans les trois saisons de la série United States of Tara. La série de Diablo Cody (scénariste du film Juno avec Ellen Page) saluée par la critique, qui met en scène Toni Collette dans le rôle de Tara, mère de famille ayant un problème de personnalité multiple, est un tremplin pour l\'actrice.\r\n\r\n\r\nEntre la première et deuxième saison, on la voit dans le rôle marquant d\'Envy Adams, leader du groupe mondialement connu The Clash at Demonhead (aussi chanteuse, elle interprète elle-même la chanson Black Sheep) et ex-petite amie de Scott Pilgrim - interprété par Michael Cera -, dans le film réalisé par Edgar Wright en 2010, Scott Pilgrim Vs. The World. Par la suite en 2012, elle rejoint l\'équipe de 21 Jump Street menée par Jonah Hill et Channing Tatum dans le personnage de Molly, lycéenne dont Hill tombe amoureux.\r\n\r\n\r\nUn an après, elle porte le film States of Grace de Destin Cretton, qui remporte de nombreux prix dans les festivals. La comédienne repart d’ailleurs elle-même avec quelques prix pour son interprétation, un au Festival de Locarno et l\'autre au Gotham Independant Film Awards. C\'est la même année qu\'elle joue la soeur de Joseph Gordon-Levitt dans le premier film réalisé par celui-ci, Don Jon, dans un rôle très présent mais quasi-muet.\r\n\r\nEn 2016, la jeune femme est propulsée sur le devant de la scène internationale en remportant l\'Oscar de la meilleure actrice pour son interprétation de Joy, une mère séquestrée avec son garçon de 5 ans dans une petite pièce dans Room de Lenny Abrahamson. Brie affronte ensuite King Kong dans Skull Island en 2017 avant d\'enfiler le costume de Captain Marvel dans ce film de super-héros signé Anna Boden et Ryan Fleck.', 'acteurs/brie.jpg'),
(2, 'Robert Downey jr', 'américain', '1965-04-04', '54 ans', 'New York, New York - Etats-Unis', 'Fils du cinéaste Robert Downey Sr.\r\n\r\nAprès des études à Los Angeles, Robert Downey Jr. s\'installe à New York à l\'âge de 16 ans pour y débuter une carrière de comédien. Il s\'illustre notamment dans Baby, it\'s you (1983) et Une créature de rêve (1985), mais c\'est en participant régulièrement à l\'émission télévisée comique Saturday night live qu\'il accède à la célébrité.\r\n\r\n\r\nL\'année 1987 marque un tournant dans sa carrière : Neige sur Beverly Hills, l\'adaptation du roman \"Less than zero\" de Bret Easton Ellis dans laquelle il incarne un cocaïnomane, lui apporte la reconnaissance critique. Mais la suite est moins rose et la réalité va finir par rattraper la fiction : l\'acteur va en effet connaître de sérieux problèmes avec la drogue et multiplier les séjours en cure de désintoxication. \r\n\r\nAprès un passage à vide, Robert Downey Jr. revient sur le devant de la scène au début des années 90 en se retrouvant crédité au générique de Short cuts (1993) de Robert Altman et en étant nommé la même année à l\'Oscar du Meilleur acteur pour son interprétation du légendaire Chaplin dans un biopic signé Richard Attenborough. Plébiscité par la profession, il fait face aux Tueurs nés (1994) d\'Oliver Stone et passe un Week-end en famille (1995) avec Jodie Foster.\r\n\r\n\r\nMalgré ses excès en tous genres, Robert Downey Jr. parvient à tenir sa carrière en éveil, incarnant des personnages peu recommandables comme l\'officier John Royce dans US Marshals (1997), inquiétants comme le psy, amant de Halle Berry, dans Gothika (2004), voire même terrifiants comme le tueur en série de Prémonitions (1998). Egalement à l\'aise dans la comédie, il remporte en 2001 le Golden Globe du Meilleur second rôle masculin dans une série pour sa prestation dans le feuilleton à succès Ally McBeal, et se retrouve, quatre ans plus tard, en tête d\'affiche de Kiss kiss, bang bang, un polar à l\'image de l\'acteur : déjanté, tout comme le sera Tonnerre sous les Tropiques en 2008. Il signe alors les prémices de sa renaissance dans le milieu du cinéma après un passage par la case prison, conséquence d\'une toxicomanie désormais derrière lui.\r\n\r\n\r\nLibre et en bonne santé, il enchaîne les seconds rôles marquants : tour à tour, journaliste dans Good Night, and Good Luck de George Clooney et médecin dans Raymond de Brian Robbins, l\'acteur devient, en 2007, l\'énigmatique Lionel qui séduit Nicole Kidman dans Fur : un portrait imaginaire de Diane Arbus. A l\'affiche, la même année, de Zodiac de David Fincher, où il tente, aux côtés de Jake Gyllenhaal, de mettre un terme aux agissements d\'un tueur en série, il rejoint ensuite Eric Bana et Drew Barrymore dans Lucky You de Curtis Hanson. Fort de ce nouveau tournant qu\'a pris sa carrière, Robert Downey Jr. n\'en finit pas de gravir les échelons. \r\n\r\n\r\nIl devient même l\'un des acteurs les plus bancables d\'Hollywood grâce à deux franchises très lucratives, dans lesquelles le comédien crève l\'écran : il incarne un super-héros Marvel dans Iron Man en 2008 et ses deux suites Iron Man 2 en 2010 et 3 en 2013 (sans oublier son importante participation à Avengers, Avengers 2 et Captain America Civil War par le biais de ce même personnage) tout en prêtant ses traits à l\'incontournable Sherlock Holmes pour les besoins de deux nouvelles versions (2010 et 2012) explosives centrées sur le célèbre détective, à base de kung-fu, d\'humour et d\'action. Ces succès commerciaux colossaux ne l\'empêchent toutefois pas de prendre part à des films plus ancrés dans la réalité, comme l\'émouvant Soliste (2009), l\'hilarant Date limite (2010) et le judiciaire Le Juge (2014).\r\n', 'acteurs/robert.jpg'),
(3, 'Eva Green', 'française', '1980-07-06', '38 ans', 'Paris - France', 'Fille de la comédienne Marlène Jobert et d\'un chirurgien-dentiste d\'origine suédoise, Eva Green s\'initie à la comédie à la \"Webber Douglas Acting School\" de Londres, avant de suivre en France les cours d\'Eva Saint-Paul. Remarquée sur les planches dans \"Jalousie en 3 fax\", pour lequel elle est nommée au Molière de la révélation théâtrale en 2002, elle joue ensuite dans \"Turcaret\" sous la direction de Gerard Desarthe.\r\n\r\nEn 2003, Eva Green est la troublante révélation de Innocents - the dreamers de Bertolucci. Dans ce huis clos ayant pour toile de fond Mai 68, elle incarne Isabelle, jeune fille idéaliste et cinéphile qui s\'initie à l\'amour en compagnie de son frère jumeau (Louis Garrel, le fils de Philippe) et d\'un étudiant américain (Michael Pitt). Jeune première délaissée par Romain Duris dans la superproduction en costumes Arsène Lupin, Eva Green part ensuite tenter sa chance à Hollywood : en 2005, dans Kingdom of Heaven, fresque sur les Croisades signée Ridley Scott, elle interprète Sibylla, reine libre et mystérieuse dont s\'éprend Orlando Bloom. Un an plus tard, sa carrière prend un tournant décisif lorsqu\'elle est choisie pour incarner Vesper Lynd, la James Bond girl de Casino Royale, nouveau volet de la saga 007 dans lequel elle donne la réplique à l\'agent secret Daniel Craig.\r\n\r\nEn 2007, la belle Eva enchaîne avec une autre superproduction puisqu\'elle incarne Serafina Pekkala dans A la croisée des mondes : la boussole d\'or, conte fantastique pour enfants dans la lignée de Narnia. Au Royaume-Uni, où elle revient par intermittence, elle donne la réplique à l\'acteur britannique Sam Riley dans le thriller fantastique Dark World (2008), et partage l\'affiche avec la jeune Juno Temple dans Cracks, où elle campe une enseignante trouble qui rêve d\'évasion. La comédienne tombe ensuite amoureuse d\'Ewan McGregor dans un monde apocalyptique où les humains perdent toutes perceptions sensorielles (Perfect Sense), et fait son entrée dans le bestiaire des créatures burtoniennes pour Dark Shadows (2012), où elle côtoie Johnny Depp, grimé pour l\'occasion en vampire. En 2014, elle campe la redoutable Artemisia dans le guerrier et sanglant 300 : La naissance d\'un Empire.\r\n\r\nEnchainant les projets, Eva Green est, cette même année, à l\'affiche du western The Salvation puis d\'une autre adaptation d\'une oeuvre de Frank Miller : Sin City : j\'ai tué pour elle. Parallèlement, la comédienne goûte également aux joies du petit écran via la série horrifique Penny Dreadful. En 2016, la belle Eva collabore à nouveau avec Tim Burton pour Miss Peregrine et les enfants particuliers. Elle y prête ses traits à Peregrine Faucon, la gérante d\'un orphelinat accueillant des enfants ayant des dons spéciaux. La jeune femme va prendre sous son aile Jacob, un adolescent campé par Asa Butterfield.', 'acteurs/eva.jpg'),
(4, 'Marc Lavoine', 'français', '1962-08-06', '56 ans', 'Longjumeau, Essonne - France', 'Après une courte expérience théâtrale, Marc Lavoine, en parallèle à son intense activité musicale, commence sa carrière d\'acteur à la télévision, dans la série Pause-café (1981). Mais c\'est deux ans plus tard qu\'il apparaît pour la première fois sur grand écran, dans Frankenstein 90 d\'Alain Jessua. Au générique de L\'Enfer (1994) de Claude Chabrol, il tente de se détacher de son image de chanteur séducteur en jouant notamment un troublant et ambigu officier phalangiste aux côtés de Jean-Louis Trintignant dans Fiesta (1995) ou un aristocrate déluré dans Blanche (2002) de Bernie Bonvoisin.\r\n\r\nL\'ancien journaliste de Studio Marc Esposito décèle rapidement les talents de comédien de Marc Lavoine et essaie de les exploiter au mieux en l\'invitant à participer au quatuor d\'amis du Coeur des hommes (2003). Forts du succès remporté par ce film de potes, les deux hommes poursuivent leur collaboration avec Toute la beauté du monde (2005) et Le Coeur des hommes 2 (2007). Egalement courtisé par Neil Jordan, il joue dans L\'Homme de la Riviera (2003), qui reste sa seule expérience dans le cinéma américain à ce jour.\r\n\r\nLe brun ténébreux s\'essaye également au doublage en prêtant sa voix de velours à Darkos dans la version française du film d\'animation Arthur et les Minimoys (2006) de Luc Besson. Il retrouve ce personnage pour le dernier volet de la trilogie en 2010 et, entre les deux, double le fourbe Taï Lung, vilain de Kung Fu Panda (2008).\r\n\r\nMarc Lavoine prend aussi part à quelques comédies romantiques, ainsi il succombe au charme de Carole Bouquet dans Si c\'était lui... (2007) puis à celui de Barbara Schulz dans Celle que j\'aime (2009) d\'Elie Chouraqui qui l\'avait déjà dirigé, treize ans plus tôt, dans Les Menteurs. Le comédien tourne également dans des comédies pures et est successivement à l\'affiche des Meilleurs amis du monde de Julien Rambaldi (2010) et des Tribulations d\'une caissière (2011) réalisé par le frère de ce dernier, Pierre Rambaldi.\r\n\r\nCependant, avec Liberté (2010) de Tony Gatlif, Marc Lavoine aborde une thématique nettement plus grave et tragique, puisqu\'il porte sur ses épaules un film évoquant le sort tragique réservé aux Roms et Tsiganes par le régime Nazi. Il change encore une fois de registre, deux ans plus tard, en incarnant son premier vrai méchant de cinéma (hors films d\'animation) : un policier corrompu dans Mains armées de Pierre Jolivet.\r\n\r\nEn 2013, Marc reprend son rôle d\'Alex dans Le Coeur des hommes 3 puis incarne un gynécologue dans la comédie d\'Audrey Dana, Sous les jupes des filles. Il passe également par la case télé en se glissant dans la peau de Louis Daniel dans les saisons 1 et 2 de Crossing Lines. En 2016, le comédien campe un père meurtri par l\'endoctrinement de sa fille dans un groupe djihadiste dans Ne m\'abandonne pas. L\'acteur retourne ensuite dans le registre comique en incarnant le tonton homosexuel de Kev Adams dans Love Addict.', 'acteurs/marc.jpg'),
(5, 'Jason Clark', 'Australien', '1969-07-17', '49 ans', 'Australie', 'Jason Clarke débute son métier d\'acteur dans son pays natal, en Australie. Pendant de nombreuses années, il s\'illustre essentiellement à la télévision et apparaît dans de multiples fictions, comme Diagnostic : Meurtre (1996), Wildside (1998), Fréquence Crime (id.), ou encore Blue Heelers (1999) et Summer Bay (2002), qui réunit pléthore de stars locales, dont Heath Ledger, Guy Pearce ou encore Simon Baker. Plus tard, Clarke se fait remarquer en incarnant le personnage de Tommy Caffee dans la série Brotherhood. De 2006 à 2008, il y campe un politicien qui s\'oppose à son frère gangster, interprété par le comédien anglais Jason Isaacs. \r\n\r\nCôté cinéma, Clarke peine tout d\'abord à se faire un nom et reste cantonné à des rôles de seconde zone. Il s\'illustre dans un premier temps dans bon nombre de petits films confidentiels, comme Praise (1998), un drame sur deux jeunes marginaux, ou encore Risk, un thriller australien. Il enchaîne les petits rôles sur grand écran et joue également dans plusieurs téléfilms. \r\n\r\nCependant, à force de persévérance, l\'acteur commence à décrocher des contrats plus intéressants et donne la réplique à des vedettes d\'envergure : Jason Statham dans Course à la mort, mais aussi et surtout Johnny Depp et Christian Bale dans le film de gangsters Public Enemies, thriller de Michael Mann à la mise en scène léchée, qui retrace le parcours du plus célèbre hors-la-loi des années 1930, John Dillinger. \r\n\r\nL\'acteur poursuit ensuite sur sa lancée et en 2010, il est à l\'affiche du drame financier Wall Street : l\'argent ne dort jamais, sous la houlette d\'Oliver Stone. Il y donne la réplique à Michael Douglas et à Shia LaBeouf. S\'ensuivent un drame familial sur fond de pédophilie avec Trust, ainsi qu\'un film policier (Killing Fields). En 2012, le comédien, dont la carrière est sur une pente ascendante, renoue avec le film d\'époque, puisqu\'il rejoint le casting de Des hommes de loi, un western dont l\'action se déroule durant la Prohibition, aux côtés de Tom Hardy, de Gary Oldman et de son compatriote Guy Pearce. \r\n\r\nSa notoriété ne cessant d\'augmenter, Jason Clarke enchaine les projets de grande ampleur, comme Zero Dark Thirty (2013) , Gatsby le Magnifique (id.), La Planète des singes : l\'affrontement (2014), Terminator: Genesis (2015) ou encore Everest (id.).', 'acteurs/jason.jpg'),
(6, 'Atsumi Tanezaki', 'japonaise', '2000-09-27', 'inconnu', 'japon', '\r\nTanezaki a d\'abord reconnu son désir de devenir un doubleur après avoir regardé Sailor Moon dans son enfance. Dans une interview accordée à Repotama, Tanezaki, une lettre d\'information japonaise sur les divertissements, a révélé qu\'elle s\'intéressait pour la première fois à la voix après avoir visionné l\'épisode 45 de Sailor Moon, \"La mort des marins protecteurs: la bataille finale tragique\". [2] Tanezaki a expliqué que le doublage dans l\'épisode était si percutant qu\'il l\'a incitée à poursuivre une carrière dans le doublage. Elle a commencé à étudier le doublage dans une école de formation après avoir obtenu son diplôme d\'études secondaires dans la préfecture de Oita, à Tokyo, en utilisant des fonds provenant d\'emplois à temps partiel.\r\n\r\nDans l\'interview, elle a déclaré que ses actrices préférées sont Miyuki Sawashiro et Mayumi Tanaka. Enfant, elle a assisté à un concert de Junko Iwao, où elle a eu l\'occasion de parler à Iwao. Après avoir exprimé son désir de devenir actrice dans un rôle de fan, Iwao a répondu en indiquant qu\'elle était impatiente de pouvoir travailler avec elle.\r\n', ''),
(7, 'Christian Clavier', 'français', '1952-05-06', '66 ans', 'Paris - France', 'Frère du réalisateur Stéphane Clavier, Christian Clavier étudie au lycée Pasteur de Neuilly en compagnie de Michel Blanc, Gérard Jugnot et Thierry Lhermitte. Il passe brillamment son baccalauréat et poursuit des études de sciences politiques pendant deux ans. En compagnie de ses amis de lycée, il monte la troupe du Splendid également composée de Josiane Balasko et Marie-Anne Chazel, qui sera sa femme à la ville. Christian Clavier devient ainsi auteur, metteur en scène et interprète de Je vais craquer, Ma tête est malade et, en 1978, Amours, coquillages et crustacés qui sera adapté au cinéma par Patrice Leconte sous le titre Les Bronzés.\r\n\r\n\r\nEn 1975, il fait ses débuts au cinéma en compagnie de Michel Blanc dans Que la fête commence de Bertrand Tavernier, puis dans F. comme Fairbanks de Maurice Dugowson. C\'est Pierre Lary qui lui propose un premier véritable rôle dans Le Diable dans la boîte (1977) aux côtés de Jean Rochefort et Michael Lonsdale. Après l\'aventure des Bronzés et des Bronzés font du ski (1979), il tourne à deux reprises sous la direction de François Leterrier, jouant les \"bobos\" parisiens dans les comédies à succès Je vais craquer (1980) et Les Babas cool (1981). Puis il retrouve le café-théâtre pour la pièce culte Le Père Noël est une ordure, adaptée au cinéma par Jean-Marie Poiré. Le succès ne le quitte plus.\r\n\r\n\r\nDevenus inséparables, Christian Clavier et le cinéaste poursuivent leur collaboration avec Papy fait de la résistance (1983), Twist again à Moscou (1986) et Mes meilleurs copains (1988), l\'histoire de retrouvailles d\'amis de lycée sur un mode nostalgique et chaleureux. Dans les années 90, le duo enchaîne d\'autres succès publics : Opération corned-beef (1991), où Christian Clavier donne pour la première fois la réplique à Jean Reno, Les Visiteurs (1993) et sa suite Les Couloirs du temps, les visiteurs 2 (1998) ainsi que Les Anges gardiens (1995). Avec le triomphe historique au box-office des Visiteurs, Christian Clavier assoit son statut d\'acteur comique numéro un et reprend le flambeau de Louis De Funès, dont il se réclame fréquemment. Mais la filiation est encore plus nette avec La Soif de l\'or (1993) de Gérard Oury, le cinéaste qui a fait la gloire de De Funès. Dans un rôle de grippe-sou, Christian Clavier marche sur les traces de son aîné.\r\n\r\n\r\nEn 1999, un nouveau défi s\'offre à lui : incarner Astérix le gaulois, aux côtés de Gérard Depardieu, et sous la direction de Claude Zidi. Pour Astérix et Obélix contre César, le public est une fois de plus au rendez-vous, mais pas les critiques qui déplorent ses choix d\'acteur. Après l\'échec des Visiteurs en Amérique (2001) et la réussite d\'Astérix et Obélix : mission Cléopâtre (2002) d\'Alain Chabat, Christian Clavier tend à s\'éloigner des personnages hystériques qui ont fait son succès, pour prêter ses traits à l\'empereur Napoléon (2002) dans un téléfilm d\'Yves Simoneau.\r\n\r\n\r\nSorti grandi de cette expérience, l\'acteur revient à ses premières amours, la comédie, se laissant diriger par son frère Stéphane pour les besoins de Lovely Rita Sainte Patronne des cas désespérés (2003), et donnant la réplique à l\'une de ses idoles, Michel Serrault, dans Albert est méchant (2004). Plus actif que jamais, il écrit et interprète, aux côtés de son complice Jean Reno, l\'adaptation cinématographique de la bande dessinée L\'Enquête corse de Pétillon. C\'est sur le tournage de ce film qu\'il fait la connaissance de Caterina Murino, une actrice italienne à qui il propose de jouer aux côtés de l\'équipe du Splendid réunie au grand complet dans Les Bronzés 3 amis pour la vie (2006). Après les échecs de L\' Auberge rouge en 2007 et de La Sainte Victoire en 2009, il passe en 2011 pour la première fois de sa carrière à la fois devant et derrière la caméra pour le cocasse On ne choisit pas sa famille, dans lequel il traite de l\'homoparentalité et de l\'adoption en Thaïlande, en compagnie de ses fidèles amis Jean Reno et Muriel Robin. \r\n\r\n\r\nFidèle à son statut d\'acteur ultra bancable, Clavier enchaine les succès au box-office au rayon comédie : Les Profs (2013), Une heure de tranquillité (2014), Babyssitting 2 (2015) mais surtout Qu\'est-ce qu\'on a fait au Bon Dieu? et ses plus de 12 millions d\'entrées. Les choses ne devraient pas changer pour lui puisqu\'il est en 2016 à l\'affiche du très attendu Les Visiteurs - La Révolution où il reprend son rôle culte de Jacquouille aux côtés de Reno.', 'acteurs/christian.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

CREATE TABLE `films` (
  `ID_film` int(11) NOT NULL,
  `nom_film` varchar(100) NOT NULL,
  `date_de_sortie_film` date NOT NULL,
  `duree_film` varchar(100) NOT NULL,
  `img_film` varchar(100) NOT NULL,
  `nationalite_film` varchar(100) NOT NULL,
  `synopsis_film` text NOT NULL,
  `ID_genre` int(11) NOT NULL,
  `ID_acteur` int(11) NOT NULL,
  `ID_realisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `films`
--

INSERT INTO `films` (`ID_film`, `nom_film`, `date_de_sortie_film`, `duree_film`, `img_film`, `nationalite_film`, `synopsis_film`, `ID_genre`, `ID_acteur`, `ID_realisateur`) VALUES
(1, 'Captain Marvel', '2019-03-06', '02h 04min', 'images/captain-marvel.jpg', 'Américain', 'Captain Marvel raconte l’histoire de Carol Danvers qui va devenir l’une des super-héroïnes les plus puissantes de l’univers lorsque la Terre se révèle l’enjeu d’une guerre galactique entre deux races extraterrestres.', 1, 1, 1),
(2, 'Avengers: Endgame', '2019-04-24', '03h 01min', 'images/avengers-endgame.jpg', 'Américain', 'Thanos ayant anéanti la moitié de l’univers, les Avengers restants resserrent les rangs dans ce vingt-deuxième film des Studios Marvel, grande conclusion d’un des chapitres de l’Univers Cinématographique Marvel.', 2, 2, 2),
(3, 'Dumbo', '2019-03-27', '01h 52min', 'images/dumbo.jpg', 'Américain', 'Les enfants de Holt Farrier, ex-artiste de cirque chargé de s’occuper d’un éléphanteau dont les oreilles démesurées sont la risée du public, découvrent que ce dernier sait voler...', 7, 3, 3),
(4, 'Le parc des merveilles', '2019-04-03', '01h 26min', 'images/le-parc-des-merveilles.jpg', 'Américain, Espagnol', 'Le Parc des Merveilles raconte l’histoire d’un parc d’attractions fabuleux né de l’imagination extraordinaire d’une petite fille appelée June.\r\nUn jour, le Parc prend vie...', 3, 4, 4),
(5, 'Simetierre', '2019-04-10', '01h 41min', 'images/simetierre.jpg', 'Américain', 'Le docteur Louis Creed, sa femme Rachel et leurs deux jeunes enfants quittent Boston pour s\'installer dans une région rurale du Maine. Près de sa maison, le docteur découvre un mystérieux cimetière caché au fond des bois. Peu après, une tragédie s’abat sur lui. Creed sollicite alors l\'aide d\'un étrange voisin, Jud Crandall. Sans le savoir, il vient de déclencher une série d’événements tragiques qui vont donner naissance à de redoutables forces maléfiques.', 4, 5, 5),
(6, 'Liz et l\'oiseau bleu', '2019-04-17', '01h 30min', 'images/liz-et-l\'oiseau-bleu.jpg', 'Japonais', 'Nozomi est une jeune femme extravertie et très populaire auprès de ses camarades de classe, doublée d\'une talentueuse flûtiste. Mizore, plus discrète et timide, joue du hautbois. Mizore se sent très proche et dépendante de Nozomi, qu\'elle affectionne et admire. Elle craint que la fin de leur dernière année de lycée soit aussi la fin de leur histoire, entre rivalité musicale et admiration.Les deux amies se préparent à jouer en duo pour la compétition musicale du lycée Kita Uji. ', 5, 6, 6),
(7, 'Convoi exceptionnel', '2019-03-13', '01h 22min', 'images/Convoi-exceptionnel.jpg', 'Français,belge', 'C’est l’histoire d’un type qui va trop vite et d’un gros qui est trop lent. Foster rencontre Taupin. Le premier est en pardessus, le deuxième en guenilles. Tout cela serait banal si l’un des deux n’était en possession d’un scénario effrayant, le scénario de leur vie et de leur mort. Il suffit d’ouvrir les pages et de trembler…', 6, 7, 7);

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `ID_genre` int(11) NOT NULL,
  `nom_genre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `genre`
--

INSERT INTO `genre` (`ID_genre`, `nom_genre`) VALUES
(1, 'action '),
(2, 'fantastique'),
(3, 'animation'),
(4, 'épouvante-horreur'),
(5, 'drame'),
(6, 'comédie'),
(7, 'famille');

-- --------------------------------------------------------

--
-- Structure de la table `realisateur`
--

CREATE TABLE `realisateur` (
  `ID_realisateur` int(11) NOT NULL,
  `nom_realisateur` varchar(100) NOT NULL,
  `nationalite_realisateur` varchar(100) NOT NULL,
  `date_de_naissance_realisateur` date NOT NULL,
  `age_realisateur` varchar(100) NOT NULL,
  `lieu_de_naissance_realisateur` varchar(100) NOT NULL,
  `biographie_realisateur` text NOT NULL,
  `img_realisateur` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `realisateur`
--

INSERT INTO `realisateur` (`ID_realisateur`, `nom_realisateur`, `nationalite_realisateur`, `date_de_naissance_realisateur`, `age_realisateur`, `lieu_de_naissance_realisateur`, `biographie_realisateur`, `img_realisateur`) VALUES
(1, 'Anna Boden', 'Américaine', '1976-09-20', '42 ans', 'Etats-Unis', 'Anna Boden rencontre Ryan Fleck lors du tournage d\'un film étudiant en 2002, alors qu\'ils suivent tous deux le cursus de cinéma à la Tisch School of the Arts de l\'université de New York. Les deux réalisateurs en herbe sortent rapidement ensemble et décident de collaborer.\r\nLe couple réalise d\'abord des courts-métrages documentaires (Have You Seen This Man?, Young Rebels) avant de s\'essayer à la fiction avec Gowanus, Brooklyn. Le film est avant tout un moyen d\'intéresser de potentiels investisseurs à un projet plus important : Half Nelson, qui n\'est alors qu\'à l\'état de scénario en développement. Une stratégie qui s\'avère payante, puisque le court remporte un prix au Festival de Sundance en 2004. Le duo peut donc se concentrer sur son premier long qui sort en 2006, avec dans le premier rôle un jeune Ryan Gosling touchant en professeur brillant mais paumé dans un lycée de Brooklyn. L\'acteur est même nommé aux Oscars en 2007.\r\n\r\nLe duo s\'établit dans le milieu indépendant et s\'attèle en 2008 à la réalisation de Sugar, un drame sur la star dominicaine du base-ball Miguel Santos, présenté pour en avant-première mondiale à Sundance mais inédit en France. Il s\'agit de leur première réalisation en duo, Half Nelson ayant mis en scène par Ryan Fleck seulement. En 2010, ils dirigent Zach Galifianakis, Emma Roberts et Viola Davis dans Une drôle d\'histoire, une comédie enlevée sur des patients d\'un hôpital psychiatrique. En parallèle, Anna Boden et Ryan Fleck infiltrent la télévision en réalisant quelques épisodes de plusieurs séries saluées par la critique (The Big C, Looking, The Affair, Billions). Pour Under Pressure, leur troisième collaboration, les réalisateurs s\'entourent à nouveau d\'un casting de choix : Ryan Reynolds, Ben Mendelsohn, Sienna Miller et Analeigh Tipton se retrouvent ainsi dans un thriller sous haute tension et aux ambitions plus affirmées.\r\n\r\nAu mois d\'avril 2017, Marvel annonce qu\'Anna Boden et Ryan Fleck seront les deux réalisateurs du très attendu Captain Marvel, avec Brie Larson dans le rôle de la super-héroïne qui débarque pour la première fois sur grand écran. ', 'réalisateurs/anna-boden.jpg'),
(2, 'Joe Russo', 'Américain', '1971-07-08', '47 ans', 'Cleveland, Ohio - Etats-Unis', 'Frère d\'Anthony Russo et fils d\'un homme politique libéral, Joe Russo grandit dans un quartier ouvrier italien de Cleveland, dans l\'Ohio. Avant de suivre une formation aux métiers du cinéma, il écrit, réalise et produit, en collaboration avec son frère, Pieces, une comédie dont il est lui-même interprète. Le film est présenté en 1997 au Slamdance Film Festival de Park City, dans l\'Utah, et à l\'American Film Institute Festival à Los Angeles, où Joe obtient le Prix du meilleur acteur de l\'American Film Institute.\r\n\r\n\r\nSteven Soderbergh découvre le talent des frères Russo à Slamdance et leur propose de produire, via sa société Section Eight, leur film suivant : Bienvenue à Collinwood (2001). Cette comédie, interprétée par William H. Macy, Sam Rockwell et George Clooney, met en scène l\'organisation d\'un cambriolage censé être juteux et facile. En 2006, les deux frères réalisent leur troisième long-métrage, une troisième comédie, Toi et moi...et Duprée, avec Owen Wilson, Matt Dillon et Michael Douglas au casting. \r\n\r\n\r\nParallèlement à cela et depuis 2003, ils continuent de réaliser et produire plusieurs épisodes de séries telles que Lucky, LAX, Arrested Development, Carpoolers, Community ou bien encore Happy Endings. \r\n\r\n\r\nHuit ans plus tard, la carrière des frères Russo prend un tournant non négligeable lorsqu\'ils se retrouvent aux commandes de l\'attendu blockbuster Captain America, le soldat de l\'hiver. Le film est un succès colossal (714 millions de dollars de recettes mondiales alors que le premier volet avait fait 370 millions) et ils rempilent ainsi pour le troisième opus consacré aux aventures de Steve Rogers inaugurant la Phase III de l\'Univers cinématographique Marvel : Captain America: Civil War.\r\n\r\n\r\nEnsuite, Joe et Anthony Russo s\'attèleront à Avengers : Infinity War (Partie 1) et Partie 2 qui sortiront respectivement en 2018 et 2019.', 'réalisateurs/joe-russo.jpg'),
(3, 'Tim Burton', 'Américain', '1958-08-25', '60 ans', 'Burbank, Californie - États-Unis', 'Après des études à la California Institute of the Arts, Tim Burton débute chez Disney dans les années 70, collaborant à l\'animation de plusieurs dessins animés, dont Rox et Rouky. Après cette expérience, il fait ses débuts dans la réalisation par le biais de deux courts métrages, l\'un d\'animation (Vincent, 1982), l\'autre de facture classique, Frankenweenie (1984), parodie revendiquée de Frankenstein et des films de la firme Hammer.\r\n\r\nEn 1985, Tim Burton réalise son premier long métrage, Pee Wee Big Adventure, qui plante déjà les bases d\'un univers très personnel, où le fantastique le dispute à l\'onirisme. Trois ans plus tard, il se révèle au grand public avec la comédie Beetlejuice, fable fantastico-macabre dans laquelle Michael Keaton incarne un \"bio-exorciste\" totalement déjanté. Il retrouvera le comédien pour Batman (1988) et Batman, le défi (1991), le glissant dans le costume du célèbre homme chauve-souris et démontrant par la-même que son génie créatif peut aussi s\'exprimer sur des films dits \"de commande\".\r\n\r\nFidèle en amitiés professionnelles, Burton entame en 1990, par la romance fantastique Edward aux mains d\'argent, une fructueuse collaboration (huit films) avec Johnny Depp. Après avoir donné au comédien le rôle d\'une invention humaine pourvue d\'un coeur et de lames de métal en guise de doigts, le cinéaste ne cessera de lui offrir des prestations fortes et originales. Ainsi, Depp se glisse sous les traits du réalisateur de séries Z Ed Wood (1994), fait tout pour percer le mystère d\'un cavalier sans tête dans Sleepy Hollow (1999), campe un inquiétant chocolatier dans Charlie et la chocolaterie (2005), adapté du livre pour enfants de Roald Dahl, et incarne le terrifiant barbier Sweeney Todd (2008) dans l\'adaptation de la comédie musicale de Stephen Sondheim.\r\n\r\nTim Burton parvient parfois à s\'affranchir du fantastique pur et d\'un cinéma très personnel bâti au fil des ans. Il emprunte ainsi un ton plus parodique avec Mars Attacks! (1996), qui narre une invasion extra-terrestre aussi tragique que délirante, se penche sur l\'exercice du remake avec La Planète des singes (2001), ou abandonne même toute excentricité avec la fable douce-amère Big fish (2003). Considéré comme l\'un des cinéastes les plus inventifs de sa génération, Tim Burton est également un producteur avisé, notamment dans le domaine du film d\'animation fantastique (James et la pêche géante ; L\'Etrange Noël de M. Jack ; Les Noces funèbres, qu\'il réalise ; Numéro 9, etc.). \r\n\r\nEn 2010, Tim Burton poursuit sa collaboration avec Johnny Depp et Helena Bonham Carter (sa femme, rencontrée sur le tournage de La Planète des singes), en leur offrant deux des rôles principaux de sa relecture d\'Alice au Pays des Merveilles, où il dirige la jeune Mia Wasikowska. Après cette production qui est l\'un des plus gros succès de tous les temps (un milliard de dollars au box office mondial), le cinéaste se plonge dans une libre adaptation d\'un feuilleton des années 60. Dans Dark Shadows (2012), il transforme ainsi Johnny Depp en vampire, dans une comédie macabre où la thématique de la malédiction côtoie celle du disco...\r\n\r\nEn 2014, avec Big Eyes, il change radicalement de sujet pour se lancer dans le biopic dédié à Walter et Margaret Keane, peintres célèbres dans les années 60 pour leurs portraits d’enfants aux très grands yeux. Burton produit et réalise ce film, qui offre des premiers rôles à Amy Adams et Christoph Waltz. 2016 marque le retour du cinéaste dans le genre fantastique avec Miss Peregrine et les enfants particuliers. Burton raconte l\'histoire de Jacob, un jeune homme qui découvre les indices et l’existence d’un monde mystérieux qui le mène dans un lieu magique : la Maison de Miss Peregrine pour Enfants Particuliers. Mais le mystère et le danger s’amplifient quand il apprend à connaître les résidents, leurs étranges pouvoirs…et leurs puissants ennemis. Ce film marque la seconde collaboration du metteur en scène avec Eva Green après Dark Shadows.', 'réalisateurs/tim-burton.jpg'),
(4, 'David Feiss', 'Américain', '1959-04-16', '60 ans', 'Etats-Unis', 'David Michael \"Dave\" Feiss est un créateur américain de séries télévisées d\'animations, né le 16 avril 1959 à Sacramento, en Californie, aux États-Unis.', 'réalisateurs/david-feiss.jpg'),
(5, 'Kévin Kolsch', 'Américain', '2019-05-01', 'inconnu', 'Etats-Unis', 'rien à dire', 'réalisateurs/kevin-kolsch.jpg'),
(6, 'Naoko Yamada', 'Japonaise', '1984-11-28', 'Préfecture de Gunma (Japon)', '34 ans', 'Naoko Yamada avait l’intention de travailler dans le cinéma après l’université, mais elle décide de rejoindre le studio Kyoto Animation après avoir vu une de leurs publicités2. Son premier travail est sur la série Inuyasha, où elle dessine les images de tweening, avant d\'être promue animateur clé sur Air2.\r\n\r\nAprès avoir dirigé un épisode de Clannad, elle fait ses débuts en tant que réalisatrice de série sur K-ON!, l\'adaptation d\'un manga tranche de vie sur la vie de cinq lycéennes montant un club de musique légère au sein de leur lycée2. La série est un succès, amenant le studio à produire une seconde saison et un film. En 2013, elle réalise Tamako Market et son film dérivé Tamako Love Story en 2014 pour lequel elle est récompensée aux Japan Media Arts Festival où elle obtient le New Face Award3. Film pour lequel elle produit l\'intégralité du storyboard et écrit les musiques du générique du début du film4,5.\r\n\r\nEn 2016, son projet suivant est Silent Voice, adaptation du manga du même nom traitant de l\'ijime, l\'harcèlement scolaire au Japon. Pour sa première semaine d\'exploitation au cinéma au Japon, le film se classe deuxième au box office japonais derrière Your Name. (le plus gros succès cinéma de l\'année au Japon) et engendre 2,3 millions de yens de recettes6. Le film est nommé pour de nombreuses récompenses comme pour le meilleur film d\'animation au Mainichi Film Awards et le film d\'animation de l\'année au Japan Academy Prize.\r\n\r\nEn 2018, elle réalise, toujours au cinéma, Liz to aoi tori basé sur l\'univers de la série télévisée Sound! Euphonium sur laquelle elle avait auparavant assuré la supervision en tant que directeur de production, une partie du storyboard et réalisé le premier épisode ainsi que son épisode final. Elle obtient pour ce film le prix Noburo Ofuji lors des 73th Mainichi Film Awards.\r\n\r\nTrès prolifique, depuis son entrée au studio Kyoto Animation, elle est créditée sur la quasi-totalité des séries et des films produits par le studio dans un ou plusieurs des différents domaines qu\'elle maîtrise, que ce soit au storyboard, à l\'animation ou à la réalisation d\'épisodes.\r\n\r\nPour cette dernière, le rôle le plus important d\'être un réalisateur est d\'observer les gens. Elle se décrit elle-même comme une réalisatrice de « méthode », mettant l\'accent sur l\'esprit des personnages.', 'réalisateurs/naoko-yamada.jpg'),
(7, 'Bertrand Blier', 'Français', '1939-03-14', '80 ans', 'Paris - France', 'Après avoir débuté comme assistant réalisateur en 1959 sur Oh! que mambo de John Berry et s\'être fait remarqué pour ses docu-fiction Hitler... connais pas ! en 1963, Bertrand Blier dirige son père, le légendaire Bernard Blier, dans son premier long métrage de fiction, Si j\'étais un espion (1967). \r\n\r\nIl faut cependant attendre 1974 pour que Blier réalisateur se fasse un nom avec le triomphe public des Valseuses et de son trio vedette Gérard Depardieu, Patrick Dewaere et Miou-Miou. La patte Blier s\'instaure : humour acerbe et vérité sociale. Quatre ans plus tard, Bertrand Blier retrouve son duo masculin Depardieu-Dewaere pour Préparez vos mouchoirs avant de diriger Depardieu en solo et son père dans Buffet froid (1979), César du meilleur scénario, puis Dewaere dans le subversif Beau-Pere (1981). \r\n\r\nScénariste de la totalité de ses films (mais également de Grosse Fatigue de Michel Blanc en 1994), le cinéaste signe avec Tenue de soirée l\'un des plus gros scandales du cinéma français des années 80 avec ses thèmes d\'homosexualité et de triolisme abordés sans détour. Il y retrouve une nouvelle fois Gérard Depardieu et Miou-Miou et glane le Prix d\'interprétation masculine du Festival de Cannes (pour Michel Blanc) et trois nominations aux Césars. Trois ans plus tard, le succès public et critique de Trop belle pour toi est encore plus imposant : Grand Prix du jury du Festival de Cannes et cinq Césars dont ceux du meilleur film, meilleur réalisateur et de la meilleure actrice (pour Carole Bouquet). \r\n\r\nLes années 1990 seront marquées par un raz-de-marée de récompenses, largement dû à sa collaboration avec Anouk Grinberg, nouvelle venue dans la galerie des comédiens de Blier. On citera Merci la vie (un César et 6 nominations) et Un, deux, trois, soleil en 1993 (deux César et surtout la Coupe Volpi du Meilleur Acteur du Festival de Venise pour Marcello Mastroianni) ainsi que Mon homme (1996), Prix de la meilleure actrice pour Anouk Grinberg au Festival de Berlin. \r\n\r\nEn 2000, le cinéaste réunit une trentaine de grands noms du cinéma français pour Les Acteurs, un hommage au métier du jeu teinté de dérision. Si le film est plutôt bien accueilli, Les Côtelettes, avec Philippe Noiret et Michel Bouquet en vieux épicuriens dissertant sur le sens de la vie et les plaisirs de la chair divise le public cannois, et reçoit un accueil national mitigé du public et de la critique. Blier revient en 2005 avec Combien tu m\'aimes ?, l\'histoire d\'un amour monnayé entre la péripatéticienne Monica Bellucci et son client Bernard Campan. Dix ans après Les Acteurs, il dirige à nouveau Albert Dupontel, devenu l\'incarnation du cancer de Jean Dujardin, dans la comédie dramatique Le Bruit des glaçons.', 'réalisateurs/bertrand-blier.jpg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `acteur`
--
ALTER TABLE `acteur`
  ADD PRIMARY KEY (`ID_acteur`);

--
-- Index pour la table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`ID_film`),
  ADD KEY `films_genre_FK` (`ID_genre`),
  ADD KEY `films_acteur0_FK` (`ID_acteur`),
  ADD KEY `films_realisateur1_FK` (`ID_realisateur`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`ID_genre`);

--
-- Index pour la table `realisateur`
--
ALTER TABLE `realisateur`
  ADD PRIMARY KEY (`ID_realisateur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `acteur`
--
ALTER TABLE `acteur`
  MODIFY `ID_acteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `films`
--
ALTER TABLE `films`
  MODIFY `ID_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `ID_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `realisateur`
--
ALTER TABLE `realisateur`
  MODIFY `ID_realisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `films`
--
ALTER TABLE `films`
  ADD CONSTRAINT `films_acteur0_FK` FOREIGN KEY (`ID_acteur`) REFERENCES `acteur` (`ID_acteur`),
  ADD CONSTRAINT `films_genre_FK` FOREIGN KEY (`ID_genre`) REFERENCES `genre` (`ID_genre`),
  ADD CONSTRAINT `films_realisateur1_FK` FOREIGN KEY (`ID_realisateur`) REFERENCES `realisateur` (`ID_realisateur`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;









<?php
    }
    $reponse->closeCursor(); // pour fermer une fois qu'on aafficher tout ce qu'on voulais de la base de donnée
    }
    else 
    {
        while ($donnee = $realisateur->fetch()) //boucle while pour afficher les données
        { 
            header('Location: réalisateurs.php?ID_realisateur=1');
            exit();
        }
    }
    ?>

<?php

class Database
{
    private static $dbHost = "mysql:host=localhost";
    private static $dbName = "cinemets";
    private static $dbUser = "sunjian";
    private static $dbUserPassword = "ichigo08";

    private static $connection = null;

    public static function connect()
    {
        try //pour se connecter à la bdd
        {
            self::$connection = new PDO(self::$dbHost . "dbname=" . self::$dbName,self::$dbUser,self::$dbUserPassword);
        }
        catch(PDOException $e) // en cas d'erreur
        {
            die($e->getMessage()); // afficher message d'erreur ?
        }
        return self::$connection;
    }
     
    function disconnect() // se déconnecter ?
    {
        self::$connection = null;
    }
}

Database::connect();
?> 