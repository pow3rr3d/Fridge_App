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

/* Pages/home.html.twig */
class __TwigTemplate_6d299dcc9cf442400b87913f16b889f990b307ca262f49c5d20b3e186a91320c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "Pages/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    Fridge App : Connection
";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <div class=\"text-center\">
        <h1>Fridge App</h1>
        <br>
        <div class=\"row h-100\">
            <div class=\"col-md-12 my-auto\">
                <form class=\"form-signin\">
                    <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
                    <label for=\"inputEmail\" class=\"sr-only\">Email address</label>
                    <input type=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required
                           autofocus><br>
                    <label for=\"inputPassword\" class=\"sr-only\">Password</label>
                    <input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required><br>
                    <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
                </form>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Pages/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Pages/home.html.twig", "/var/www/html/Fridge_App/templates/Pages/home.html.twig");
    }
}
