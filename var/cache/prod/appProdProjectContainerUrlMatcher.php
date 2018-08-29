<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // gseb_valid_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'GSEBValidBundle:Default:index',  '_route' => 'gseb_valid_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_gseb_valid_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'gseb_valid_homepage'));
            }

            return $ret;
        }
        not_gseb_valid_homepage:

        // gseb_demande_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'GSEB\\DemandeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gseb_demande_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_gseb_demande_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'gseb_demande_homepage'));
            }

            return $ret;
        }
        not_gseb_demande_homepage:

        if (0 === strpos($pathinfo, '/main')) {
            // gseb_main_homepage
            if ('/main' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'GSEB\\MainBundle\\Controller\\MainController::accueilAction',  '_route' => 'gseb_main_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_gseb_main_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'gseb_main_homepage'));
                }

                return $ret;
            }
            not_gseb_main_homepage:

            // gseb_main_homeaction
            if (preg_match('#^/main/(?P<action>add|edit|delete)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gseb_main_homeaction')), array (  '_controller' => 'GSEB\\MainBundle\\Controller\\MainController::indexAction',));
            }

        }

        // gseb_core_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'GSEBCoreBundle:Default:index',  '_route' => 'gseb_core_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_gseb_core_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'gseb_core_homepage'));
            }

            return $ret;
        }
        not_gseb_core_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
