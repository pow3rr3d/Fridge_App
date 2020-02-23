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

/* user/product/index.html.twig */
class __TwigTemplate_a08845c65095d12fd19b9fd2b5a2ec1f0368f60b389802877c418fdc4bda69d3 extends Template
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
        return "user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/product/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/product/index.html.twig"));

        $this->parent = $this->loadTemplate("user.html.twig", "user/product/index.html.twig", 1);
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
        echo "    Product
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
        echo "
    <div class=\"text-center\">
        <h1>Welcome</h1>
    </div>
    <div class=\"text-right\">
        <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userProduct_new");
        echo "\" class=\"btn btn-primary\">New Product</a>
    </div>
    <br>
    <div class=\"jumbotron\">
        <div class=\"form-row\">
            <div class=\"col\">
                <input type=\"text\" id=\"search\" placeholder=\"Searching for....\" class=\"form-control\">
            </div>
        </div>
    </div>
    <br>
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            echo "        <div class=\"div alert alert-success\">
            ";
            // line 26
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>Product Name</th>
            <th>Stock Réel</th>
            <th>Stock Optimal</th>
            <th>Actions</th>

        </tr>
        </thead>
        <tbody>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 41
            echo "            <tr>
                <td>
                    ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "stockReel", [], "any", false, false, false, 46), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "stockOpti", [], "any", false, false, false, 49), "html", null, true);
            echo "
                </td>
                <td>
                    <a href=\"/user/product/edit/";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo "\" class=\"btn btn-secondary\"> Edit </a>
                    <form method=\"post\" action=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.product.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\"
                          style=\"display: inline-block\">
                        <input type=\"hidden\" name=\"_method\" value=\"update\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 56))), "html", null, true);
            echo "\">
                        <button class=\"btn btn-danger\">Delete</button>
                    </form>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </tbody>
    </table>
    <br>
    <div class=\"row justify-content-end\">
        <div class=\"pagination\">
            ";
        // line 67
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 67, $this->source); })()));
        echo "
        </div>
    </div>
    ";
        // line 70
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 71
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("search");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 71,  201 => 70,  195 => 67,  188 => 62,  176 => 56,  170 => 53,  166 => 52,  160 => 49,  154 => 46,  148 => 43,  144 => 41,  140 => 40,  127 => 29,  118 => 26,  115 => 25,  111 => 24,  97 => 13,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user.html.twig' %}

{% block title %}
    Product
{% endblock %}

{% block body %}

    <div class=\"text-center\">
        <h1>Welcome</h1>
    </div>
    <div class=\"text-right\">
        <a href=\"{{ path('userProduct_new') }}\" class=\"btn btn-primary\">New Product</a>
    </div>
    <br>
    <div class=\"jumbotron\">
        <div class=\"form-row\">
            <div class=\"col\">
                <input type=\"text\" id=\"search\" placeholder=\"Searching for....\" class=\"form-control\">
            </div>
        </div>
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
            <th>Product Name</th>
            <th>Stock Réel</th>
            <th>Stock Optimal</th>
            <th>Actions</th>

        </tr>
        </thead>
        <tbody>
        {% for product in products %}
            <tr>
                <td>
                    {{ product.product.name }}
                </td>
                <td>
                    {{ product.stockReel }}
                </td>
                <td>
                    {{ product.stockOpti }}
                </td>
                <td>
                    <a href=\"/user/product/edit/{{ product.id }}\" class=\"btn btn-secondary\"> Edit </a>
                    <form method=\"post\" action=\"{{ path(\"user.product.delete\", {id: product.id}) }}\"
                          style=\"display: inline-block\">
                        <input type=\"hidden\" name=\"_method\" value=\"update\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ product.id) }}\">
                        <button class=\"btn btn-danger\">Delete</button>
                    </form>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <br>
    <div class=\"row justify-content-end\">
        <div class=\"pagination\">
            {{ knp_pagination_render(products) }}
        </div>
    </div>
    {{ parent() }}
    {{ encore_entry_script_tags('search') }}
{% endblock %}", "user/product/index.html.twig", "/var/www/html/Fridge_App/templates/user/product/index.html.twig");
    }
}
