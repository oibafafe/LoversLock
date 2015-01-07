<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

        if (0 === strpos($pathinfo, '/log')) {
            // _security_check
            if ($pathinfo === '/login_check') {
                return array('_route' => '_security_check');
            }

            // _security_logout
            if ($pathinfo === '/logout') {
                return array('_route' => '_security_logout');
            }

        }

        // fos_facebook_channel
        if ($pathinfo === '/channel.html') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_facebook_channel;
            }

            return array (  '_controller' => 'FOS\\FacebookBundle\\Controller\\FacebookController::channelAction',  '_route' => 'fos_facebook_channel',);
        }
        not_fos_facebook_channel:

        // _facebook_secured
        if (rtrim($pathinfo, '/') === '/secured') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_facebook_secured');
            }

            return array (  '_controller' => 'LoversLock\\UtilisateurBundle\\Controller\\DefaultController::indexAction',  '_route' => '_facebook_secured',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
