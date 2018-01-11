<?php
function choixAlert($message)
{
  $alert = array();
  switch($message)
  {
    case 'connexion':
      $alert['messageAlert'] = ERREUR_CONNEXION;
      break;
    case 'login' :
      $alert['messageAlert'] = ERREUR_LOGIN;
      break;
    case 'query' :
      $alert['messageAlert'] = ERREUR_QUERY;
      break;
    case 'url_non_valide' :
      $alert['messageAlert'] = TEXTE_PAGE_404;
      break;
    case 'id' :
          $alert['messageAlert'] = ID_ERROR;
          break;
    case 'log':
          $alert['messageAlert'] = ID_CO_ERREUR;
          break;
    case 'mdp':
          $alert['messageAlert'] = ERREUR_MDP;
          break;
    case 'connecte':
          $alert['messageAlert'] = CONNEXION_SUCCES;
          $alert['classAlert'] = 'success';
          break;
    case 'ext':
          $alert['messageAlert'] = ERREUR_EXT;
          break;
    case 'taille':
          $alert['messageAlert'] = ERREUR_TAILLE;
          break;
    case 'cat':
          $alert['messageAlert'] = ERREUR_CAT;
          break;
    case 'desc':
          $alert['messageAlert'] = ERREUR_DESC;
          break;
    case 'catexist':
          $alert['messageAlert'] = ERREUR_CATEXIST;
          break;
    case 'nomcat':
          $alert['messageAlert'] = ERREUR_NOMCAT;
          break;
    case 'taillecat':
          $alert['messageAlert'] = ERREUR_TAILLECAT;
          break;
    case 'ajoutcat':
          $alert['messageAlert'] = AJOUTCAT_SUCCES;
          $alert['classAlert'] = 'success';
          break;
      case 'suppsucces':
          $alert['messageAlert'] = SUPP_SUCCES;
          $alert['classAlert'] = 'success';
          break;
    case 'pasdephoto':
          $alert['messageAlert'] = ERREUR_PASDEPHOTO;
          break;
    default :
      $alert['messageAlert'] = MESSAGE_ERREUR;
  }
  return $alert;
}
