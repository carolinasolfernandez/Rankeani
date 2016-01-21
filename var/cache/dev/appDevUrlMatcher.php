<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/8688ff3')) {
            // _assetic_8688ff3
            if ($pathinfo === '/css/8688ff3.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8688ff3',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_8688ff3',);
            }

            if (0 === strpos($pathinfo, '/css/8688ff3_')) {
                // _assetic_8688ff3_0
                if ($pathinfo === '/css/8688ff3_bootstrap.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8688ff3',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_8688ff3_0',);
                }

                // _assetic_8688ff3_1
                if ($pathinfo === '/css/8688ff3_jquery-ui_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8688ff3',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_8688ff3_1',);
                }

                // _assetic_8688ff3_2
                if ($pathinfo === '/css/8688ff3_colorbox_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8688ff3',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_8688ff3_2',);
                }

                if (0 === strpos($pathinfo, '/css/8688ff3_alertify.')) {
                    // _assetic_8688ff3_3
                    if ($pathinfo === '/css/8688ff3_alertify.core_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8688ff3',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_8688ff3_3',);
                    }

                    // _assetic_8688ff3_4
                    if ($pathinfo === '/css/8688ff3_alertify.default_5.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8688ff3',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_8688ff3_4',);
                    }

                }

                if (0 === strpos($pathinfo, '/css/8688ff3_c')) {
                    // _assetic_8688ff3_5
                    if ($pathinfo === '/css/8688ff3_comurimage_6.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8688ff3',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_8688ff3_5',);
                    }

                    // _assetic_8688ff3_6
                    if ($pathinfo === '/css/8688ff3_chosen_7.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8688ff3',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_8688ff3_6',);
                    }

                }

                // _assetic_8688ff3_7
                if ($pathinfo === '/css/8688ff3_bootstrap-datepicker.min_8.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8688ff3',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_8688ff3_7',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/ec4b36e')) {
            // _assetic_ec4b36e
            if ($pathinfo === '/js/ec4b36e.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec4b36e',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_ec4b36e',);
            }

            if (0 === strpos($pathinfo, '/js/ec4b36e_')) {
                if (0 === strpos($pathinfo, '/js/ec4b36e_jquery-')) {
                    // _assetic_ec4b36e_0
                    if ($pathinfo === '/js/ec4b36e_jquery-2.1.3.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec4b36e',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_ec4b36e_0',);
                    }

                    // _assetic_ec4b36e_1
                    if ($pathinfo === '/js/ec4b36e_jquery-ui_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec4b36e',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_ec4b36e_1',);
                    }

                }

                // _assetic_ec4b36e_2
                if ($pathinfo === '/js/ec4b36e_bootstrap.min_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec4b36e',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_ec4b36e_2',);
                }

                // _assetic_ec4b36e_3
                if ($pathinfo === '/js/ec4b36e_colorbox.min_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec4b36e',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_ec4b36e_3',);
                }

                // _assetic_ec4b36e_4
                if ($pathinfo === '/js/ec4b36e_imagepicker.min_5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec4b36e',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_ec4b36e_4',);
                }

                // _assetic_ec4b36e_5
                if ($pathinfo === '/js/ec4b36e_alertify.min_6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec4b36e',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_ec4b36e_5',);
                }

                if (0 === strpos($pathinfo, '/js/ec4b36e_c')) {
                    // _assetic_ec4b36e_6
                    if ($pathinfo === '/js/ec4b36e_comurimage_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec4b36e',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_ec4b36e_6',);
                    }

                    // _assetic_ec4b36e_7
                    if ($pathinfo === '/js/ec4b36e_chosen_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec4b36e',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_ec4b36e_7',);
                    }

                }

                if (0 === strpos($pathinfo, '/js/ec4b36e_bootstrap-datepicker.')) {
                    // _assetic_ec4b36e_8
                    if ($pathinfo === '/js/ec4b36e_bootstrap-datepicker.min_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec4b36e',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_ec4b36e_8',);
                    }

                    // _assetic_ec4b36e_9
                    if ($pathinfo === '/js/ec4b36e_bootstrap-datepicker.es.min_10.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec4b36e',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_ec4b36e_9',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
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

        // ranking_front_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ranking_front_default_index');
            }

            return array (  '_controller' => 'Ranking\\FrontBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ranking_front_default_index',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
