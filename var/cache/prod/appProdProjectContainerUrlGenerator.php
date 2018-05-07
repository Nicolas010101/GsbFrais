<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'gsb_profil_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GsbFrais\\ProfilBundle\\Controller\\GestionProfilController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_profil_homepage_modif' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GsbFrais\\ProfilBundle\\Controller\\GestionProfilController::modifCptAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profil1',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_profil_homepage_modif_mdp' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GsbFrais\\ProfilBundle\\Controller\\GestionProfilController::modifMdpAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profil2',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_profil_saisie_frais' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GsbFrais\\ProfilBundle\\Controller\\SaisirFraisController::saisirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/saisieFrais',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_profil_afficher_mois' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GsbFrais\\ProfilBundle\\Controller\\FraisDuMoisController::afficherAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fraisDuMois',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_profil_historique' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GsbFrais\\ProfilBundle\\Controller\\HistoriqueController::selectionnerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/historique',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_profil_historique_selection' => array (  0 =>   array (    0 => 'date',  ),  1 =>   array (    '_controller' => 'GsbFrais\\ProfilBundle\\Controller\\HistoriqueController::visuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'date',    ),    1 =>     array (      0 => 'text',      1 => '/historiqueSelection',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_suppression' => array (  0 =>   array (    0 => 'idHorsForfait',  ),  1 =>   array (    '_controller' => 'GsbFrais\\ProfilBundle\\Controller\\SaisirFraisController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idHorsForfait',    ),    1 =>     array (      0 => 'text',      1 => '/saisieFrais1',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_frais_connexion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GsbFrais\\ConnexionBundle\\Controller\\ConnexionController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/connexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_frais_edit_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GsbFrais\\ConnexionBundle\\Controller\\GestionCompteController::editerUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/editU',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_frais_edit_mdp' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GsbFrais\\ConnexionBundle\\Controller\\GestionMdpController::editerMdpAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/editMdp',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_frais_accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GsbFrais\\AccueilBundle\\Controller\\AccueilController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_frais_accueil_deco' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GsbFrais\\AccueilBundle\\Controller\\AccueilController::deconnexionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gsb',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
