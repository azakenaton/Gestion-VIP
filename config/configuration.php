<?php
/* Module de PHP
 * Paramètres de configuration du site
 *
 * Copyright 2017, Eric Dufour
 * http://techfacile.fr
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */
 
const DEBUG = true; // production : false; dev : true

// Accès base de données
const BD_HOST = 'iutdoua-web.univ-lyon1.fr';
const BD_DBNAME = 'p1602176';
const BD_USER = 'p1602176';
const BD_PWD = '266706';

// Langue du site
const LANG ='FR-fr';

// Paramètres du site : nom de l'auteur ou des auteurs
const AUTEUR = 'Pablo Chabanne et Luc Hyvernat'; 

//dossiers racines du site
define('PATH_CONTROLLERS','./controllers/');
define('PATH_ASSETS','./assets/');
define('PATH_LIB','./lib/');
define('PATH_MODELS','./models/');
define('PATH_VIEWS','./views/');
define('PATH_SCRIPTS','./scripts/');
define('PATH_TEXTES','./languages/');
define('PATH_ENTITY','./entity/');

//sous dossiers
define('PATH_CSS', PATH_ASSETS.'css/');
define('PATH_IMAGES', PATH_ASSETS.'images/');
//define("PATH_GALERIE",'galerie/');
//define('PATH_LOG','log/');

//fichiers
//define('LOG_BDD','logbdd.txt');
define('PATH_LOGO', PATH_IMAGES.'logo.png');
define('PATH_MENU', PATH_VIEWS.'v_menu.php');

//login
define('LOGIN', 'adminsite');
define('PASSWORD', 'f5c7b2fd4d960c26cf1aede8a8fab4e06057c3ef');
