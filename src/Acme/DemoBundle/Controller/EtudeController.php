<?php

namespace Acme\DemoBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class EtudeController extends Controller{
    /**
     * @Route("/signature-professionnelle")
     * @Template()
     * @param Request $request
     */
    public function signatureProfessionnelleAction() {
        // Si le visiteur est déjà identifié, on le redirige vers l'accueil
        
        return $this->render('AcmeDemoBundle:Etude:signatureProfessionnelle.html.twig');
    }
    
    /**
     * @Route("/hussier-mbeleck")
     * @Template()
     * @param Request $request
     */
    public function hussierMbeleckAction() {
        // Si le visiteur est déjà identifié, on le redirige vers l'accueil
        
        return $this->render('AcmeDemoBundle:Etude:hussierMbeleck.html.twig');
    }
}
