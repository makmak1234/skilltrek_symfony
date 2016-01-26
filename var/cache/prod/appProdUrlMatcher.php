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

        // blog_blog_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'blog_blog_homepage');
            }

            return array (  '_controller' => 'Blog\\BlogBundle\\Controller\\DefaultController::indexAction',  '_route' => 'blog_blog_homepage',);
        }

        // blog_blog_word
        if (preg_match('#^/(?P<word>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_blog_blog_word;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_blog_word')), array (  '_controller' => 'Blog\\BlogBundle\\Controller\\DefaultController::wordAction',));
        }
        not_blog_blog_word:

        if (0 === strpos($pathinfo, '/post')) {
            // blog_blog_post
            if (preg_match('#^/post/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_blog_blog_post;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_blog_post')), array (  '_controller' => 'Blog\\BlogBundle\\Controller\\DefaultController::showAction',));
            }
            not_blog_blog_post:

            // blog_blog_search
            if ($pathinfo === '/post/search') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_blog_blog_search;
                }

                return array (  '_controller' => 'Blog\\BlogBundle\\Controller\\DefaultController::searchAction',  '_route' => 'blog_blog_search',);
            }
            not_blog_blog_search:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
