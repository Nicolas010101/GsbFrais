<?php

namespace GsbFrais\ProfilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class GestionProfilController extends Controller
{
    public function indexAction(Request $request)
    {
        $session = $request->getSession();
        //echo $session->get('id');


        return $this->render(
            'profil/profil.html.twig',
            array(
                'nom' => $session->get('nom'),
                'prenom' => $session->get('prenom'),
                'modifCpt' => false,
                'modifMdp' => false,
            )
        );
    }

    public function modifCptAction(Request $request)
    {
        $session = $request->getSession();
        //echo $session->get('id');


        return $this->render(
            'profil/profil.html.twig',
            array(
                'nom' => $session->get('nom'),
                'prenom' => $session->get('prenom'),
                'modifCpt' => true,
                'modifMdp' => false,
            )
        );
    }

    public function modifMdpAction(Request $request)
    {
        $session = $request->getSession();
        //echo $session->get('id');


        return $this->render(
            'profil/profil.html.twig',
            array(
                'nom' => $session->get('nom'),
                'prenom' => $session->get('prenom'),
                'modifCpt' => false,
                'modifMdp' => true,
            )
        );
    }
}
