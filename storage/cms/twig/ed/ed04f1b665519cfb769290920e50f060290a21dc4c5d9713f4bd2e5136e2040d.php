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

/* /var/www/html/octoberCMS/install-master/themes/zanor-mdbv4/pages/login.htm */
class __TwigTemplate_9b90a8d4f9e3a87db8ee96e84ebe3fd8003023cb734a8b595669e6f38e901cf1 extends \Twig\Template
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
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 1
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 2
                echo "    <div class=\"alert alert-";
                (((($context["type"] ?? null) == "error")) ? (print ("danger")) : (print (twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true))));
                echo "\">";
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "</div>
";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 4
        echo "<div class=\"row center\">
\t<div class=\"col-6\">
\t\t<form data-request=\"onHandleForm\" class=\"questionform borderbelow\">
\t\t  <fieldset>
\t\t    <div id=\"legend\">
\t\t      <legend class=\"\">Login</legend>
\t\t    </div>
\t\t    \t\t 
\t\t    <div class=\"control-group\">
\t\t      <!-- E-mail -->
\t\t      <label class=\"control-label\" for=\"email\">E-mail</label>
\t\t      <div class=\"controls\">
\t\t        <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"\" class=\"input-xlarge\" required=\"required\">
\t\t      </div>
\t\t    </div>

\t\t    <div class=\"control-group\">
\t\t      <!-- E-mail -->
\t\t      <label class=\"control-label\" for=\"email\">Password</label>
\t\t      <div class=\"controls\">
\t\t        <input type=\"password\" id=\"password\" name=\"password\" class=\"input-xlarge\" required=\"required\">
\t\t      </div>
\t\t    </div>
\t\t 
\t\t    <div class=\"control-group\">
\t\t      <!-- Button -->
\t\t      <div class=\"controls\">
\t\t        <button class=\"btn btn-success\" type=\"submit\">Login</button>
\t\t      </div>
\t\t    </div>
\t\t  </fieldset>
\t\t</form>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octoberCMS/install-master/themes/zanor-mdbv4/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% flash %}
    <div class=\"alert alert-{{ type == 'error' ? 'danger' : type }}\">{{ message }}</div>
{% endflash %}
<div class=\"row center\">
\t<div class=\"col-6\">
\t\t<form data-request=\"onHandleForm\" class=\"questionform borderbelow\">
\t\t  <fieldset>
\t\t    <div id=\"legend\">
\t\t      <legend class=\"\">Login</legend>
\t\t    </div>
\t\t    \t\t 
\t\t    <div class=\"control-group\">
\t\t      <!-- E-mail -->
\t\t      <label class=\"control-label\" for=\"email\">E-mail</label>
\t\t      <div class=\"controls\">
\t\t        <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"\" class=\"input-xlarge\" required=\"required\">
\t\t      </div>
\t\t    </div>

\t\t    <div class=\"control-group\">
\t\t      <!-- E-mail -->
\t\t      <label class=\"control-label\" for=\"email\">Password</label>
\t\t      <div class=\"controls\">
\t\t        <input type=\"password\" id=\"password\" name=\"password\" class=\"input-xlarge\" required=\"required\">
\t\t      </div>
\t\t    </div>
\t\t 
\t\t    <div class=\"control-group\">
\t\t      <!-- Button -->
\t\t      <div class=\"controls\">
\t\t        <button class=\"btn btn-success\" type=\"submit\">Login</button>
\t\t      </div>
\t\t    </div>
\t\t  </fieldset>
\t\t</form>
\t</div>
</div>", "/var/www/html/octoberCMS/install-master/themes/zanor-mdbv4/pages/login.htm", "");
    }
}
