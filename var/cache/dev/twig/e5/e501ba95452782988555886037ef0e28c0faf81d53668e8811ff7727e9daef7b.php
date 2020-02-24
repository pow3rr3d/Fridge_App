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

/* user/conso/index.html.twig */
class __TwigTemplate_171b80bda9e4de777d33dacefa111a3ed9fcb00022e971e97c178dd229e644d6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/conso/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/conso/index.html.twig"));

        $this->parent = $this->loadTemplate("user.html.twig", "user/conso/index.html.twig", 1);
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
        <h1>Conso</h1>
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
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
            echo "        <div class=\"div alert alert-success\">
            ";
            // line 23
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    <div class=\"row justify-content-around\">
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 28
            echo "            <div class=\"card mt-5\" style=\"width: 18rem;\">
                ";
            // line 29
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 29), "filename", [], "any", false, false, false, 29)) {
                // line 30
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["product"], "imageFile"), "card"), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"\">
                ";
            } else {
                // line 32
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("/images/products/empty.jpg", "card"), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"\">
                ";
            }
            // line 34
            echo "                <div class=\"card-body\">
                    <h3 class=\"card-title\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
            echo "</h3>
                    <p class=\"card-text\">Stock Réel: ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "stockReel", [], "any", false, false, false, 36), "html", null, true);
            echo "</p>
                    <p class=\"card-text\">Stock Opti: ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "stockOpti", [], "any", false, false, false, 37), "html", null, true);
            echo "</p>
                    <form method=\"post\" action=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.conso.update", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" class=\"form-group\">
                        <div class=\"d-inline-flex p-2\">
                            <input type=\"hidden\" name=\"_method\" value=\"update\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 41))), "html", null, true);
            echo "\">
                            <input name=\"nb\" type=\"number\" min=\"0\"/>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fas fa-minus\"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </div>
    <br>
    ";
        // line 53
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/conso/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 53,  182 => 51,  166 => 41,  160 => 38,  156 => 37,  152 => 36,  148 => 35,  145 => 34,  139 => 32,  133 => 30,  131 => 29,  128 => 28,  124 => 27,  121 => 26,  112 => 23,  109 => 22,  105 => 21,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user.html.twig' %}

{% block title %}
    Product
{% endblock %}

{% block body %}

    <div class=\"text-center\">
        <h1>Conso</h1>
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
    <div class=\"row justify-content-around\">
        {% for product in products %}
            <div class=\"card mt-5\" style=\"width: 18rem;\">
                {% if product.product.filename %}
                    <img src=\"{{ vich_uploader_asset(product, \"imageFile\") | imagine_filter('card') }}\" class=\"card-img-top\" alt=\"\">
                {% else %}
                    <img src=\"{{ \"/images/products/empty.jpg\" | imagine_filter('card') }}\" class=\"card-img-top\" alt=\"\">
                {%  endif %}
                <div class=\"card-body\">
                    <h3 class=\"card-title\">{{ product.product.name }}</h3>
                    <p class=\"card-text\">Stock Réel: {{ product.stockReel }}</p>
                    <p class=\"card-text\">Stock Opti: {{ product.stockOpti }}</p>
                    <form method=\"post\" action=\"{{ path(\"user.conso.update\", {id: product.id})}}\" class=\"form-group\">
                        <div class=\"d-inline-flex p-2\">
                            <input type=\"hidden\" name=\"_method\" value=\"update\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ product.id) }}\">
                            <input name=\"nb\" type=\"number\" min=\"0\"/>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fas fa-minus\"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        {% endfor %}
    </div>
    <br>
    {{ parent() }}
    {#    {{ encore_entry_script_tags('searchCard') }}#}
{% endblock %}", "user/conso/index.html.twig", "/var/www/html/Fridge_App/templates/user/conso/index.html.twig");
    }
}
