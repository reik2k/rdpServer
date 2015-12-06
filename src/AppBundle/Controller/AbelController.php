<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
* @Route("/abel/prieto/beneitez", name="_abelpb")
*/
class AbelController extends Controller
{
	/**
	* @Route("/", name="_abelpbIndex")
	*/
	public function indexAction()
	{
		return $this->render('AppBundle:Default:abelprieto.html.twig',array());
	}
	
	/**
	* @Route("/pdf", name="_pdfAbelPrieto")
	*/
	public function abelPDFAction()
	{
		return  new BinaryFileResponse('bundles/app/doc/AbelPrietoBeneitezCV.pdf');
	}
	
	/**
	* @Route("/email", name="_emailAbel")
	*/
	public function emailMeAction(Request $request)
	{	
		$name = $request->get('name');
		$email = $request->get('email');
		$message = $request->get('message');
		//$subject = 'PRIORITARIO: La empresa '.$name.'desea contactar contigo.';
		//$emailBody = 'Correo de '.$name.' con email: '.$email.', te ha enviado el siguiente mensaje: '.$message;
		
		$message = \Swift_Message::newInstance()
				        ->setSubject('PRIORITARIO: La empresa '.$name.'desea contactar contigo.')
				        ->setFrom('abel2k@cloud2k.es')
				        ->setTo('ablprietobe@gmail.com')
				        ->setBody('Correo de '.$name.' con email: '.$email.', te ha enviado el siguiente mensaje: '.$message);
		
	    $this->get('mailer')->send($message);
		
        $response = new Response();
		$response->setStatusCode(200); 
		$response->setContent(json_encode(array('respuesta'=>'OK')));
		$response->headers->set('Content-Type', 'application/json');
		
		return $response;		
	}
}