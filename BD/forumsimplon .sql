-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 25 fév. 2021 à 11:35
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `forumsimplon`
--

-- --------------------------------------------------------

--
-- Structure de la table `autosuggest`
--

CREATE TABLE `autosuggest` (
  `idindex` int(5) NOT NULL,
  `words` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'PHP'),
(2, 'JAVASCRIPT'),
(3, 'HTML'),
(4, 'CSS'),
(5, 'FRAMEWORK'),
(6, 'C++'),
(7, 'PYTHON');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `content`, `date`, `user_id`, `post_id`) VALUES
(1, 'AZERTY', '2021-02-19 11:58:53', 2, 3),
(2, 'L\'intelligence artificielle se réfère à «des machines qui répondent à une stimulation conforme aux réponses traditionnelles des humains, étant donné la capacité humaine de contemplation, de jugement et d\'intention.» (14) Elle incorpore le raisonnement et le jugement critiques dans les décisions de réponse. Longtemps considérée comme une avancée visionnaire, l\'IA est maintenant là et est intégrée dans une variété de domaines différents. Il est utilisé dans les domaines des finances, des transports, de l\'aviation et des télécommunications. Les systèmes experts «prennent des décisions qui nécessitent normalement un niveau d\'expertise humaine». (15) Ces systèmes aident les humains à anticiper les problèmes ou à faire face aux difficultés à mesure qu\'elles surviennent.', '2021-02-19 16:55:23', 2, 3),
(3, 'IMPACT SUR LA MAIN-D\'ŒUVRE\r\nL\'augmentation rapide des technologies émergentes suggère qu\'elles ont un impact considérable sur la main-d\'œuvre. Beaucoup de grandes entreprises technologiques ont atteint une large échelle économique sans un grand nombre d\'employés. Par exemple, Derek Thompson écrit: «Google vaut 370 milliards de dollars, mais ne compte qu\'environ 55 000 employés - moins d\'un dixième de l\'effectif d\'AT & T à son apogée [dans les années 1960].» (17) Selon l\'économiste Andrew McAfee: «Nous sont confrontés à un moment où les machines remplaceront les gens pour la plupart des emplois dans l\'économie actuelle, et je pense que cela ne viendra pas dans un futur lointain fou.', '2021-02-19 16:56:54', 2, 3),
(4, 'Le secteur des soins de santé et de l\'assistance sociale devrait connaître la plus forte croissance avec un taux annuel de 2,6%. Cela ajoutera environ cinq millions de nouveaux emplois au cours de cette décennie. Cela représente environ un tiers de tous les nouveaux emplois qui devraient être créés. (21) Les autres domaines susceptibles de connaître une croissance comprennent les services professionnels (3,5 millions), la construction (1,6 million), les loisirs et l\'hôtellerie (1,3 million), l\'État et les administrations locales (929 000), les finances (751 000) et l’éducation (675 000).', '2021-02-19 16:59:04', 1, 3),
(5, 'Le secteur manufacturier est un autre domaine qui perdrait des emplois. Le BLS s\'attend à ce que les États-Unis perdent 550000 emplois, tandis que le gouvernement fédéral en supprimera 407000 et que l\'agriculture, la foresterie, la pêche et la chasse supprimeront 223000 emplois.', '2021-02-19 17:01:18', 1, 3),
(6, 'Étant donné que les projections du BLS font peu d\'hypothèses sur les technologies émergentes, il est probable que leur nombre sous-estime l\'impact perturbateur de ces développements. ', '2021-02-19 17:01:49', 2, 3),
(7, 'zbfbeutkbjh', '2021-02-19 18:19:48', 2, 6),
(8, 'jhsEgydufchnzelubv', '2021-02-19 18:35:32', 2, 5),
(9, 'nf bwufn vmùjdpfnùvinfimnmivlf', '2021-02-19 18:40:04', 2, 7),
(10, 'sbhCOdufeilzjfiefojeiqfmzep', '2021-02-21 13:26:45', 2, 14),
(11, 'YAYA MENT WOOOOOOO!', '2021-02-22 12:29:55', 2, 17),
(12, ' hendrerit pharetra. Praesent ultricies facilisis dolor vitae egestas. Nam sed nulla dictum, congue risus in, bibendum sapien. Suspendisse ex massa, vestibulum ', '2021-02-22 20:47:58', 2, 21),
(13, ' hendrerit pharetra. Praesent ultricies facilisis dolor vitae egestas. Nam sed nulla dictum, congue risus in, bibendum sapien. Suspendisse ex massa, vestibulum ', '2021-02-22 20:48:19', 2, 21),
(14, ' hendrerit pharetra. Praesent ultricies facilisis dolor vitae egestas. Nam sed nulla dictum, congue risus in, bibendum sapien. Suspendisse ex massa, vestibulum ', '2021-02-22 20:50:02', 2, 21),
(15, ' hendrerit pharetra. Praesent ultricies facilisis dolor vitae egestas. Nam sed nulla dictum, congue risus in, bibendum sapien. Suspendisse ex massa, vestibulum ', '2021-02-22 20:51:12', 2, 21),
(16, 'Salut,\r\n\r\nCe que tu viens de faire ne sert à rien :) Tu as juste ajouter un fond de couleur au body rien de plus.\r\n\r\nJe te donne une piste, ajoute une nouvelle div vide au premier plan (avec z-index), et lors du clic sur le bouton tu affiches/caches cette div. \r\n\r\nAu plaisir,', '2021-02-23 18:02:46', 2, 23),
(17, 'En informatique , les mots vides sont des mots qui sont filtrés avant ou après le traitement des données en langage naturel (texte). [1] Bien que les \"mots vides\" se réfèrent généralement aux mots les plus courants dans une langue, il n\'y a pas de liste universelle unique de mots vides utilisés par tous les outils de traitement du langage naturel , et en fait, tous les outils n\'utilisent même pas une telle liste. Certains outils évitent spécifiquement de supprimer ces mots vides pour prendre en charge la recherche de phrases .', '2021-02-24 10:30:56', 2, 22),
(18, 'N\'importe quel groupe de mots peut être choisi comme mots vides pour un objectif donné. Pour certains moteurs de recherche , ce sont quelques - unes des plus courantes, courts mots de fonction , comme le , est , à , qui , et sur . Dans ce cas, les mots vides peuvent poser des problèmes lors de la recherche d\'expressions qui les incluent, en particulier dans des noms tels que « The Who », « The The » ou « Take That ». D\'autres moteurs de recherche suppriment certains des mots les plus courants - y compris les mots lexicaux , tels que «vouloir» - d\'une requête afin d\'améliorer les performances', '2021-02-24 10:32:00', 2, 22),
(19, '17/CBO9781139058452.002. ISBN 9781139058452.\r\n Stackoverflow: \"One of our major performance optimizations for the \"related questions\" query is removing the top 10,000 most common English dictionary words (as determined by Google search) before submitting the query to the SQL Server 2008 full text engine. It’s shocking how little is left of most posts once you remove the top 10k English dictionary words. This helps limit and narrow the returned results, which makes the query dramatically faster\".', '2021-02-24 10:36:21', 2, 22),
(20, 'A predecessor concept was used in creating some concordances. For example, the first Hebrew concordance, Me’ir nativ, contained a one-page list of unindexed words, with nonsubstantive prepositions and conjunctions which are similar to modern stop words.[5]\r\n\r\nIn SEO terminology, stop words are the most common words that most search engines avoid, for the purposes of saving space and time in processing of large data during crawling or indexing. This helps search engines to save space in their databases', '2021-02-24 11:46:56', 2, 23);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `objet_mess` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `message_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `mail`, `objet_mess`, `contenu`, `message_date`, `user_id`) VALUES
(1, 'dsf@gmail.com', 'home', 'aezgjhklmsdf,;l', '2021-02-20 18:15:33', 2),
(2, 'dsf@gmail.com', 'home', 'aezgjhklmsdf,;l', '2021-02-20 18:15:57', 2),
(3, 'kingsoulpower@gmail.com', 'Ajout de catégorie', 'uyudsgqcegnsfqugcqzgiyrcgsynfunsgucoyqfgysqcgfyqxkycgbyqgnsyfcgbucfyqyufgcyusgycgygfoynsgcynfgsgfsycfyugfyugeysgneygfyugqyugsdyu', '2021-02-20 18:17:50', 2),
(4, 'kingsoulpower@gmail.com', 'Ajout de catégorie', 'uyudsgqcegnsfqugcqzgiyrcgsynfunsgucoyqfgysqcgfyqxkycgbyqgnsyfcgbucfyqyufgcyusgycgygfoynsgcynfgsgfsycfyugfyugeysgneygfyugqyugsdyu', '2021-02-20 18:18:47', 2),
(5, 'kingsoulpower@gmail.com', 'Ajout de catégorie', 'je suisn', '2021-02-20 18:25:26', 1),
(6, 'imran@gmail.com', 'demande de permission', 'qstfbdgsuicfnhsdgxfdbcwstgyuneqlsyfgxeyqfnulyqxgfuqgilrg,cdgnfz', '2021-02-22 15:34:16', 17),
(7, 'imran@gmail.com', 'demande de permission', 'qstfbdgsuicfnhsdgxfdbcwstgyuneqlsyfgxeyqfnulyqxgfuqgilrg,cdgnfz', '2021-02-22 15:34:16', 17),
(8, 'imran@gmail.com', 'demande de permission', 'JE SUIS CONTENT', '2021-02-22 15:38:24', 2);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `date`, `user_id`, `category_id`) VALUES
(7, 'sunshine', 'rqtsyguhjzdcpùudhqùoucl', '2021-02-19 18:33:18', 1, 4),
(10, 'retour', 'sdwqerdghg ygyutrdgf bilfjtgfcg gn;b  bh gjcvhjv;kvukuj', '2021-02-19 18:37:06', 5, 4),
(11, 'Lacsoft Developpement', 'JNHFYIU.TGER78GHTYHEL70HDYZEHKGYHLYEGHLT7KEGH7GHGHT7JCGL¨8CPL8UGEPHKHDZOKHYHOY8HYEHKYUHKYHHTKEHYHOTHKOETG7HKHOTHE', '2021-02-20 16:35:05', 1, 4),
(12, 'Lacsoft Developpement', 'Ma famille me manque beaucoup', '2021-02-20 19:27:43', 1, 4),
(13, 'Lacsoft Developpement', 'Pour l\'instant, le script fait ce que j\'attends de lui, une recherche.\r\nPour vous en dire plus, j\'ai téléchargé sur le site RIP-JUSTICE (c\'est pas une blague) les données relatives aux lieux de la Justice en France (dixit le site open data du gouvernement).\r\nAprès trois heures de reformatage des données(4365 lignes, le csv est imbuvable et truffé d\'erreurs), vingt plantages Mysql, une bagarre entre Access et le pilote Oracle dont access est sorti vainqueur, et un retour à la case csv (généré par access), ma base était prête et j\'ai trouvé votre script!\r\nAu final, mon application affiche, plus ou moins la même chose que le site service public, et j\'en suis content. Pourquoi ne pas aller sur le site? Je vous le dirais en privé si le coeur vous en dit.\r\nJe travaille actuellement sur l\'affichage du résultat, j\'ai essayé une table, mais la pagination n\'aime pas ça... Le problème doit venir de bootstrap car j\'ai de gros problèmes avec les tables de manière générale.\r\nMerci pour votre conseille, je vais tester la version 1.2 sans tarder.\r\nDe mon côté, si je trouve un moyen de faire une recherche multi-critères, je vous tiens au courant. J\'en suis encore à essayer de shunter la requête (est-ce possible?) pour forcer un second critère. Comme l\'indique mon vocabulaire, je ne suis pas un développeur, alors si je trouve une solution, elle sera fonctionnelle, mais certainement pas élégante.\r\nQuant au plantage, je connais bien... ma soeur, avocate de son état perd en moyenne un jeu de conclusion par mois (quatre à cinq heures de travail en moyenne...), je vous donnerais le même conseil que celui que je lui donne : évitez les usines à gaz. J\'ai toujours utilisé Notepad++ qui intègre en plus un client ftp, idéal pour envoyer ses fichiers tout frais codés. J\'ai vu sublime text qui a l\'air pas mal, mais je reste fidèle à Notepad++ qui n\'a jamais planté, en dix ans d\'utilisation.\r\nMon wysiwyg à moi, c\'est mon imagination.\r\n\r\nEncore une fois, bravo, c\'est un travail remarquable, j\'ai testé deux scripts avant ça l\'un affichait le php à l\'écran, brut, une erreur dans l\'echo et l\'autre était tellement dépassé que l\'utiliser revenait à le réécrire.', '2021-02-21 10:12:59', 1, 4),
(14, 'Developpement', 'Oui l\'obstination paye toujours et je ne me décourage jamais, je suis un adepte des chemins de traverse, comme tous les juristes vous me direz...\r\nPour l\'annuaire, la recherche multicritères n\'est pas essentielle, car au final, j\'ai consulté quelques villes, et à part Paris qui renvoie quelques 35 pages de résultats, les autres ne renvoient jamais plus de cinq pages, pas de quoi s\'énerver. En tout cas de mon point de vue. La programmation c\'est aussi savoir être pertinent, et faire une réécriture du code pour un cas ou deux, ce n\'est pas pertinent. Mais je ne garde ça dans un coin de la tête. Pour la mise en forme, en attendant de solutionner le problème des tables, j\'ai ajouter des balises à droit à gauche et le rendu est plaisant à l’œil et lisible, c\'est l\'essentiel.\r\nLa base de données va essentiellement me servir pour une autre partie de mon application, qui génère des actes à la volée. je voulais recycler le moteur pour ça, mais au final, je pense que je vais procéder autrement. A savoir que je vais créer une requête qui sera stockée dans un module et dont les éléments seront des variables (comme vous avez fait) dont la valeur sera renseignée au moment de la création du dossier. Grâce à un assistant (les avocats adorent les assistants) l\'utilisateur (ma sœur et peut-être moi un jour et mon frère aussi!) pourra choisir la juridiction compétente, les informations seront lacsoft automatiquement liées,grâce à une table de jonction (ça vous semble logique, si vous voyez ce que je veux dire évidemment). Les informations seront ensuite chargées automatiquement dans le formulaire de génération de l\'acte (dont le script existe déjà), le tout étant envoyé dans un .docx basé sur un modèle stocké sur le serveur, l\'utilisateur étant ensuite renvoyé vers un explorateur de dossier (qui existe déjà aussi) et qui représente les cotes du dossier (comme le dossier physique) dans lequel il peut renommer, supprimer, ajouter ou télécharger des éléments. En bref je fais un logiciel de gestion de cabinet d\'avocat, mais pour un seul avocat...', '2021-02-21 10:14:06', 1, 4),
(15, 'Deviner le resultat', 'Infinite Scroll works out-of-the-box with any blog or WordPress site. With its robust array of options, methods, and events, you can add custom behaviors, notifications, and loading animations to fully integrate Infinite Scroll into your user experience.', '2021-02-21 16:49:45', 2, 4),
(16, 'infinite scroll', 'Infinite Scroll upholds URLs by changing them automatically as the user scrolls. Users can refresh the current page or return to a scrolled page and their position will be maintained. No more tears when you scroll 20 pages and accidentally hit refresh. Try out the full page demo.', '2021-02-21 16:51:26', 2, 4),
(17, 'le déroulement', '\r\nVous devriez avoir un moteur de recherche fonctionnel avec tous ces codes, je vais tout de même terminer cet article en détaillant un peu plus quelques fonctionnalités du moteur et en proposant des pistes d\'évolutions. Pour ceux qui sont déjà satisfaits, merci pour votre lecture.\r\n\r\nN.B. : depuis la version 1.5 du moteur, il est possible d\'afficher le nombre de résultats total et le nombre par page à l\'aide de la class fille en PHP Objet appelée affichageResultats(). Il suffit d\'appeler la méthode nbResultats() de la class au sein de la fonction Callback d\'affichage (comme dans l\'exemple ci-dessus).\r\n\r\nAlgorithme de pertinence (simple)\r\nL\'algorithme de pertinence que j\'ai créé est tout simple, mais il donne des idées d\'évolution pour la suite. Pour être tout à fait franc, c\'est l\'algorithmie qui m\'a donné envie de développer ce moteur de recherche en PHP objet, je voulais trouver un moyen de classer les résultats différemment d\'un ORDER BY classique en SQL.\r\n\r\nL\'algorithme est activé lorsque le 5e argument de la class moteurAffichage() est présent. Il s\'agit d\'un tableau contenant 4 paramètres obligatoires :\r\n\r\nbooléen (true/false) pour activer ou non l\'algorithme\r\nnom d\'une colonne SQL pour accueillir les valeurs de classement (\'algo\' par défaut). Cette colonne est créée dans la table si elle n\'existe pas...\r\ntype de classement : ASC (ascendant) ou DESC (descendant)\r\nintitulé de la colonne d\'identifiant (\'id\' en général, mais attention à la casse ou à un nom différent...)\r\nLa pertinence se fait ici de manière simple. Le moteur analyse la requête de l\'utilisateur puis compte dans les contenus le nombre d\'occurrences des mots et expressions. Une fois les comptes réalisés, l\'option met à jour la colonne de la base de données (\'algo\' par défaut) puis classe les résultats en fonction de la valeur attribuée. En d\'autres termes, il s\'agit d\'une partie du tri par pertinence très connu des référenceurs.\r\n\r\nJ\'ai ajouté deux possibilités en cas d\'activation de l\'algorithme :\r\n\r\nle classement se fait uniquement par pertinence\r\nle classement se fait par pertinence mais aussi avec un autre ORDER BY si le 4e argument de la class (tableau) est activé (true). Dans ce cas, cela permet par exemple de classer par pertinence puis par ID ou autre...', '2021-02-21 16:52:21', 1, 4),
(18, 'Index Page', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis leo sodales, viverra ante et, facilisis turpis. Donec porta mi et nulla accumsan, sit amet sagittis magna aliquet. Duis non velit enim. Nam facilisis malesuada luctus. In diam purus, venenatis non semper faucibus, consectetur eget velit. Vivamus vel vulputate erat. Donec sed suscipit diam, non sodales tortor. Sed eleifend lacus elit, in convallis tellus sodales id. Aenean mattis massa at sapien convallis, aliquet dignissim libero laoreet. Integer eleifend est ac massa blandit facilisis.\r\n\r\nDonec sit amet pulvinar eros, id pharetra eros. Quisque non vestibulum nunc. Nulla interdum, leo id facilisis ultricies, ligula lectus volutpat tortor, sed rutrum ligula ipsum ac est. Etiam finibus vestibulum faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec quis leo et turpis commodo euismod quis in ligula. Nunc porta dapibus elit, at condimentum purus lacinia vel. Duis fermentum tellus mi, ac rhoncus nunc pulvinar eu. Ut pulvinar tempus tincidunt. Nam et tellus nec tortor sollicitudin blandit.\r\n\r\nMaecenas porta turpis venenatis hendrerit pharetra. Praesent ultricies facilisis dolor vitae egestas. Nam sed nulla dictum, congue risus in, bibendum sapien. Suspendisse ex massa, vestibulum nec dignissim nec, suscipit a purus. Nullam pretium lacus a sagittis malesuada. Praesent risus odio, tincidunt ac ante ac, faucibus lobortis orci. Sed malesuada mi ut est viverra sagittis. Nunc porttitor tincidunt sem in luctus. Quisque hendrerit varius tortor eu bibendum.\r\n\r\nQuisque scelerisque eu urna quis lobortis. Donec fringilla rhoncus efficitur. Donec porta aliquet metus id tincidunt. Nullam aliquam dolor at viverra vulputate. Praesent pulvinar varius neque sed accumsan. Phasellus a iaculis diam. Cras neque felis, ultricies et varius vel, efficitur sit amet tellus. Suspendisse consequat sem eget orci lobortis dapibus. Nullam et orci in enim molestie rhoncus. Cras blandit urna eu tortor pharetra, et tristique elit bibendum. Morbi porta dui dolor, non faucibus erat ullamcorper sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus pulvinar ipsum id lacus sodales, sed viverra orci blandit. Proin pellentesque ac neque nec molestie. Pellentesque hendrerit orci sed facilisis ultricies. Morbi suscipit nulla imperdiet lorem tempus dictum id ornare nunc.\r\n\r\nDonec in nunc ullamcorper dui ullamcorper commodo quis non ante. Mauris interdum lacus non gravida dictum. Donec pharetra metus ac magna efficitur fringilla. In luctus mauris sed arcu eleifend semper. Vivamus elementum ornare mattis. Fusce et sem in libero euismod imperdiet. Praesent facilisis lacinia felis in venenatis. Sed ut neque rhoncus, tempor erat eget, rutrum sapien. Donec iaculis ut lorem vitae luctus. Suspendisse eget fermentum dolor. Pellentesque blandit, eros non ultrices sodales, elit diam lobortis eros, viverra ultricies ipsum quam tempor felis.', '2021-02-22 20:36:58', 2, 4),
(19, 'Page 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis leo sodales, viverra ante et, facilisis turpis. Donec porta mi et nulla accumsan, sit amet sagittis magna aliquet. Duis non velit enim. Nam facilisis malesuada luctus. In diam purus, venenatis non semper faucibus, consectetur eget velit. Vivamus vel vulputate erat. Donec sed suscipit diam, non sodales tortor. Sed eleifend lacus elit, in convallis tellus sodales id. Aenean mattis massa at sapien convallis, aliquet dignissim libero laoreet. Integer eleifend est ac massa blandit facilisis.\r\n\r\nDonec sit amet pulvinar eros, id pharetra eros. Quisque non vestibulum nunc. Nulla interdum, leo id facilisis ultricies, ligula lectus volutpat tortor, sed rutrum ligula ipsum ac est. Etiam finibus vestibulum faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec quis leo et turpis commodo euismod quis in ligula. Nunc porta dapibus elit, at condimentum purus lacinia vel. Duis fermentum tellus mi, ac rhoncus nunc pulvinar eu. Ut pulvinar tempus tincidunt. Nam et tellus nec tortor sollicitudin blandit.\r\n\r\nMaecenas porta turpis venenatis hendrerit pharetra. Praesent ultricies facilisis dolor vitae egestas. Nam sed nulla dictum, congue risus in, bibendum sapien. Suspendisse ex massa, vestibulum nec dignissim nec, suscipit a purus. Nullam pretium lacus a sagittis malesuada. Praesent risus odio, tincidunt ac ante ac, faucibus lobortis orci. Sed malesuada mi ut est viverra sagittis. Nunc porttitor tincidunt sem in luctus. Quisque hendrerit varius tortor eu bibendum.\r\n\r\nQuisque scelerisque eu urna quis lobortis. Donec fringilla rhoncus efficitur. Donec porta aliquet metus id tincidunt. Nullam aliquam dolor at viverra vulputate. Praesent pulvinar varius neque sed accumsan. Phasellus a iaculis diam. Cras neque felis, ultricies et varius vel, efficitur sit amet tellus. Suspendisse consequat sem eget orci lobortis dapibus. Nullam et orci in enim molestie rhoncus. Cras blandit urna eu tortor pharetra, et tristique elit bibendum. Morbi porta dui dolor, non faucibus erat ullamcorper sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus pulvinar ipsum id lacus sodales, sed viverra orci blandit. Proin pellentesque ac neque nec molestie. Pellentesque hendrerit orci sed facilisis ultricies. Morbi suscipit nulla imperdiet lorem tempus dictum id ornare nunc.\r\n\r\nDonec in nunc ullamcorper dui ullamcorper commodo quis non ante. Mauris interdum lacus non gravida dictum. Donec pharetra metus ac magna efficitur fringilla. In luctus mauris sed arcu eleifend semper. Vivamus elementum ornare mattis. Fusce et sem in libero euismod imperdiet. Praesent facilisis lacinia felis in venenatis. Sed ut neque rhoncus, tempor erat eget, rutrum sapien. Donec iaculis ut lorem vitae luctus. Suspendisse eget fermentum dolor. Pellentesque blandit, eros non ultrices sodales, elit diam lobortis eros, viverra ultricies ipsum quam tempor felis.', '2021-02-22 20:41:16', 1, 4),
(20, 'La boucle', 'Maecenas porta turpis venenatis hendrerit pharetra. Praesent ultricies facilisis dolor vitae egestas. Nam sed nulla dictum, congue risus in, bibendum sapien. Suspendisse ex massa, vestibulum nec dignissim nec, suscipit a purus. Nullam pretium lacus a sagittis malesuada. Praesent risus odio, tincidunt ac ante ac, faucibus lobortis orci. Sed malesuada mi ut est viverra sagittis. Nunc porttitor tincidunt sem in luctus. Quisque hendrerit varius tortor eu bibendum.\r\n\r\nQuisque scelerisque eu urna quis lobortis. Donec fringilla rhoncus efficitur. Donec porta aliquet metus id tincidunt. Nullam aliquam dolor at viverra vulputate. Praesent pulvinar varius neque sed accumsan. Phasellus a iaculis diam. Cras neque felis, ultricies et varius vel, efficitur sit amet tellus. Suspendisse consequat sem eget orci lobortis dapibus. Nullam et orci in enim molestie rhoncus. Cras blandit urna eu tortor pharetra, et tristique elit bibendum. Morbi porta dui dolor, non faucibus erat ullamcorper sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus pulvinar ipsum id lacus sodales, sed viverra orci blandit. Proin pellentesque ac neque nec molestie. Pellentesque hendrerit orci sed facilisis ultricies. Morbi suscipit nulla imperdiet lorem tempus dictum id ornare nunc.\r\n\r\nDonec in nunc ullamcorper dui ullamcorper commodo quis non ante. Mauris interdum lacus non gravida dictum. Donec pharetra metus ac magna efficitur fringilla. In luctus mauris sed arcu eleifend semper. Vivamus elementum ornare mattis. Fusce et sem in libero euismod imperdiet. Praesent facilisis lacinia felis in venenatis. Sed ut neque rhoncus, tempor erat eget, rutrum sapien. Donec iaculis ut lorem vitae luctus. Suspendisse eget fermentum dolor. Pellentesque blandit, eros non ultrices sodales, elit diam lobortis eros, viverra ultricies ipsum quam tempor felis.\r\n\r\nPage 1\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis leo sodales, viverra ante et, facilisis turpis. Donec porta mi et nulla accumsan, sit amet sagittis magna aliquet. Duis non velit enim. Nam facilisis malesuada luctus. In diam purus, venenatis non semper faucibus, consectetur eget velit. Vivamus vel vulputate erat. Donec sed suscipit diam, non sodales tortor. Sed eleifend lacus elit, in convallis tellus sodales id. Aenean mattis massa at sapien convallis, aliquet dignissim libero laoreet. Integer eleifend est ac massa blandit facilisis.\r\n\r\nDonec sit amet pulvinar eros, id pharetra eros. Quisque non vestibulum nunc. Nulla interdum, leo id facilisis ultricies, ligula lectus volutpat tortor, sed rutrum ligula ipsum ac est. Etiam finibus vestibulum faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec quis leo et turpis commodo euismod quis in ligula. Nunc porta dapibus elit, at condimentum purus lacinia vel. Duis fermentum tellus mi, ac rhoncus nunc pulvinar eu. Ut pulvinar tempus tincidunt. Nam et tellus nec tortor sollicitudin blandit.\r\n\r\nMaecenas porta turpis venenatis hendrerit pharetra. Praesent ultricies facilisis dolor vitae egestas. Nam sed nulla dictum, congue risus in, bibendum sapien. Suspendisse ex massa, vestibulum nec dignissim nec, suscipit a purus. Nullam pretium lacus a sagittis malesuada. Praesent risus odio, tincidunt ac ante ac, faucibus lobortis orci. Sed malesuada mi ut est viverra sagittis. Nunc porttitor tincidunt sem in luctus. Quisque hendrerit varius tortor eu bibendum.', '2021-02-22 20:42:51', 3, 4),
(21, 'La boucle', 'Maecenas porta turpis venenatis hendrerit pharetra. Praesent ultricies facilisis dolor vitae egestas. Nam sed nulla dictum, congue risus in, bibendum sapien. Suspendisse ex massa, vestibulum nec dignissim nec, suscipit a purus. Nullam pretium lacus a sagittis malesuada. Praesent risus odio, tincidunt ac ante ac, faucibus lobortis orci. Sed malesuada mi ut est viverra sagittis. Nunc porttitor tincidunt sem in luctus. Quisque hendrerit varius tortor eu bibendum.\r\n\r\nQuisque scelerisque eu urna quis lobortis. Donec fringilla rhoncus efficitur. Donec porta aliquet metus id tincidunt. Nullam aliquam dolor at viverra vulputate. Praesent pulvinar varius neque sed accumsan. Phasellus a iaculis diam. Cras neque felis, ultricies et varius vel, efficitur sit amet tellus. Suspendisse consequat sem eget orci lobortis dapibus. Nullam et orci in enim molestie rhoncus. Cras blandit urna eu tortor pharetra, et tristique elit bibendum. Morbi porta dui dolor, non faucibus erat ullamcorper sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus pulvinar ipsum id lacus sodales, sed viverra orci blandit. Proin pellentesque ac neque nec molestie. Pellentesque hendrerit orci sed facilisis ultricies. Morbi suscipit nulla imperdiet lorem tempus dictum id ornare nunc.\r\n\r\nDonec in nunc ullamcorper dui ullamcorper commodo quis non ante. Mauris interdum lacus non gravida dictum. Donec pharetra metus ac magna efficitur fringilla. In luctus mauris sed arcu eleifend semper. Vivamus elementum ornare mattis. Fusce et sem in libero euismod imperdiet. Praesent facilisis lacinia felis in venenatis. Sed ut neque rhoncus, tempor erat eget, rutrum sapien. Donec iaculis ut lorem vitae luctus. Suspendisse eget fermentum dolor. Pellentesque blandit, eros non ultrices sodales, elit diam lobortis eros, viverra ultricies ipsum quam tempor felis.\r\n\r\nPage 1\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis leo sodales, viverra ante et, facilisis turpis. Donec porta mi et nulla accumsan, sit amet sagittis magna aliquet. Duis non velit enim. Nam facilisis malesuada luctus. In diam purus, venenatis non semper faucibus, consectetur eget velit. Vivamus vel vulputate erat. Donec sed suscipit diam, non sodales tortor. Sed eleifend lacus elit, in convallis tellus sodales id. Aenean mattis massa at sapien convallis, aliquet dignissim libero laoreet. Integer eleifend est ac massa blandit facilisis.\r\n\r\nDonec sit amet pulvinar eros, id pharetra eros. Quisque non vestibulum nunc. Nulla interdum, leo id facilisis ultricies, ligula lectus volutpat tortor, sed rutrum ligula ipsum ac est. Etiam finibus vestibulum faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec quis leo et turpis commodo euismod quis in ligula. Nunc porta dapibus elit, at condimentum purus lacinia vel. Duis fermentum tellus mi, ac rhoncus nunc pulvinar eu. Ut pulvinar tempus tincidunt. Nam et tellus nec tortor sollicitudin blandit.\r\n\r\nMaecenas porta turpis venenatis hendrerit pharetra. Praesent ultricies facilisis dolor vitae egestas. Nam sed nulla dictum, congue risus in, bibendum sapien. Suspendisse ex massa, vestibulum nec dignissim nec, suscipit a purus. Nullam pretium lacus a sagittis malesuada. Praesent risus odio, tincidunt ac ante ac, faucibus lobortis orci. Sed malesuada mi ut est viverra sagittis. Nunc porttitor tincidunt sem in luctus. Quisque hendrerit varius tortor eu bibendum.', '2021-02-22 20:43:35', 2, 4),
(22, 'OKAY', 'Présentation du fonctionnement de Bootstrap ... Dans cette leçon, nous allons comprendre comment utiliser Bootstrap pour mettre en forme nos fichiers HTML ... Bootstrap utilise la propriété z-index pour définir quel composant doit apparaitre ...', '2021-02-23 17:45:45', 1, 4),
(23, 'Bootstrap 4 Cards- Problème de z-index', 'Bonjour à tous, \r\n\r\nJe viens solliciter votre aide car après moult recherches, je n\'ai pas trouvé la solution.\r\n\r\nJe cherche à la suite d\'un click sur un bouton a rendre le body opaque et empecher le overflow.\r\n\r\nMon problème est que les cards bootstrap reste afficher en blanc.\r\n\r\nJe ne comprends où se situe le souci.\r\n\r\nJe vous joins le bout de code sur codepen si quelqu\'un a la gentillesse de m\'aider/m\'aiguiller.\r\n\r\nCodepen\r\n\r\nMerci beaucoup\r\n\r\nCordialement,', '2021-02-23 17:58:09', 2, 1),
(24, 'L’opérateur ternaire en PHP', '’utilisation de l’opérateur ternaire n’est certes pas la méthode de développer la plus lisible dans la majorité des cas mais elle s’avère pratique dans lisibilité de conditions simples et elle offre de meilleurs performances. L’implémentation de cet opérateur peut différer selon les langages, voyons dans le cas de PHP.\r\n\r\nQu’est ce que l’opérateur ternaire ?\r\nSimplement, il s’agit de mettre une condition logique sur un seul ligne. Voyons par exemple :\r\n\r\nif($boolean)\r\n  echo ‘true’;\r\nelse\r\n  echo ‘false’;\r\nCette condition est relativement simple et prend tout de même 4 lignes de code. L’opérateur ternaire va nous permettre de mettre cette condition sur une seul ligne de la manière suivante :\r\n\r\necho ($boolean ? ‘true’ : ‘false’);\r\nVous pouvez faire ceci à l’infini mais ceci dégrade, bien évidement la lisibilité du code et peut s’avérer un frein dans la maintenance d’une application.\r\n\r\necho ($boolean ? ($boolean2 ? ‘true true’ : ‘true false’) : ‘false’);\r\nL’opérateur ternaire peut également se représenter de la forme suivante\r\n\r\n$value = $value ?: $othervalue;\r\nCette méthode peut être pratique dans le cas de l’assignation d’une valeur par défaut. Prenons comme exemple le cas où l’on veut afficher comme nom le nom de famille s’il existe sinon le nom d’utilisateur :\r\n\r\n$display_name = $lastname ?: $username;', '2021-02-23 19:09:11', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `role`, `password`) VALUES
(1, 'Souleymane', 'SILGA', 'kingsoulpower@gmail.com', 'dev', ''),
(2, 'Amara', 'DOUKOURE', 'amaradoukoure@gmail.com', 'dev', ''),
(9, 'Aicha', 'Nana', 'aichanana@yahoo.fr', 'dev', '123'),
(13, 'GANAME', 'Zeinab', 'zeinabganame@gmail.com', 'dev', '123'),
(14, 'GUIGMA', 'Alain', 'kingsoulpower@gmail.com', 'dev', '123'),
(15, 'CISSE', 'Aboubakary', 'admin@gmail.com', 'admin', '1234');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `autosuggest`
--
ALTER TABLE `autosuggest`
  ADD PRIMARY KEY (`idindex`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `autosuggest`
--
ALTER TABLE `autosuggest`
  MODIFY `idindex` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
