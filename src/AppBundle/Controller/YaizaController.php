<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

/**
* @Route("/yaiza", name="_yaizaCV")
*/
class YaizaController extends Controller
{
	/**
	* @Route("/prieto", name="_yaizaCV")
	*/
    public function indexAction()
    {
		return $this->render('AppBundle:Default:YaizaPrietoBeneitez.html.twig');
    }
    
	/**
	* @Route("/prieto/PDF", name="_yaizaCV_PDF")
	*/
    public function descargarPDFAction()
    {
		return new BinaryFileResponse('bundles/app/YaizaPrietoBeneitez_archivos/YaizaPrietoBeneitezCV.pdf');    
	}

}
