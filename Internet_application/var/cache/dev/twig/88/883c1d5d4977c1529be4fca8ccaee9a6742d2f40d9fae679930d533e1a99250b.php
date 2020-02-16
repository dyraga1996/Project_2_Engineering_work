<?php

/* Logs/card_index.html.twig */
class __TwigTemplate_2011feb0e2578da2684c02902130b79527f0b03a6332f8f8ee2167b3649951eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Logs/card_index.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Logs/card_index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Logs/card_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"card\">
        <div class=\"card-body\">
            <table class=\"table table-hover\" >
                <thead>
                <tr align=\"center\">
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Poziom bramki</th>
                    <th scope=\"col\">ID Karty</th>
                    <th scope=\"col\">Czynność</th>
                    <th scope=\"col\">Data</th>
                    <th scope=\"col\">Akcje</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["cardlog"]) {
            // line 19
            echo "                    ";
            if (($this->getAttribute($context["cardlog"], "result", []) == 1)) {
                // line 20
                echo "                        <tr align=\"center\">
                    ";
            } else {
                // line 22
                echo "                        <tr class=\"table-danger\" align=\"center\">
                    ";
            }
            // line 24
            echo "                    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cardlog"], "id", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["cardlog"], "gateLevel", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["cardlog"], "cardId", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["cardlog"], "action", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cardlog"], "orginalDatetime", []), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("logs_card_details", ["id" => $this->getAttribute($context["cardlog"], "id", [])]), "html", null, true);
            echo "\"><i class=\"fas fa-search\"></i></a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cardlog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                </tbody>
            </table>
        </div>
    </div>

    <br/>

    <div class=\"card\">
        <div class=\"card-body center\">
            <div class=\"row\">
                <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("rfid_index");
        echo "\">
                    <button type=\"button\" class=\"btn btn-outline-dark\">
                        <i class=\"fas fa-home\"></i> Powrót
                    </button>
                </a>

                <div class=\"navigation offset-3\">
                    ";
        // line 49
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
                </div>
            </div>
        </div>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Logs/card_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 49,  122 => 42,  110 => 32,  101 => 29,  97 => 28,  93 => 27,  89 => 26,  85 => 25,  80 => 24,  76 => 22,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"card\">
        <div class=\"card-body\">
            <table class=\"table table-hover\" >
                <thead>
                <tr align=\"center\">
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Poziom bramki</th>
                    <th scope=\"col\">ID Karty</th>
                    <th scope=\"col\">Czynność</th>
                    <th scope=\"col\">Data</th>
                    <th scope=\"col\">Akcje</th>
                </tr>
                </thead>
                <tbody>
                {% for cardlog in pagination %}
                    {% if cardlog.result == 1 %}
                        <tr align=\"center\">
                    {% else %}
                        <tr class=\"table-danger\" align=\"center\">
                    {% endif %}
                    <td>{{ cardlog.id }}</td>
                    <td>{{ cardlog.gateLevel }}</td>
                    <td>{{ cardlog.cardId }}</td>
                    <td>{{ cardlog.action }}</td>
                    <td>{{ cardlog.orginalDatetime|date(\"Y-m-d H:i:s\") }}</td>
                    <td><a href=\"{{ url('logs_card_details', {'id':cardlog.id}) }}\"><i class=\"fas fa-search\"></i></a></td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>

    <br/>

    <div class=\"card\">
        <div class=\"card-body center\">
            <div class=\"row\">
                <a href=\"{{ url('rfid_index') }}\">
                    <button type=\"button\" class=\"btn btn-outline-dark\">
                        <i class=\"fas fa-home\"></i> Powrót
                    </button>
                </a>

                <div class=\"navigation offset-3\">
                    {{ knp_pagination_render(pagination) }}
                </div>
            </div>
        </div>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
{% endblock %}", "Logs/card_index.html.twig", "C:\\wamp64\\www\\rfid\\app\\Resources\\views\\Logs\\card_index.html.twig");
    }
}
