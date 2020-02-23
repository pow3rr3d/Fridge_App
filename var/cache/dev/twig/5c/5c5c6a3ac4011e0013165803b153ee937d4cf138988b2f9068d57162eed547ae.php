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

/* admin/product/index.html.twig */
class __TwigTemplate_eeb5a911716053c372d0bbe0f11394c73ae5b2b390b88198c6b94a14bf0742a3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/index.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "admin/product/index.html.twig", 1);
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

        // line 4
        echo "    Product List
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"text-center\">
        <h1> Product list </h1>
        <div class=\"mt-4\">
            <div class=\"text-right\">
                <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.product.new");
        echo "\" class=\"btn btn-primary\"> Create Product</a>
            </div>
            <br>
            <div class=\"jumbotron\">
                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
                <div class=\"form-row\">
                    <div class=\"col\">
                        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), 'row');
        echo "
                    </div>
                    <div class=\"col\">
                        <button class=\"btn btn-primary\">Search</button>
                    </div>
                </div>
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_end');
        echo "
            </div>
            <br>
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 29
            echo "                <div class=\"div alert alert-success\">
                    ";
            // line 30
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th> Product</th>
                    <th> Description</th>
                    <th> Category</th>
                    <th> Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 44
            echo "                    <tr>
                        <td>
                            ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 46), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 49), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 52
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "getCategory", [], "method", false, true, false, 52), "getName", [], "method", true, true, false, 52)) {
                // line 53
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "getCategory", [], "method", false, false, false, 53), "getName", [], "method", false, false, false, 53), "html", null, true);
                echo "
                            ";
            }
            // line 55
            echo "                        </td>
                        <td>
                            <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.product.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">
                                Editer</a>
                            <button type=\"button\" name=\"btn\" value=\"Submit\" id=\"submitBtn\" data-toggle=\"modal\" data-target=\"#confirm-submit";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 59), "html", null, true);
            echo "\" class=\"btn btn-danger\">
                                Delete
                                <input class=\"button\" type=\"hidden\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 61), "html", null, true);
            echo "\" name=\"id\"/>
                            </button>
                        </td>
                    </tr>
                <div class=\"modal fade\" id=\"confirm-submit";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                Confirm Submit
                            </div>
                            <div class=\"modal-body\">
                                <p class=\"text-left \">Are you sure you want to delete the following product?</p>
                                <p class=\"text-left\">Name:</p>
                                <p class=\"text-left font-weight-bold\">";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 74), "html", null, true);
            echo "</p>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                                <form method=\"post\" action=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.product.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\"
                                      style=\"display: inline-block\">
                                    <input type=\"hidden\" name=\"_method\" value=\"update\">
                                    <input type=\"hidden\" name=\"_token\" data-toggle=\"modal\" data-target=\"#confirm-submit";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 81), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 81))), "html", null, true);
            echo "\">
                                    <button class=\"btn btn-danger\">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                </tbody>
            </table>
        </div>
        <br>
        <div class=\"row justify-content-end\">
            <div class=\"pagination\">
                ";
        // line 94
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 94, $this->source); })()));
        echo "
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 94,  241 => 88,  226 => 81,  220 => 78,  213 => 74,  201 => 65,  194 => 61,  189 => 59,  184 => 57,  180 => 55,  174 => 53,  172 => 52,  166 => 49,  160 => 46,  156 => 44,  152 => 43,  140 => 33,  131 => 30,  128 => 29,  124 => 28,  118 => 25,  109 => 19,  103 => 16,  96 => 12,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}
    Product List
{% endblock %}

{% block body %}
    <div class=\"text-center\">
        <h1> Product list </h1>
        <div class=\"mt-4\">
            <div class=\"text-right\">
                <a href=\"{{ path('admin.product.new') }}\" class=\"btn btn-primary\"> Create Product</a>
            </div>
            <br>
            <div class=\"jumbotron\">
                {{ form_start(form) }}
                <div class=\"form-row\">
                    <div class=\"col\">
                        {{ form_row(form.name) }}
                    </div>
                    <div class=\"col\">
                        <button class=\"btn btn-primary\">Search</button>
                    </div>
                </div>
                {{ form_end(form) }}
            </div>
            <br>
            {% for message in app.flashes('success') %}
                <div class=\"div alert alert-success\">
                    {{ message }}
                </div>
            {% endfor %}
            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th> Product</th>
                    <th> Description</th>
                    <th> Category</th>
                    <th> Actions</th>
                </tr>
                </thead>
                <tbody>
                {% for product in products %}
                    <tr>
                        <td>
                            {{ product.name }}
                        </td>
                        <td>
                            {{ product.description }}
                        </td>
                        <td>
                            {% if product.getCategory().getName() is defined %}
                            {{ product.getCategory().getName() }}
                            {% endif %}
                        </td>
                        <td>
                            <a href=\"{{ path('admin.product.edit', {id: product.id }) }}\" class=\"btn btn-secondary\">
                                Editer</a>
                            <button type=\"button\" name=\"btn\" value=\"Submit\" id=\"submitBtn\" data-toggle=\"modal\" data-target=\"#confirm-submit{{product.id}}\" class=\"btn btn-danger\">
                                Delete
                                <input class=\"button\" type=\"hidden\" value=\"{{product.id}}\" name=\"id\"/>
                            </button>
                        </td>
                    </tr>
                <div class=\"modal fade\" id=\"confirm-submit{{product.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                Confirm Submit
                            </div>
                            <div class=\"modal-body\">
                                <p class=\"text-left \">Are you sure you want to delete the following product?</p>
                                <p class=\"text-left\">Name:</p>
                                <p class=\"text-left font-weight-bold\">{{product.name}}</p>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                                <form method=\"post\" action=\"{{ path(\"admin.product.delete\", {id: product.id}) }}\"
                                      style=\"display: inline-block\">
                                    <input type=\"hidden\" name=\"_method\" value=\"update\">
                                    <input type=\"hidden\" name=\"_token\" data-toggle=\"modal\" data-target=\"#confirm-submit{{product.id}}\" value=\"{{ csrf_token('delete' ~ product.id) }}\">
                                    <button class=\"btn btn-danger\">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                {% endfor %}
                </tbody>
            </table>
        </div>
        <br>
        <div class=\"row justify-content-end\">
            <div class=\"pagination\">
                {{ knp_pagination_render(products) }}
            </div>
        </div>
    </div>

{% endblock %}", "admin/product/index.html.twig", "/var/www/html/Fridge_App/templates/admin/product/index.html.twig");
    }
}
