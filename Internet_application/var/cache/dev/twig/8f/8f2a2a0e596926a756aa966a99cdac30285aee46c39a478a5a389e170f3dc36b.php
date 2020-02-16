<?php

/* Cards/details.html.twig */
class __TwigTemplate_78c8892f2c6336d1e270cb3dc5c34de6819b9400809f59c310f42a1928504f69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Cards/details.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cards/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cards/details.html.twig"));

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
            <h5><i class=\"fas fa-id-card-alt\"></i> (";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["card"] ?? $this->getContext($context, "card")), "id", []), "html", null, true);
        echo ") Karta ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["card"] ?? $this->getContext($context, "card")), "cardId", []), "html", null, true);
        echo "</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"form-group field-integer row offset-2\">
                <label class=\"col-sm-2 control-label\">
                    ID
                </label>
                <div class=\"col-sm-6\">
                    <div class=\"form-control\">
                        ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["card"] ?? $this->getContext($context, "card")), "id", []), "html", null, true);
        echo "
                    </div>
                </div>
            </div>

            <div class=\"form-group field-integer row offset-2\">
                <label class=\"col-sm-2 control-label\">
                    ID Karty
                </label>
                <div class=\"col-sm-6\">
                    <div class=\"form-control\">
                        ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["card"] ?? $this->getContext($context, "card")), "cardId", []), "html", null, true);
        echo "
                    </div>
                </div>
            </div>

            <div class=\"form-group field-integer row offset-2\">
                <label class=\"col-sm-2 control-label\">
                    Poziom Dostępu
                </label>
                <div class=\"col-sm-6\">
                    <div class=\"form-control\">
                        ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["card"] ?? $this->getContext($context, "card")), "accessLevel", []), "html", null, true);
        echo "
                    </div>
                </div>
            </div>

            <div class=\"form-group field-integer row offset-2\">
                <label class=\"col-sm-2 control-label\">
                    Właściciel Karty
                </label>
                <div class=\"col-sm-6\">
                    <div class=\"form-control\">
                        <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("worker_details", ["id" => $this->getAttribute($this->getAttribute(($context["card"] ?? $this->getContext($context, "card")), "worker", []), "id", [])]), "html", null, true);
        echo "\">
                            ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["card"] ?? $this->getContext($context, "card")), "worker", []), "firstName", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["card"] ?? $this->getContext($context, "card")), "worker", []), "lastName", []), "html", null, true);
        echo "
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"offset-4\">
                <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("card_edit", ["id" => $this->getAttribute(($context["card"] ?? $this->getContext($context, "card")), "id", [])]), "html", null, true);
        echo "\">
                    <button type=\"button\" class=\"btn btn-outline-info\">
                        <i class=\"fas fa-edit\"></i> Edycja
                    </button>
                </a>
                <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("card_remove", ["id" => $this->getAttribute(($context["card"] ?? $this->getContext($context, "card")), "id", [])]), "html", null, true);
        echo "\">
                    <button type=\"button\" class=\"btn btn-outline-danger\">
                        <i class=\"fas fa-trash-alt\"></i> Usuń
                    </button>
                </a>
            </div>
        </div>
    </div>

    <br/>

    <div class=\"card\">
        <div class=\"card-body center\">
            <a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("cards_index");
        echo "\">
                <button type=\"button\" class=\"btn btn-outline-dark\">
                    <i class=\"fas fa-arrow-circle-left\"></i> Powrót
                </button>
            </a>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Cards/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 74,  133 => 61,  125 => 56,  113 => 49,  109 => 48,  95 => 37,  81 => 26,  67 => 15,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
            <h5><i class=\"fas fa-id-card-alt\"></i> ({{ card.id }}) Karta {{ card.cardId }}</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"form-group field-integer row offset-2\">
                <label class=\"col-sm-2 control-label\">
                    ID
                </label>
                <div class=\"col-sm-6\">
                    <div class=\"form-control\">
                        {{ card.id }}
                    </div>
                </div>
            </div>

            <div class=\"form-group field-integer row offset-2\">
                <label class=\"col-sm-2 control-label\">
                    ID Karty
                </label>
                <div class=\"col-sm-6\">
                    <div class=\"form-control\">
                        {{ card.cardId }}
                    </div>
                </div>
            </div>

            <div class=\"form-group field-integer row offset-2\">
                <label class=\"col-sm-2 control-label\">
                    Poziom Dostępu
                </label>
                <div class=\"col-sm-6\">
                    <div class=\"form-control\">
                        {{ card.accessLevel }}
                    </div>
                </div>
            </div>

            <div class=\"form-group field-integer row offset-2\">
                <label class=\"col-sm-2 control-label\">
                    Właściciel Karty
                </label>
                <div class=\"col-sm-6\">
                    <div class=\"form-control\">
                        <a href=\"{{ url('worker_details', {\"id\": card.worker.id}) }}\">
                            {{ card.worker.firstName }} {{ card.worker.lastName }}
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"offset-4\">
                <a href=\"{{ url('card_edit', {'id': card.id}) }}\">
                    <button type=\"button\" class=\"btn btn-outline-info\">
                        <i class=\"fas fa-edit\"></i> Edycja
                    </button>
                </a>
                <a href=\"{{ url('card_remove', {'id':card.id}) }}\">
                    <button type=\"button\" class=\"btn btn-outline-danger\">
                        <i class=\"fas fa-trash-alt\"></i> Usuń
                    </button>
                </a>
            </div>
        </div>
    </div>

    <br/>

    <div class=\"card\">
        <div class=\"card-body center\">
            <a href=\"{{ url('cards_index') }}\">
                <button type=\"button\" class=\"btn btn-outline-dark\">
                    <i class=\"fas fa-arrow-circle-left\"></i> Powrót
                </button>
            </a>
        </div>
    </div>
{% endblock %}", "Cards/details.html.twig", "C:\\wamp64\\www\\rfid\\app\\Resources\\views\\Cards\\details.html.twig");
    }
}
