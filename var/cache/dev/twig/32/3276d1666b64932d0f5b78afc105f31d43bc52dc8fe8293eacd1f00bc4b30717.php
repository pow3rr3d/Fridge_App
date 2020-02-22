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

/* admin/user/edit.html.twig */
class __TwigTemplate_62f044ae79e1513edfb38e61705e97559f38c45b504bca18344f28cf53a3c9ff extends Template
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
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/edit.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "admin/user/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Edit User";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"text-center\">
    <h1>Edit User</h1>
    <div class=\"mt-4\">
        <div class=\"text-right\">
            <div class=\"d-inline-block \">
                <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "\" class=\"btn btn-primary\">Back to list</a>
            </div>
            <div class=\"d-inline-block \">
                ";
        // line 15
        echo twig_include($this->env, $context, "admin/user/_delete_form.html.twig");
        echo "
            </div>
            <div class=\"d-inline-block \">
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "role", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 19
            echo "                ";
            if (($context["r"] === "ROLE_USER")) {
                // line 20
                echo "                <form method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_admin", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
                echo "\" onsubmit=\"return confirm('Are you sure you want to put this user Admin?');\">
                    <input name=\"inputAdmin\" type=\"hidden\" value=\"";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
                echo "\">
                    <input name=\"submitAdmin\" type=\"submit\" value=\"PutAdmin\" class=\"btn btn-danger\">
                </form>
                ";
            }
            // line 25
            echo "                    ";
            if (($context["r"] === "ROLE_ADMIN")) {
                // line 26
                echo "                    <form method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_admin", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
                echo "\" onsubmit=\"return confirm('Are you sure you want to put this user as User?');\">
                        <input name=\"inputAdmin\" type=\"hidden\" value=\"";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27), "html", null, true);
                echo "\">
                        <input name=\"submitAdmin\" type=\"submit\" value=\"PutUser\" class=\"btn btn-danger\">
                    </form>
                    ";
            }
            // line 31
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </div>
        </div>
        <br>
        <div class=\"text-left\">
            ";
        // line 36
        echo twig_include($this->env, $context, "admin/user/_form.html.twig", ["button_label" => "Update"]);
        echo "

        </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 36,  148 => 32,  142 => 31,  135 => 27,  130 => 26,  127 => 25,  120 => 21,  115 => 20,  112 => 19,  108 => 18,  102 => 15,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}Edit User{% endblock %}

{% block body %}

<div class=\"text-center\">
    <h1>Edit User</h1>
    <div class=\"mt-4\">
        <div class=\"text-right\">
            <div class=\"d-inline-block \">
                <a href=\"{{ path('user_index') }}\" class=\"btn btn-primary\">Back to list</a>
            </div>
            <div class=\"d-inline-block \">
                {{ include('admin/user/_delete_form.html.twig') }}
            </div>
            <div class=\"d-inline-block \">
                {% for r in user.role %}
                {%  if r is same as (\"ROLE_USER\") %}
                <form method=\"post\" action=\"{{ path('user_admin', {'id': user.id})}}\" onsubmit=\"return confirm('Are you sure you want to put this user Admin?');\">
                    <input name=\"inputAdmin\" type=\"hidden\" value=\"{{ user.id }}\">
                    <input name=\"submitAdmin\" type=\"submit\" value=\"PutAdmin\" class=\"btn btn-danger\">
                </form>
                {%  endif %}
                    {%  if r is same as (\"ROLE_ADMIN\") %}
                    <form method=\"post\" action=\"{{ path('user_admin', {'id': user.id})}}\" onsubmit=\"return confirm('Are you sure you want to put this user as User?');\">
                        <input name=\"inputAdmin\" type=\"hidden\" value=\"{{ user.id }}\">
                        <input name=\"submitAdmin\" type=\"submit\" value=\"PutUser\" class=\"btn btn-danger\">
                    </form>
                    {%  endif %}
                {% endfor %}
            </div>
        </div>
        <br>
        <div class=\"text-left\">
            {{ include('admin/user/_form.html.twig', {'button_label': 'Update'}) }}

        </div>
        {% endblock %}
", "admin/user/edit.html.twig", "/var/www/html/Fridge_App/templates/admin/user/edit.html.twig");
    }
}
