<?php

/* LoversLockUtilisateurBundle:Default:login.html.twig */
class __TwigTemplate_cbdf23159e9fd94d2e08a1d9bea0d9f3d99fe581682cab9366a843d3e671fe09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LoversLock/js/facebook-sdk.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<body>
<fb:login-button scope=\"public_profile,email\" onlogin=\"checkLoginState();\">
</fb:login-button>

<div id=\"status\">
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "LoversLockUtilisateurBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
