<?php

namespace TestgBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function index1Action()
    {
        return $this->render('TestgBundle:Default:index1.html.twig');
    }
    public function layoutAction()
    {
        return $this->render('TestgBundle::layout.html.twig');
    }
    public function indexAction()
    {
        return $this->render('TestgBundle:template:index.html.twig');
    }
    public function portfolioAction()
    {
        return $this->render('TestgBundle:template:portfolio.html.twig');
    }
    public function contactAction()
    {
        return $this->render('TestgBundle:template:contact.html.twig');
    }
    public function presentationAction()
    {
        return $this->render('TestgBundle:template:presentation.html.twig');
    }
    public function historiqueAction()
    {
        return $this->render('TestgBundle:template:historique.html.twig');
    }
    public function missionsAction()
    {
        return $this->render('TestgBundle:template:missions.html.twig');
    }
    public function organisationAction()
    {
        return $this->render('TestgBundle:template:organisation.html.twig');
    }
    public function rhAction()
    {
        return $this->render('TestgBundle:template:rh.html.twig');
    }
    public function chiffreAction()
    {
        return $this->render('TestgBundle:template:chiffre.html.twig');
    }
    public function rdradioAction()
    {
        return $this->render('TestgBundle:template:rdradio.html.twig');
    }
    public function rdtvAction()
    {
        return $this->render('TestgBundle:template:rdtv.html.twig');
    }
    public function rdfhAction()
    {
        return $this->render('TestgBundle:template:rdfh.html.twig');
    }
    public function dtelevisionAction()
    {
        return $this->render('TestgBundle:template:dtelevision.html.twig');
    }
    public function dradioAction()
    {
        return $this->render('TestgBundle:template:dradio.html.twig');
    }
    public function cqreceptionAction()
    {
        return $this->render('TestgBundle:template:cqreception.html.twig');
    }
    public function ecouteradioAction()
    {
        return $this->render('TestgBundle:template:ecouteradio.html.twig');
    }
    public function transmissionfhAction()
    {
        return $this->render('TestgBundle:template:transmissionfh.html.twig');
    }
    public function transmissionfixeAction()
    {
        return $this->render('TestgBundle:template:transmissionfixe.html.twig');
    }
    public function transmissionmobileAction()
    {
        return $this->render('TestgBundle:template:transmissionmobile.html.twig');
    }
    public function devmaintAction()
    {
        return $this->render('TestgBundle:template:devmaint.html.twig');
    }
    public function locationAction()
    {
        return $this->render('TestgBundle:template:location.html.twig');
    }
    public function servicesAction()
    {
        return $this->render('TestgBundle:template:services.html.twig');
    }
    public function etapetntAction()
    {
        return $this->render('TestgBundle:template:etapetnt.html.twig');
    }
    public function diffusionAction()
    {
        return $this->render('TestgBundle:template:diffusion.html.twig');
    }
    public function normecAction()
    {
        return $this->render('TestgBundle:template:normec.html.twig');
    }
    public function zonecAction()
    {
        return $this->render('TestgBundle:template:zonec.html.twig');
    }
    public function commentrecevoirAction()
    {
        return $this->render('TestgBundle:template:commentrecevoir.html.twig');
    }

}
