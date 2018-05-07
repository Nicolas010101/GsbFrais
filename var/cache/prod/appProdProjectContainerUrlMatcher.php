<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/profil')) {
            // gsb_profil_homepage
            if ('/profil' === $pathinfo) {
                return array (  '_controller' => 'GsbFrais\\ProfilBundle\\Controller\\GestionProfilController::indexAction',  '_route' => 'gsb_profil_homepage',);
            }

            // gsb_profil_homepage_modif
            if ('/profil1' === $pathinfo) {
                return array (  '_controller' => 'GsbFrais\\ProfilBundle\\Controller\\GestionProfilController::modifCptAction',  '_route' => 'gsb_profil_homepage_modif',);
            }

            // gsb_profil_homepage_modif_mdp
            if ('/profil2' === $pathinfo) {
                return array (  '_controller' => 'GsbFrais\\ProfilBundle\\Controller\\GestionProfilController::modifMdpAction',  '_route' => 'gsb_profil_homepage_modif_mdp',);
            }

        }

        elseif (0 === strpos($pathinfo, '/saisieFrais')) {
            // gsb_profil_saisie_frais
            if ('/saisieFrais' === $pathinfo) {
                return array (  '_controller' => 'GsbFrais\\ProfilBundle\\Controller\\SaisirFraisController::saisirAction',  '_route' => 'gsb_profil_saisie_frais',);
            }

            // gsb_suppression
            if (0 === strpos($pathinfo, '/saisieFrais1') && preg_match('#^/saisieFrais1/(?P<idHorsForfait>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_suppression')), array (  '_controller' => 'GsbFrais\\ProfilBundle\\Controller\\SaisirFraisController::supprimerAction',));
            }

        }

        // gsb_profil_afficher_mois
        if ('/fraisDuMois' === $pathinfo) {
            return array (  '_controller' => 'GsbFrais\\ProfilBundle\\Controller\\FraisDuMoisController::afficherAction',  '_route' => 'gsb_profil_afficher_mois',);
        }

        if (0 === strpos($pathinfo, '/historique')) {
            // gsb_profil_historique
            if ('/historique' === $pathinfo) {
                return array (  '_controller' => 'GsbFrais\\ProfilBundle\\Controller\\HistoriqueController::selectionnerAction',  '_route' => 'gsb_profil_historique',);
            }

            // gsb_profil_historique_selection
            if (0 === strpos($pathinfo, '/historiqueSelection') && preg_match('#^/historiqueSelection/(?P<date>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_profil_historique_selection')), array (  '_controller' => 'GsbFrais\\ProfilBundle\\Controller\\HistoriqueController::visuAction',));
            }

        }

        // gsb_frais_connexion
        if ('/connexion' === $pathinfo) {
            return array (  '_controller' => 'GsbFrais\\ConnexionBundle\\Controller\\ConnexionController::registerAction',  '_route' => 'gsb_frais_connexion',);
        }

        // gsb_frais_edit_user
        if ('/editU' === $pathinfo) {
            return array (  '_controller' => 'GsbFrais\\ConnexionBundle\\Controller\\GestionCompteController::editerUserAction',  '_route' => 'gsb_frais_edit_user',);
        }

        // gsb_frais_edit_mdp
        if ('/editMdp' === $pathinfo) {
            return array (  '_controller' => 'GsbFrais\\ConnexionBundle\\Controller\\GestionMdpController::editerMdpAction',  '_route' => 'gsb_frais_edit_mdp',);
        }

        // gsb_frais_accueil
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'GsbFrais\\AccueilBundle\\Controller\\AccueilController::indexAction',  '_route' => 'gsb_frais_accueil',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_gsb_frais_accueil;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'gsb_frais_accueil'));
            }

            return $ret;
        }
        not_gsb_frais_accueil:

        // gsb_frais_accueil_deco
        if ('/gsb' === $pathinfo) {
            return array (  '_controller' => 'GsbFrais\\AccueilBundle\\Controller\\AccueilController::deconnexionAction',  '_route' => 'gsb_frais_accueil_deco',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
