<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

/**
* @Route("/boda", name="_invitacion")
*/
class BodaController extends Controller
{
    /**
    * @Route("/invitacion/{invitation}", name="_invitacion_home")
    * @Route("/invitacion/{invitation}", defaults={"invitation"="nada"})
    * @Route("/invitacion")     
    */
    public function indexAction($invitation)
    {
		if($invitation == '10072015')
    	{
			return $this->render(	'AppBundle:Default:invitation.html.twig',
									array(	'title'		=> 'Sofia&Abel',
											'render'	=> false));
    	}else
    	{
	    	return $this->render(	'AppBundle:Default:invitation.html.twig',
	    							array(	'title'		=> 'Sofia&Abel',
	    									'render'	=> true));
    	}
    }
    
    /**
    * @Route("/descarga", name="_descargar_invitacion")
    */
    public function descargaAction()
    {
	    return new BinaryFileResponse('bundles/app/images/invitacion.pdf');
    }
    
    /**
    * @Route("/sophieVideo/descarga", name="_descargar_video")
    */
    public function descargaSophieVideoAction()
    {
	    return new BinaryFileResponse('bundles/app/videos/SofieBirthDay.zip');
    }

    /**
    * @Route("/sophieVideo", name="_video_sophie")
    */
    public function sophieAction()
    {
    	return $this->render(	'AppBundle:Default:video.html.twig',
									array(	'title'		=> 'Sophie\'s Birthday'));

    }
    
	/**
    *
    *@Route("/lista", name="listaBoda")
    */
    public function listaAction()
    {
    	
    	$lista =  array( 'dadlist' => 
                            array(  'Juan José',
                                    'Miguel',
                                    'Angelines',
                                    'Sara',
                                    'Abraham',
                                    'Laura',
                                    'Ricardo',
                                    'Lolín',
                                    'María Ángeles',
                                    'Antoñico',
								  	'Cristina',
                                    'Luis Miguel [Guisi]',
                                    'Mari Jose',
                                    'Virginia',
                                    'Sergio',
                                    'Victor',
                                    'Chari',
                                    'Minerva',
                                    'Bienvenido',
                                    'Sonia',
                                    'Adrián',
                                    'Eric',
                                    'Carlitos',
                                    'Yaiza',                                    
                                    'Joaquín',
								  	'Novia Joaquín',
								 	'* Tomás',
								 	'* Sevi',
								 	'* Paco',
								 	'* Tere'),
                        'momlist' => 
                            array(	'Begoña',
                            		'Pedro',
                                    'Fabriciana',
                                    'Tío Ramón',
                                    'Pablo',
                                    'Mari',
                                    'Tío Segundo',
                                    'Juanita',
                                    '* Emilio',
                                    '* Juaqui',
                                    'Marina',
                                    'Fernando',
                                    'Tamara',
                                    'Rober',
                                    'Pilar',
                                    'Jose',
                                    'Eva',
                                    'Alberto',
                                    'Nieves',
                                    'Emilio',
                                    'Merce'),
                     'pastorList' => 
                            array(	'José Andrés',
                            		'Antonio',
                                    'Coral',
                                    'Rosi',
                                    'Luís',
                                    'Amaya',
                                    'Oscar',
                                    'Mari Tere',
                                    'Pepe',
                                    'Jose Manuel',
                                    'Carmen',
                                    'Maria Asunción',
                                    'Rafa',
                                    'Fabián',
								 	'Primo Madrid',
								 	'Mujar del Primo de Madrid'),
                     'sanchezList' => 
                            array(	'Toñi',
                            		'Marga',
                                    'María',
                                    'Alejandro',
                                    'Jacinta',
                                    'Paco',
                                    'Eusebio',
                                    '* Asun',
                                    'Elisa',
                                    'Ovidio',
                                    'Belén',
                                    'Elena',
                                    'Clara',
                                    'Teo',
                                    'Isi',
                                    'Miguel',
                                    'Pablo',
                                    'Conchi',
                                    'Antonio',
                                    'Antoñito',
                                    'Timo',
                                    'Mauri',
                                    'Jose Luis',
                                    'Carmenchu',
                                    'Maite',
                                    'Eulogio'),
					'friendsList' => 
                            array(	'Guti',
                            		'Rachele',
                                    'Andrés',
                                    'Elena',
                                    'Nano',
                                    'Angélica',
                                    'Chuso',
                                    'Alexia',
                                    'Maria Rosa',
                                    'Antonio',
                                    'Cañizo',
                                    'Chema',
                                    'Mónica',
                                    'Fabio',
                                    'Cris Prado',
                                    'Chus',
                                    'Rocio',
                                    'Alex',
                                    'Ricardo',
                                    'Basas',
                                    'Emma',
                                    'Virgi',
                                    'Sara',
                                    'Anama',
                                    'Ana Yuste',
                                    'Marta Yuste',
                                    'Berta',
                                    'David',
                                    'Inma',
                                    'Agus',
                                    'Santi',
								  	'Edu',
                                    'Ali',
                                    'Fran',
                                    'Rachel',
                                    'Argui',
                                    'Niza',
                                    'Sofía',
                                    'Abel'),
                      'title' => 'Lista Boda');  

	    return $this->render('AppBundle:Default:lista.html.twig', $lista);
    }
}
