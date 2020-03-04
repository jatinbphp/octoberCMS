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

/* /var/www/html/octoberCMS/install-master/themes/zanor-mdbv4/partials/site/footer.htm */
class __TwigTemplate_37c71c4643e913b8bf37c2586882a0d74a06956bac7a4af381dd0816d51fe93c extends \Twig\Template
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
        echo "<!-- <script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/jquery-3.1.1.min.js", 1 => "assets/js/popper.min.js", 2 => "assets/js/bootstrap.min.js", 3 => "assets/js/mdb.min.js"]);
        // line 6
        echo "\"></script> -->

    <script type=\"text/javascript\" src=\"";
        // line 8
        echo asset("/themes/zanor-mdbv4/assets/js/jquery-3.1.1.min.js");
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 10
        echo asset("/themes/zanor-mdbv4/assets/js/popper.min.js");
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 12
        echo asset("/themes/zanor-mdbv4/assets/js/bootstrap.min.js");
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 14
        echo asset("/themes/zanor-mdbv4/assets/js/mdb.min.js");
        echo "\"></script>

    <!-- ";
        // line 16
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 17
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        echo " -->

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octoberCMS/install-master/themes/zanor-mdbv4/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 17,  64 => 16,  59 => 14,  54 => 12,  49 => 10,  44 => 8,  40 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- <script src=\"{{ [
        'assets/js/jquery-3.1.1.min.js',
        'assets/js/popper.min.js',
        'assets/js/bootstrap.min.js',
        'assets/js/mdb.min.js'
    ]|theme }}\"></script> -->

    <script type=\"text/javascript\" src=\"{{ asset('/themes/zanor-mdbv4/assets/js/jquery-3.1.1.min.js') }}\"></script>

    <script type=\"text/javascript\" src=\"{{ asset('/themes/zanor-mdbv4/assets/js/popper.min.js') }}\"></script>

    <script type=\"text/javascript\" src=\"{{ asset('/themes/zanor-mdbv4/assets/js/bootstrap.min.js') }}\"></script>

    <script type=\"text/javascript\" src=\"{{ asset('/themes/zanor-mdbv4/assets/js/mdb.min.js') }}\"></script>

    <!-- {% framework extras %}
    {% scripts %} -->

</body>
</html>", "/var/www/html/octoberCMS/install-master/themes/zanor-mdbv4/partials/site/footer.htm", "");
    }
}
