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

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === rtrim($pathinfo, '/')) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

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

                // _profiler_purge
                if ('/_profiler/purge' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // congreso_admin_homepage
            if ('/admin' === rtrim($pathinfo, '/')) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'congreso_admin_homepage');
                }

                return array (  '_controller' => 'Congreso\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'congreso_admin_homepage',);
            }

            if (0 === strpos($pathinfo, '/admin/login')) {
                // congreso_admin_login
                if ('/admin/login' === $pathinfo) {
                    return array (  '_controller' => 'Congreso\\AdminBundle\\Controller\\SecurityController::loginAction',  '_route' => 'congreso_admin_login',);
                }

                // congreso_admin_login_check
                if ('/admin/login_check' === $pathinfo) {
                    return array('_route' => 'congreso_admin_login_check');
                }

            }

            // congreso_admin_index
            if ('/admin/index' === $pathinfo) {
                return array (  '_controller' => 'Congreso\\AdminBundle\\Controller\\SecurityController::indexAction',  '_route' => 'congreso_admin_index',);
            }

            // congreso_admin_logout
            if ('/admin/logout' === $pathinfo) {
                return array('_route' => 'congreso_admin_logout');
            }

            if (0 === strpos($pathinfo, '/admin/backend')) {
                // easyadmin
                if ('/admin/backend' === rtrim($pathinfo, '/')) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'easyadmin');
                    }

                    return array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'easyadmin',);
                }

                // admin
                if ('/admin/backend' === rtrim($pathinfo, '/')) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin');
                    }

                    return array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
                }

            }

        }

        // congreso_congreso_list
        if ('' === rtrim($pathinfo, '/')) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'congreso_congreso_list');
            }

            return array (  '_controller' => 'Congreso\\CongresoBundle\\Controller\\CongresoController::listAction',  '_route' => 'congreso_congreso_list',);
        }

        // congreso_congreso_show
        if (0 === strpos($pathinfo, '/show') && preg_match('#^/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'congreso_congreso_show')), array (  '_controller' => 'Congreso\\CongresoBundle\\Controller\\CongresoController::showAction',));
        }

        // congreso_cientifico_artcen
        if (0 === strpos($pathinfo, '/cen') && preg_match('#^/cen/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'congreso_cientifico_artcen')), array (  '_controller' => 'Congreso\\CongresoBundle\\Controller\\CientificoController::listAction',));
        }

        // congreso_track_arttrac
        if (0 === strpos($pathinfo, '/trac') && preg_match('#^/trac/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'congreso_track_arttrac')), array (  '_controller' => 'Congreso\\CongresoBundle\\Controller\\TrackController::listAction',));
        }

        if (0 === strpos($pathinfo, '/co')) {
            // congreso_congreso_contact
            if ('/contact' === $pathinfo) {
                return array (  '_controller' => 'Congreso\\CongresoBundle\\Controller\\CongresoController::contactAction',  '_route' => 'congreso_congreso_contact',);
            }

            // congreso_comment_create
            if (0 === strpos($pathinfo, '/comment') && preg_match('#^/comment/(?P<articulo_id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_congreso_comment_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'congreso_comment_create')), array (  '_controller' => 'Congreso\\CongresoBundle\\Controller\\CommentController::createAction',));
            }
            not_congreso_comment_create:

        }

        // congreso_congreso_showAjax
        if (0 === strpos($pathinfo, '/showAjax') && preg_match('#^/showAjax/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'congreso_congreso_showAjax')), array (  '_controller' => 'Congreso\\CongresoBundle\\Controller\\CongresoController::showAjaxAction',));
        }

        // homepage
        if ('' === rtrim($pathinfo, '/')) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
