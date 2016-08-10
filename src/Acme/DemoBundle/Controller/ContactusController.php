<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Acme\DemoBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Acme\DemoBundle\Entity\Contact;
use Acme\DemoBundle\Form\ContactType;
/**
 * Description of ContactusController
 *
 * @author TONYE
 */
class ContactusController extends Controller{
    //put your code here
    
    /**
     * @Route("/contact")
     * @Template()
     * @param Request $request
     */
    public function contactusAction() {
        // Si le visiteur est déjà identifié, on le redirige vers l'accueil
        $contact = new Contact();
        $form = $this->createForm(new ContactType(), $contact);
        
        return $this->render('AcmeDemoBundle:Contact:contactus.html.twig', array('form' => $form->createView()));
    }
}
