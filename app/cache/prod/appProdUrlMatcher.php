<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/images')) {
            // _assetic_4ab648f
            if ($pathinfo === '/images/4ab648f.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4ab648f',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_4ab648f',);
            }

            // _assetic_c8a5894
            if ($pathinfo === '/images/c8a5894.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c8a5894',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_c8a5894',);
            }

            // _assetic_805a8d0
            if ($pathinfo === '/images/805a8d0.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '805a8d0',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_805a8d0',);
            }

            // _assetic_5c4b9cc
            if ($pathinfo === '/images/5c4b9cc.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5c4b9cc',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_5c4b9cc',);
            }

            if (0 === strpos($pathinfo, '/images/1')) {
                // _assetic_17a2a1d
                if ($pathinfo === '/images/17a2a1d.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '17a2a1d',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_17a2a1d',);
                }

                // _assetic_13a2bd9
                if ($pathinfo === '/images/13a2bd9.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '13a2bd9',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_13a2bd9',);
                }

            }

            // _assetic_5ff072c
            if ($pathinfo === '/images/5ff072c.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5ff072c',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_5ff072c',);
            }

        }

        if (0 === strpos($pathinfo, '/b')) {
            if (0 === strpos($pathinfo, '/backdoor')) {
                // _homeBackDoor
                if (rtrim($pathinfo, '/') === '/backdoor') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_homeBackDoor');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::backdoorAction',  '_route' => '_homeBackDoor',);
                }

                if (0 === strpos($pathinfo, '/backdoor/goin')) {
                    // app_default_camonin
                    if (preg_match('#^/backdoor/goin(?:/(?P<name>[^/]++)(?:/(?P<id>[^/]++))?)?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_default_camonin')), array (  'name' => 'hola',  'id' => 'adios',  '_controller' => 'AppBundle\\Controller\\DefaultController::camoninAction',));
                    }

                    // goin
                    if (preg_match('#^/backdoor/goin/(?P<name>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'goin')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::camoninAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/backdoor/log')) {
                    if (0 === strpos($pathinfo, '/backdoor/login')) {
                        // _login
                        if ($pathinfo === '/backdoor/login') {
                            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::loginAction',  '_route' => '_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/backdoor/login_check') {
                            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _logout
                    if ($pathinfo === '/backdoor/logout') {
                        return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::logoutAction',  '_route' => '_logout',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/boda')) {
                if (0 === strpos($pathinfo, '/boda/invitacion')) {
                    // app_boda_index
                    if (preg_match('#^/boda/invitacion(?:/(?P<invitation>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_boda_index')), array (  'invitation' => 'nada',  '_controller' => 'AppBundle\\Controller\\BodaController::indexAction',));
                    }

                    // app_boda_index_1
                    if ($pathinfo === '/boda/invitacion') {
                        return array (  '_controller' => 'AppBundle\\Controller\\BodaController::indexAction',  '_route' => 'app_boda_index_1',);
                    }

                }

                // _descargar_invitacion
                if ($pathinfo === '/boda/descarga') {
                    return array (  '_controller' => 'AppBundle\\Controller\\BodaController::descargaAction',  '_route' => '_descargar_invitacion',);
                }

                if (0 === strpos($pathinfo, '/boda/sophieVideo')) {
                    // _descargar_video
                    if ($pathinfo === '/boda/sophieVideo/descarga') {
                        return array (  '_controller' => 'AppBundle\\Controller\\BodaController::descargaSophieVideoAction',  '_route' => '_descargar_video',);
                    }

                    // _video_sophie
                    if ($pathinfo === '/boda/sophieVideo') {
                        return array (  '_controller' => 'AppBundle\\Controller\\BodaController::sophieAction',  '_route' => '_video_sophie',);
                    }

                }

                // listaBoda
                if ($pathinfo === '/boda/lista') {
                    return array (  '_controller' => 'AppBundle\\Controller\\BodaController::listaAction',  '_route' => 'listaBoda',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/comunion')) {
            // _invitacion_home
            if ($pathinfo === '/comunion/lucia/2015') {
                return array (  '_controller' => 'AppBundle\\Controller\\AngelicaController::indexAction',  '_route' => '_invitacion_home',);
            }

            if (0 === strpos($pathinfo, '/comunion/descarga/lucia')) {
                // _descargar_original
                if ($pathinfo === '/comunion/descarga/lucia/original') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AngelicaController::descargaOriginalAction',  '_route' => '_descargar_original',);
                }

                // _descargar_hd
                if ($pathinfo === '/comunion/descarga/lucia/hd') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AngelicaController::descargaHdAction',  '_route' => '_descargar_hd',);
                }

                // _descargar_sd
                if ($pathinfo === '/comunion/descarga/lucia/sd') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AngelicaController::descargaSdAction',  '_route' => '_descargar_sd',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/yaiza/prieto')) {
            // _yaizaCV
            if ($pathinfo === '/yaiza/prieto') {
                return array (  '_controller' => 'AppBundle\\Controller\\YaizaController::indexAction',  '_route' => '_yaizaCV',);
            }

            // _yaizaCV_PDF
            if ($pathinfo === '/yaiza/prieto/PDF') {
                return array (  '_controller' => 'AppBundle\\Controller\\YaizaController::descargarPDFAction',  '_route' => '_yaizaCV_PDF',);
            }

        }

        if (0 === strpos($pathinfo, '/bego/beneitez/prieto')) {
            // _begoCV
            if ($pathinfo === '/bego/beneitez/prieto') {
                return array (  '_controller' => 'AppBundle\\Controller\\BegoController::indexAction',  '_route' => '_begoCV',);
            }

            // _begoCV_PDF
            if ($pathinfo === '/bego/beneitez/prieto/PDF') {
                return array (  '_controller' => 'AppBundle\\Controller\\BegoController::descargarPDFAction',  '_route' => '_begoCV_PDF',);
            }

        }

        if (0 === strpos($pathinfo, '/abel/prieto/beneitez')) {
            // _abelpbIndex
            if (rtrim($pathinfo, '/') === '/abel/prieto/beneitez') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_abelpbIndex');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AbelController::indexAction',  '_route' => '_abelpbIndex',);
            }

            // _pdfAbelPrieto
            if ($pathinfo === '/abel/prieto/beneitez/pdf') {
                return array (  '_controller' => 'AppBundle\\Controller\\AbelController::abelPDFAction',  '_route' => '_pdfAbelPrieto',);
            }

            // _emailAbel
            if ($pathinfo === '/abel/prieto/beneitez/email') {
                return array (  '_controller' => 'AppBundle\\Controller\\AbelController::emailMeAction',  '_route' => '_emailAbel',);
            }

        }

        // root
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'root');
            }

            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction',  'path' => '/abel/prieto/beneitez',  'permanent' => true,  '_route' => 'root',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
