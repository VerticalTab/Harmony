<?php

namespace Harmony\HomepageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HarmonyHomepageBundle:Default:index.html.twig');
    }
}
