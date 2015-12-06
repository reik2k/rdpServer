<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Login;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/backdoor", name="_backdoor")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/", name="_homeBackDoor")
     */
    public function backdoorAction()
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
    
}
