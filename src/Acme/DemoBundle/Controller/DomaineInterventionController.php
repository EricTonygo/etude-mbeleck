<?php

namespace Acme\DemoBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DomaineInterventionController extends Controller{
    
    /**
     * @Route("/signification-recouvrement-judiciaire")
     * @Template()
     */
    public function significationRecouvrementAction() {
        // Si le visiteur est déjà identifié, on le redirige vers l'accueil
        
        return $this->render('AcmeDemoBundle:DomaineIntervention:significationRecouvrement.html.twig');
    }
    
    /**
     * @Route("/constats")
     * @Template()
     */
    public function constatsAction() {
        // Si le visiteur est déjà identifié, on le redirige vers l'accueil
        
        return $this->render('AcmeDemoBundle:DomaineIntervention:constats.html.twig');
    }
    
    /**
     * @Route("/mediation")
     * @Template()
     */
    public function mediationAction() {
        // Si le visiteur est déjà identifié, on le redirige vers l'accueil
        
        return $this->render('AcmeDemoBundle:DomaineIntervention:mediation.html.twig');
    }
    
    /**
     * @Route("/recouvrement-amiable-creances")
     * @Template()
     */
    public function recouvrementAmiableAction() {
        // Si le visiteur est déjà identifié, on le redirige vers l'accueil
        
        return $this->render('AcmeDemoBundle:DomaineIntervention:recouvrementAmiable.html.twig');
    }
    
    /**
     * @Route("/ventes-encheres")
     * @Template()
     */
    public function ventesEncheresAction() {
        // Si le visiteur est déjà identifié, on le redirige vers l'accueil
        
        return $this->render('AcmeDemoBundle:DomaineIntervention:ventesEncheres.html.twig');
    }
    
    /**
     * @Route("/jeux-concours")
     * @Template()
     */
    public function jeuxConcoursAction() {
        // Si le visiteur est déjà identifié, on le redirige vers l'accueil
        
        return $this->render('AcmeDemoBundle:DomaineIntervention:jeuxConcours.html.twig');
    }
    
    /**
     * @Route("/conseil")
     * @Template()
     */
    public function conseilAction() {
        // Si le visiteur est déjà identifié, on le redirige vers l'accueil
        
        return $this->render('AcmeDemoBundle:DomaineIntervention:conseil.html.twig');
    }
    
    /**
     * @Route("/administration-biens")
     * @Template()
     */
    public function administrationBiensAction() {
        // Si le visiteur est déjà identifié, on le redirige vers l'accueil
        
        return $this->render('AcmeDemoBundle:DomaineIntervention:administrationBiens.html.twig');
    }
}
