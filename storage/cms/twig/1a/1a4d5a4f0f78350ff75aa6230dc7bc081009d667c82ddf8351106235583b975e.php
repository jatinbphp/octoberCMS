<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /var/www/html/octoberCMS/install-master/themes/zanor-mdbv4/partials/site/nav.htm */
class __TwigTemplate_e66a4b8e1b5278dad8694800159330ec5be38dfa910805dcca269518619431e7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!--Navbar-->
<nav class=\"navbar navbar-expand-lg navbar-dark indigo\">

    <!-- Navbar brand -->
    <a class=\"navbar-brand\" href=\"#\">Navbar</a>

    <!-- Collapse button -->
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
        aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>

    <!-- Collapsible content -->
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

        <!-- Links -->
        <ul class=\"navbar-nav mr-auto\">
            ";
        // line 16
        if (($context["user"] ?? null)) {
            // line 17
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/logout\">Log out</a>
                </li>
            ";
        } else {
            // line 21
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/register\">Register</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/login\">Login</span></a>
                </li>
            ";
        }
        // line 28
        echo "        </ul>
        <!-- Links -->

        <!-- Search form -->
        <!-- <form class=\"form-inline\">
            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
        </form> -->
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octoberCMS/install-master/themes/zanor-mdbv4/partials/site/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 28,  62 => 21,  56 => 17,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--Navbar-->
<nav class=\"navbar navbar-expand-lg navbar-dark indigo\">

    <!-- Navbar brand -->
    <a class=\"navbar-brand\" href=\"#\">Navbar</a>

    <!-- Collapse button -->
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
        aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>

    <!-- Collapsible content -->
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

        <!-- Links -->
        <ul class=\"navbar-nav mr-auto\">
            {% if user %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/logout\">Log out</a>
                </li>
            {% else %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/register\">Register</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/login\">Login</span></a>
                </li>
            {% endif %}
        </ul>
        <!-- Links -->

        <!-- Search form -->
        <!-- <form class=\"form-inline\">
            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
        </form> -->
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->", "/var/www/html/octoberCMS/install-master/themes/zanor-mdbv4/partials/site/nav.htm", "");
    }
}
