<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }    
    /**
     * @Route("/goin/{name}/{id}", defaults={"name"="hola", "id"="adios"})
     * @Route("/goin/{name}/{id}", name="goin")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function camoninAction($name,$id)
    {
    	$login = new Login();
    	
    	$login->setName($name);
    	$login->setPasswd($id);
    	
    	$normalizer = new GetSetMethodNormalizer();
    	$encoder = new JsonEncoder();
    	
    	$serializer = new Serializer(array($normalizer), array($encoder));
    	$json = $serializer->serialize(array(	'name'=>$login->getName(), 
    											'pass'=> $login->getPasswd()), 
    											'json'); // Output: {"name":"foo","sportsman":false}
    	
    	$response = new Response($json);
    	
    	$response->headers->set('Access-Control-Allow-Origin', '*');
    	$response->headers->set('Content-Type', 'application/json');
	
    	return $response;
    }
    
    /**
     * @Route("/login", name="_login")
     * @Template("AppBundle:Default:login.html.twig")
     */
    public function loginAction(Request $request)
    {
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $request->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
        }

        return array(
            'last_username' => $request->getSession()->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        );
    }
    
    /**
     * @Route("/login_check", name="_security_check")
     */
    public function securityCheckAction()
    {
        // The security layer will intercept this request
    }

    /**
     * @Route("/logout", name="_logout")
     */
    public function logoutAction()
    {
        // The security layer will intercept this request
    }

    /**
    *
    *@Route("/lista", name="listaBoda")
    */
    public function listaAction()
    {
    	
    	$lista =  array( 'dadlist' => 
                            array(  'Juan José',
                            		'Otilia',
                                    'Cristina',
                                    'Rubén',
                                    'Rubén Mujer',
                                    'Miguel',
                                    'Angelines',
                                    'Sara',
                                    '* Novio Sara',
                                    'Laura',
                                    'Ricardo',
                                    '* Rodrigo',
                                    'Ángel [Titín]',
                                    'Aurelia Salmerón',
                                    'María Ángeles',
                                    'Antoñico',
                                    'David',
                                    '* Alex',
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
                                    'Isabel',
                                    'Yaiza',
                                    '* PRIMO',
                                    '* PRIMO',
                                    '* PRIMO',
                                    '* PRIMO',
                                    '* Joaquín',
                                    '* TÍA ABUELA',
                                    'Jesús',
                                    'Mujer Jesús',
									'Sele',
									'Maria'),
                        'momlist' => 
                            array(	'Begoña',
                            		'Pedro',
                                    'Fabriciana',
                                    'Pablo',
                                    'Mari',
                                    'Tío Segundo',
                                    'Juanita',
                                    '* Emilio',
                                    '* Juaqui',
                                    'Matías',
                                    'Katty',
                                    '* Nefi',
                                    'Iván',
                                    'Novia Iván',
                                    'Juan Ramón',
                                    'Araceli',
                                    'Raquel',
                                    'Novio Raquel',
                                    '* Iván',
                                    '* Mujer Iván',
                                    'Marina',
                                    'Fernando',
                                    'Pilar',
                                    'Jose',
                                    'Luca',
                                    'Eva',
                                    'Alberto',
                                    'Nieves',
                                    'Emilio',
                                    'Merce',
                                    '* Raúl',
                                    '* Gloria',
                                    '* Raúl [hijo]',
                                    '* Ana Prieto',
                                    '* Ananda3',
                                    '* David',
                                    '* Marta',
                                    '* Luis',
                                    '* Daniel2'),
                     'pastorList' => 
                            array(	'José Andrés',
                            		'Antonio',
                                    'Coral',
                                    'Rosi',
                                    'Luís',
                                    'Amaya',
                                    'Oscar',
                                    'Marga',
                                    'Jose Manuel',
                                    'Mari Tere',
                                    'Pepe',
                                    'Jose Manuel',
                                    'Carmen',
                                    'Maria Asunción',
                                    'Rafa',
                                    'Fabián'),
                     'sanchezList' => 
                            array(	'Toñi',
                            		'Marga',
                                    'María',
                                    'Alejandro',
                                    'Jacinta',
                                    'Paco',
                                    'Eusebio',
                                    'Asun',
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
                            		'Elena',
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
                                    'Rocio',
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
                                    'Ali',
                                    'Fran',
                                    'Rachel',
                                    'Argui',
                                    'Maria Deluxe',
                                    'Sofía',
                                    'Abel'),
                      'title' => 'Lista Boda');  

	    return $this->render('AppBundle:Default:lista.html.twig', $lista);
    }
}
