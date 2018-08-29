<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // gseb_user_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'GSEB\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gseb_user_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_gseb_user_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'gseb_user_homepage'));
            }

            return $ret;
        }
        not_gseb_user_homepage:

        // gseb_user_history_list
        if ('/UserHistory/list' === $pathinfo) {
            return array (  '_controller' => 'GSEB\\UserHistoryBundle\\Controller\\UserHistoryController::listDemandeAction',  '_route' => 'gseb_user_history_list',);
        }

        // gseb_user_history_view
        if (0 === strpos($pathinfo, '/UserHistory/view') && preg_match('#^/UserHistory/view/(?P<id_demande>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gseb_user_history_view')), array (  '_controller' => 'GSEB\\UserHistoryBundle\\Controller\\UserHistoryController::viewDemandeAction',));
        }

        // gseb_admin_history_list
        if ('/AdminHistory/list' === $pathinfo) {
            return array (  '_controller' => 'GSEB\\AdminHistoryBundle\\Controller\\HistoryController::listDemandeAction',  '_route' => 'gseb_admin_history_list',);
        }

        // gseb_admin_history_view
        if (0 === strpos($pathinfo, '/AdminHistory/view') && preg_match('#^/AdminHistory/view/(?P<id_demande>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gseb_admin_history_view')), array (  '_controller' => 'GSEB\\AdminHistoryBundle\\Controller\\HistoryController::viewDemandeAction',));
        }

        // gseb_core_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'GSEB\\CoreBundle\\Controller\\CoreController::indexAction',  '_route' => 'gseb_core_homepage',);
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

        // gseb_valid_homepage
        if ('/admin' === $trimmedPathinfo) {
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

        if (0 === strpos($pathinfo, '/demande')) {
            // gseb_demande_salle
            if ('/demande' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'GSEB\\DemandeBundle\\Controller\\DemandeController::listSalleAction',  '_route' => 'gseb_demande_salle',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_gseb_demande_salle;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'gseb_demande_salle'));
                }

                return $ret;
            }
            not_gseb_demande_salle:

            // gseb_demande_baie
            if (0 === strpos($pathinfo, '/demande/salle') && preg_match('#^/demande/salle/(?P<id_salle>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gseb_demande_baie')), array (  '_controller' => 'GSEB\\DemandeBundle\\Controller\\DemandeController::listBaieAction',));
            }

            // gseb_demande_success
            if (0 === strpos($pathinfo, '/demande/success') && preg_match('#^/demande/success/(?P<id_demande>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gseb_demande_success')), array (  '_controller' => 'GSEB\\DemandeBundle\\Controller\\DemandeController::demandeSuccessAction',));
            }

            // gseb_demande_objtype
            if (0 === strpos($pathinfo, '/demande/baie') && preg_match('#^/demande/baie/(?P<id_baie>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gseb_demande_objtype')), array (  '_controller' => 'GSEB\\DemandeBundle\\Controller\\DemandeController::listObjectAction',));
            }

            // gseb_demande_properties
            if (0 === strpos($pathinfo, '/demande/object') && preg_match('#^/demande/object/(?P<id_objtype>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gseb_demande_properties')), array (  '_controller' => 'GSEB\\DemandeBundle\\Controller\\DemandeController::listPropertiesAction',));
            }

            // gseb_demande_attributs
            if (0 === strpos($pathinfo, '/demande/attributs') && preg_match('#^/demande/attributs/(?P<id_demande>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gseb_demande_attributs')), array (  '_controller' => 'GSEB\\DemandeBundle\\Controller\\DemandeController::listAttributsAction',));
            }

            // gseb_demande_rackspace
            if (0 === strpos($pathinfo, '/demande/rackspace') && preg_match('#^/demande/rackspace/(?P<id_demande>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gseb_demande_rackspace')), array (  '_controller' => 'GSEB\\DemandeBundle\\Controller\\DemandeController::rackspaceAction',));
            }

            if (0 === strpos($pathinfo, '/demande/list')) {
                // gseb_demande_editdellist
                if ('/demande/list' === $pathinfo) {
                    return array (  '_controller' => 'GSEB\\DemandeBundle\\Controller\\DemandeController::listDemandesAction',  '_route' => 'gseb_demande_editdellist',);
                }

                // gseb_demande_viewdemande
                if (preg_match('#^/demande/list/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gseb_demande_viewdemande')), array (  '_controller' => 'GSEB\\DemandeBundle\\Controller\\DemandeController::viewDemandeAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/main')) {
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

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
