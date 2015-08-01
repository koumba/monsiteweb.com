<?php

namespace Universal\UniversalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Universal\UniversalBundle\Entity\Users;



class AdminController extends Controller {
    
    public function ajoutAction() {
        
        $em = $this->getDoctrine()->getManager();
        
        /*$user = new Users();
        $user->setCivilite('mr');
        $user->setNom('duref');
        $user->setPrenom('paul');
        $user->setLogin('paulpharma');
        $user->setMotPasse('azerty');
        $user->setAdresse('7, rue picasso');
        $user->setCodePostal(93370);
        $user->setVille('montfermeil');
        $user->setDateEmbauche('28/02/2005');
        $user->setDateCreation('28/02/2005');
        $user->setDateExpiration('30/02/2006');
        $user->setEtat(1);
        $user->setStatut('visiteur');
        
        $em->persist($user);
        
        
        $user2 = new Users();
        $user2->setCivilite('mm');
        $user2->setNom('dodo');
        $user2->setPrenom('pauline');
        $user2->setLogin('paulinepharma');
        $user2->setMotPasse('tyhdkop');
        $user2->setAdresse('5,rue picasso');
        $user2->setCodePostal(92370);
        $user2->setVille('levallois');
        $user2->setDateEmbauche('28/02/2005');
        $user2->setDateCreation('28/02/2005');
        $user2->setDateExpiration('30/02/2006');
        $user2->setEtat(1);
        $user2->setStatut('comptable');
        
        $em->persist($user2);

        $em->flush();
        
    */
        $users = $em->getRepository('UniversalBundle:Users::')->findAll();
        
        return $this->render('UniversalBundle:Default:ajout.html.twig', array('users' =>$users));
    }
    
    


}