<?php

/* Cards/index.html.twig */
class __TwigTemplate_7f3e10c18d410eaaec29e0ce0023f53d7fb0a22272a6a1786974cea837d347ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Cards/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cards/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cards/index.html.twig"));

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
        <div class=\"card-header\">
            <h5><i class=\"fas fa-id-card-alt\"></i> Lista kart</h5>
        </div>
        <div class=\"card-body\">
            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Numer Karty</th>
                    <th scope=\"col\">Poziom Dostępu</th>
                    <th scope=\"col\">Właściciel</th>
                    <th scope=\"col\">Akcje [ <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("card_add");
        echo "\"> <i class=\"fas fa-plus\"></i></a> ]</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 21
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "id", []), "html", null, true);
            echo "</th>
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "cardId", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "accessLevel", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["card"], "worker", []), "firstName", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["card"], "worker", []), "lastName", []), "html", null, true);
            echo "</td>
                        <td>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("card_details", ["id" => $this->getAttribute($context["card"], "id", [])]), "html", null, true);
            echo "\"><i class=\"fas fa-search\"></i></a> &nbsp
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("card_remove", ["id" => $this->getAttribute($context["card"], "id", [])]), "html", null, true);
            echo "\"> <i class=\"fas fa-trash-alt\"></i></a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <br/>

    <div class=\"card\">
        <div class=\"card-body center\">
            <div class=\"row\">
                <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("rfid_index");
        echo "\">
                    <button type=\"button\" class=\"btn btn-outline-dark\">
                        <i class=\"fas fa-home\"></i> Powrót
                    </button>
                </a>

                <div class=\"navigation offset-3\">
                    ";
        // line 51
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Cards/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 51,  124 => 44,  111 => 33,  101 => 29,  97 => 28,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  74 => 21,  70 => 20,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
        <div class=\"card-header\">
            <h5><i class=\"fas fa-id-card-alt\"></i> Lista kart</h5>
        </div>
        <div class=\"card-body\">
            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Numer Karty</th>
                    <th scope=\"col\">Poziom Dostępu</th>
                    <th scope=\"col\">Właściciel</th>
                    <th scope=\"col\">Akcje [ <a href=\"{{ url('card_add') }}\"> <i class=\"fas fa-plus\"></i></a> ]</th>
                </tr>
                </thead>
                <tbody>
                {% for card in pagination %}
                    <tr>
                        <th scope=\"row\">{{ card.id }}</th>
                        <td>{{ card.cardId }}</td>
                        <td>{{ card.accessLevel }}</td>
                        <td>{{ card.worker.firstName }} {{ card.worker.lastName }}</td>
                        <td>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href=\"{{ url('card_details', {'id':card.id}) }}\"><i class=\"fas fa-search\"></i></a> &nbsp
                            <a href=\"{{ url('card_remove', {'id':card.id}) }}\"> <i class=\"fas fa-trash-alt\"></i></a>
                        </td>
                    </tr>
                {% endfor %}
                </tr>
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

{% endblock %}", "Cards/index.html.twig", "C:\\wamp64\\www\\rfid\\app\\Resources\\views\\Cards\\index.html.twig");
    }
}
