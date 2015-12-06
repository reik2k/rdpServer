<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

/**
* @Route("/bego", name="_yaizaCV")
*/
class BegoController extends Controller
{
	/**
	* @Route("/beneitez/prieto", name="_begoCV")
	*/
    public function indexAction()
    {
		return $this->render('AppBundle:Default:BegoBeneitezPrieto.html.twig');
    }
    
	/**
	* @Route("/beneitez/prieto/PDF", name="_begoCV_PDF")
	*/
    public function descargarPDFAction()
    {
		return new BinaryFileResponse('bundles/app/BegoBeneitezPrieto_archivos/BegoBeneitezPrieto.pdf');    
	}

}
