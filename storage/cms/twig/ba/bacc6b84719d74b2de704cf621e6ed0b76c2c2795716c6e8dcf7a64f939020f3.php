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

/* /var/www/html/octoberCMS/install-master/themes/zanor-mdbv4/pages/dashboard.htm */
class __TwigTemplate_82885d5fbf0c409f7ec5f2190967b23861ae3c3feeb6454d96999e829409851b extends \Twig\Template
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
        echo "<div class=\"row center\">
    <div class=\"col-6\">
        <form data-request=\"onHandleForm\" class=\"questionform borderbelow\">
          <fieldset>
            <div id=\"legend\">
              <legend class=\"\">Register</legend>
            </div>
            <div class=\"control-group\">
              <!-- Username -->
              <label class=\"control-label\"  for=\"username\">First Name</label>
              <div class=\"controls\">
                <input name=\"first_name\" type=\"text\" placeholder=\"Enter your first name\" required=\"required\" value=\"\">
              </div>
            </div>

            <div class=\"control-group\">
              <label class=\"control-label\"  for=\"username\">Last Name</label>
              <div class=\"controls\">
                <input name=\"last_name\" type=\"text\" placeholder=\"Enter your Last name\" required=\"required\">
              </div>
            </div>

            <div class=\"control-group\">
              <label class=\"control-label\"  for=\"username\">Address</label>
              <div class=\"controls\">
                <textarea name=\"address\" id=\"address\" required=\"required\">
                    
                </textarea>
              </div>
            </div>

            <div class=\"control-group\">
              <label class=\"control-label\"  for=\"username\">City</label>
              <div class=\"controls\">
                <input name=\"city\" type=\"text\" placeholder=\"Enter your city\" required=\"required\">
              </div>
            </div>

            <div class=\"control-group\">
              <label class=\"control-label\"  for=\"username\">Country</label>
              <div class=\"controls\">
                <input name=\"country\" type=\"text\" placeholder=\"Enter your Country\" required=\"required\">
              </div>
            </div>

            <!-- <div class=\"control-group\">
              <label class=\"control-label\"  for=\"username\">Password</label>
              <div class=\"controls\">
                <input name=\"password\" id=\"password\" type=\"password\" required=\"required\">
              </div>
            </div>

            <div class=\"control-group\">
              <label class=\"control-label\"  for=\"username\">Confirm Password</label>
              <div class=\"controls\">
                <input name=\"password_confirm\" id=\"password_confirm\" type=\"password\" required=\"required\">
              </div>
            </div> -->

            <div class=\"control-group\">
              <label class=\"control-label\"  for=\"username\">Birth Date</label>
              <div class=\"controls\">
                <input name=\"bith_date\" type=\"text\" placeholder=\"Enter your Birth Date\" required=\"required\">
              </div>
            </div>
         
            <div class=\"control-group\">
              <div class=\"controls\">
                <button class=\"btn btn-success\" type=\"submit\">Update</button>
              </div>
            </div>
          </fieldset>
        </form>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octoberCMS/install-master/themes/zanor-mdbv4/pages/dashboard.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row center\">
    <div class=\"col-6\">
        <form data-request=\"onHandleForm\" class=\"questionform borderbelow\">
          <fieldset>
            <div id=\"legend\">
              <legend class=\"\">Register</legend>
            </div>
            <div class=\"control-group\">
              <!-- Username -->
              <label class=\"control-label\"  for=\"username\">First Name</label>
              <div class=\"controls\">
                <input name=\"first_name\" type=\"text\" placeholder=\"Enter your first name\" required=\"required\" value=\"\">
              </div>
            </div>

            <div class=\"control-group\">
              <label class=\"control-label\"  for=\"username\">Last Name</label>
              <div class=\"controls\">
                <input name=\"last_name\" type=\"text\" placeholder=\"Enter your Last name\" required=\"required\">
              </div>
            </div>

            <div class=\"control-group\">
              <label class=\"control-label\"  for=\"username\">Address</label>
              <div class=\"controls\">
                <textarea name=\"address\" id=\"address\" required=\"required\">
                    
                </textarea>
              </div>
            </div>

            <div class=\"control-group\">
              <label class=\"control-label\"  for=\"username\">City</label>
              <div class=\"controls\">
                <input name=\"city\" type=\"text\" placeholder=\"Enter your city\" required=\"required\">
              </div>
            </div>

            <div class=\"control-group\">
              <label class=\"control-label\"  for=\"username\">Country</label>
              <div class=\"controls\">
                <input name=\"country\" type=\"text\" placeholder=\"Enter your Country\" required=\"required\">
              </div>
            </div>

            <!-- <div class=\"control-group\">
              <label class=\"control-label\"  for=\"username\">Password</label>
              <div class=\"controls\">
                <input name=\"password\" id=\"password\" type=\"password\" required=\"required\">
              </div>
            </div>

            <div class=\"control-group\">
              <label class=\"control-label\"  for=\"username\">Confirm Password</label>
              <div class=\"controls\">
                <input name=\"password_confirm\" id=\"password_confirm\" type=\"password\" required=\"required\">
              </div>
            </div> -->

            <div class=\"control-group\">
              <label class=\"control-label\"  for=\"username\">Birth Date</label>
              <div class=\"controls\">
                <input name=\"bith_date\" type=\"text\" placeholder=\"Enter your Birth Date\" required=\"required\">
              </div>
            </div>
         
            <div class=\"control-group\">
              <div class=\"controls\">
                <button class=\"btn btn-success\" type=\"submit\">Update</button>
              </div>
            </div>
          </fieldset>
        </form>
    </div>
</div>", "/var/www/html/octoberCMS/install-master/themes/zanor-mdbv4/pages/dashboard.htm", "");
    }
}
