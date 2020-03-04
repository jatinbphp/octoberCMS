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

/* /var/www/html/octoberCMS/install-master/themes/zanor-mdbv4/partials/site/head.htm */
class __TwigTemplate_8e51abd918f8cd4a37b05ad6a0b83963a077cbba6c45ec52633a338a94152ee3 extends \Twig\Template
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
        echo "<html lang=\"en\">
<head>  
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    
    <title>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</title>

    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css\">
        
    <!-- <link href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/bootstrap.min.css", 1 => "assets/css/mdb.min.css", 2 => "assets/css/style.css"]);
        // line 16
        echo "\" rel=\"stylesheet\"> -->

    <link href=\"";
        // line 18
        echo asset("/themes/zanor-mdbv4/assets/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo asset("/themes/zanor-mdbv4/assets/css/mdb.min.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo asset("/themes/zanor-mdbv4/assets/css/style.css");
        echo "\" rel=\"stylesheet\">
    
    <!-- ";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        echo " -->
</head>
<body>
    ";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/octoberCMS/install-master/themes/zanor-mdbv4/partials/site/head.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 25,  72 => 22,  67 => 20,  63 => 19,  59 => 18,  55 => 16,  53 => 12,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\">
<head>  
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    
    <title>{{ this.page.title }}</title>

    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css\">
        
    <!-- <link href=\"{{ [
        'assets/css/bootstrap.min.css',
        'assets/css/mdb.min.css',
        'assets/css/style.css',
    ]|theme }}\" rel=\"stylesheet\"> -->

    <link href=\"{{ asset('/themes/zanor-mdbv4/assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('/themes/zanor-mdbv4/assets/css/mdb.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('/themes/zanor-mdbv4/assets/css/style.css') }}\" rel=\"stylesheet\">
    
    <!-- {% styles %} -->
</head>
<body>
    {% partial 'site/nav' %}", "/var/www/html/octoberCMS/install-master/themes/zanor-mdbv4/partials/site/head.htm", "");
    }
}
