<?php

namespace Universal\UniversalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;





class DefaultController extends Controller {

    public function accueilAction() {
        return $this->render('UniversalBundle:Default:accueil.html.twig');
    }

    public function laboAction() {
        return $this->render('UniversalBundle:Default:labo.html.twig');
    }

    public function medicamentsAction() {
        return $this->render('UniversalBundle:Default:medicaments.html.twig');
    }

    public function carriereAction() {
        return $this->render('UniversalBundle:Default:carriere.html.twig');
    }

    public function clientsAction() {
        return $this->render('UniversalBundle:Default:clients.html.twig');
    }

    public function planAction() {
        return $this->render('UniversalBundle:Default:plan.html.twig');
    }

    public function contactAction() {
        return $this->render('UniversalBundle:Default:contact.html.twig');
    }

    public function intranetAction() {
        return $this->render('UniversalBundle:Default:intranet.html.twig');
    }

    public function actualiteAction() {
        return $this->render('UniversalBundle:Default:actualite.html.twig');
    }

}
