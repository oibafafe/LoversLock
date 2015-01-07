<?php

/* LoversLockUtilisateurBundle:Default:index.html.twig */
class __TwigTemplate_e8e36acd410c182ddab2d3dd69ccc2ccb30036b81837520b25d5cc1951d77ff3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "    <div id=\"fb-root\"></div>
    <script>
        window.fbAsyncInit = function() {
            // init the FB JS SDK
            FB.init({
                appId      : '414349855386025',                        // App ID from the app dashboard
                channelUrl : '//yourdomain.com/channel.html',      // Channel file for x-domain comms
                status     : true,                                 // Check Facebook Login status
                xfbml      : true                                  // Look for social plugins on the page
            });
        };

        // Load the SDK asynchronously
        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = \"//connect.facebook.net/fr_FR/all.js\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        function fb_login() {
            FB.getLoginStatus(function(response) {
                if (response.status === 'connected') {
                    // connected
                    alert('Already connected, redirect to login page to create token.');
                    document.location = \"";
        // line 28
        echo $this->env->getExtension('routing')->getUrl("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "\";
                } else {
                    // not_authorized
                    FB.login(function(response) {
                        if (response.authResponse) {
                            document.location = \"";
        // line 33
        echo $this->env->getExtension('routing')->getUrl("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "\";
                        } else {
                            alert('Cancelled.');
                        }
                    }, {scope: 'email'});
                }
            });
        }
    </script>

    <p>
        <a href=\"#\" onclick=\"fb_login();\">Facebook Connect Button (Dialog)</a>
    </p>

    ";
        // line 48
        echo "    ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("HWIOAuthBundle:Connect:connect"), array());
    }

    public function getTemplateName()
    {
        return "LoversLockUtilisateurBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 48,  62 => 33,  54 => 28,  26 => 2,  20 => 1,);
    }
}
