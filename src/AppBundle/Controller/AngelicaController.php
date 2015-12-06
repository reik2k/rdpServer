<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
* @Route("/comunion", name="_luciaVideo")
*/
class AngelicaController extends Controller
{
	
	/**
    * @Route("/lucia/2015", name="_invitacion_home")
    */
    public function indexAction()
    {
		return $this->render('AppBundle:Default:video2.html.twig',array('title'=>'*Lucia&Angélica*'));
    }
    
    /**
    * @Route("/descarga/lucia/original", name="_descargar_original")
    */
    public function descargaOriginalAction()
    {
		throw new HttpException(404,"Whoops! Looks like the post you are looking for dosen't exist. :/");
		/*
		LINK: http://www.locastic.com/en/blog/symfony2/throw-that-exception-like-a-boss-or-how-to-properly-use-and-customize-symfony-errors

		return $videonew BinaryFileResponse('bundles/app/videos/ComunionLuciaOriginal.mp4.zip');
		*/
		
    }

	/**
    * @Route("/descarga/lucia/hd", name="_descargar_hd")
    */
    public function descargaHdAction()
    {
		
		return  new BinaryFileResponse('bundles/app/videos/ComunionLuciaHD.mp4.zip');
    }

	/**
    * @Route("/descarga/lucia/sd", name="_descargar_sd")
    */
    public function descargaSdAction()
    {
		return new BinaryFileResponse('bundles/app/videos/ComunionLuciaSD.mp4.zip');
    }

}