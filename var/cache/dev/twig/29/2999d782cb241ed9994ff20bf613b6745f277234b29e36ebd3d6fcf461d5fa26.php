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

/* user/dashboard/index.html.twig */
class __TwigTemplate_1944396e50e597ea272066ad01ca5c92b6dd28ac0d54bfbefda6b4784ca887e4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("user.html.twig", "user/dashboard/index.html.twig", 1);
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
        echo "    Dashboard
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
        <h1><b>Welcome ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "</b></h1>
    </div>
    <div class=\"row justify-content-around\">
        <div class=\"col\">
            <div class=\"text-left mt-5\">
                <h2>
                    Memo
                </h2>
            </div>
            <br>
            <input id=\"userId\" type=\"hidden\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
           <div class=\"form-control h-75\" contenteditable=\"true\" id=\"memo\">
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["memo"]) || array_key_exists("memo", $context) ? $context["memo"] : (function () { throw new RuntimeError('Variable "memo" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["memos"]) {
            // line 22
            echo "                   ";
            echo twig_get_attribute($this->env, $this->source, $context["memos"], "memo", [], "any", false, false, false, 22);
            echo "
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['memos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "               <br>
           </div>
        </div>

        <div class=\"border-left my-3 mt-5 mr-5\"></div>

        <div class=\"col-4 mr-4\">
            <div class=\"text-left mt-5\">
                <h2>
                    List
                </h2>
            </div>
            <br>
            <table class=\"table table-hover\">
                <thead class=\"thead-dark\">
                <tr>
                    <th>
                        Product
                    </th>
                </tr>
                </thead>
                <tbody>

                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 48
            echo "                    ";
            if (1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["product"], "qt2Buy", [], "any", false, false, false, 48), 0)) {
                // line 49
                echo "                        <tr>
                            <td>
                                ";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51), "html", null, true);
                echo "
                            </td>
                        </tr>
                    ";
            }
            // line 55
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                </tbody>
            </table>
            <br>
            <div class=\"row justify-content-end\">
                <div class=\"pagination\">
                    ";
        // line 61
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 61, $this->source); })()));
        echo "
                </div>
            </div>
        </div>
    </div>


    <div class=\"border-top my-3 mt-5\"></div>

    <div class=\"text-left\">
        <h2>
            News
        </h2>
    </div>
    <br>
    ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contents"]) || array_key_exists("contents", $context) ? $context["contents"] : (function () { throw new RuntimeError('Variable "contents" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 77
            echo "        ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["content"], "isActive", [], "any", false, false, false, 77), true)) {
                // line 78
                echo "            <div class=\"card mb-5\">
                <div class=\"card-header\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <b>
                                ";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "name", [], "any", false, false, false, 83), "html", null, true);
                echo "
                            </b>
                        </div>
                        <div class=\"col text-right\">
                            ";
                // line 87
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["content"], "createdAt", [], "any", false, false, false, 87), "date", [], "any", false, false, false, 87)), "html", null, true);
                echo "
                        </div>
                    </div>

                </div>
                <div class=\"ml-4 mr-4 text-justify\">
                    <p class=\"card-text \">";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["content"], "content", [], "any", false, false, false, 93);
                echo "</p>
                </div>
            </div>
        ";
            }
            // line 97
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 99
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("updateMemo");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 99,  241 => 98,  235 => 97,  228 => 93,  219 => 87,  212 => 83,  205 => 78,  202 => 77,  198 => 76,  180 => 61,  173 => 56,  167 => 55,  160 => 51,  156 => 49,  153 => 48,  149 => 47,  124 => 24,  115 => 22,  111 => 21,  106 => 19,  93 => 9,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user.html.twig' %}

{% block title %}
    Dashboard
{% endblock %}

{% block body %}
    <div class=\"text-center\">
        <h1><b>Welcome {{ user.name }}</b></h1>
    </div>
    <div class=\"row justify-content-around\">
        <div class=\"col\">
            <div class=\"text-left mt-5\">
                <h2>
                    Memo
                </h2>
            </div>
            <br>
            <input id=\"userId\" type=\"hidden\" value=\"{{ user.id }}\">
           <div class=\"form-control h-75\" contenteditable=\"true\" id=\"memo\">
                {% for memos in memo %}
                   {{ memos.memo |raw }}
               {%  endfor %}
               <br>
           </div>
        </div>

        <div class=\"border-left my-3 mt-5 mr-5\"></div>

        <div class=\"col-4 mr-4\">
            <div class=\"text-left mt-5\">
                <h2>
                    List
                </h2>
            </div>
            <br>
            <table class=\"table table-hover\">
                <thead class=\"thead-dark\">
                <tr>
                    <th>
                        Product
                    </th>
                </tr>
                </thead>
                <tbody>

                {% for product in products %}
                    {% if product.qt2Buy > 0 %}
                        <tr>
                            <td>
                                {{ product.product.name }}
                            </td>
                        </tr>
                    {% endif %}
                {% endfor %}
                </tbody>
            </table>
            <br>
            <div class=\"row justify-content-end\">
                <div class=\"pagination\">
                    {{ knp_pagination_render(products) }}
                </div>
            </div>
        </div>
    </div>


    <div class=\"border-top my-3 mt-5\"></div>

    <div class=\"text-left\">
        <h2>
            News
        </h2>
    </div>
    <br>
    {% for content in contents %}
        {% if content.isActive == true %}
            <div class=\"card mb-5\">
                <div class=\"card-header\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <b>
                                {{ content.name }}
                            </b>
                        </div>
                        <div class=\"col text-right\">
                            {{ content.createdAt.date | date }}
                        </div>
                    </div>

                </div>
                <div class=\"ml-4 mr-4 text-justify\">
                    <p class=\"card-text \">{{ content.content | raw }}</p>
                </div>
            </div>
        {% endif %}
    {% endfor %}
    {{ parent() }}
    {{ encore_entry_script_tags('updateMemo') }}
{% endblock %}", "user/dashboard/index.html.twig", "/var/www/html/Fridge_App/templates/user/dashboard/index.html.twig");
    }
}
