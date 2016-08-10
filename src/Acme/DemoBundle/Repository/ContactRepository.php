<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Acme\DemoBundle\Repository;

use Doctrine\ORM\EntityRepository;
/**
 * Description of ContactRepository
 *
 * @author TONYE
 */
class ContactRepository extends EntityRepository{
    //put your code here
    public function deleteContact(\Acme\DemoBundle\Entity\Contact $contact) {
        $em= $this->_em;
        $contact->setStatut(0);
        $em->getConnection()->beginTransaction();
        try{
            $em->persist($contact);
            $em->flush();
            $em->getConnection()->commit();
        } catch (Exception $ex) {
            $em->getConnection()->rollback();
            $em->close();
            throw $ex;
        }
    }


    public function saveContact(\Acme\DemoBundle\Entity\Contact $contact) {
        $em= $this->_em;
        $contact->setStatut(1);
        $em->getConnection()->beginTransaction();
        try{
            $em->persist($contact);
            $em->flush();
            $em->getConnection()->commit();
        } catch (Exception $ex) {
            $em->getConnection()->rollback();
            $em->close();
            throw $ex;
        }
    }

    public function updateContact(\Acme\DemoBundle\Entity\Contact $contact) {
        $em= $this->_em;
        $em->getConnection()->beginTransaction();
        try{
            $em->persist($contact);
            $em->flush();
            $em->getConnection()->commit();
        } catch (Exception $ex) {
            $em->getConnection()->rollback();
            $em->close();
            throw $ex;
        }
    }
}
