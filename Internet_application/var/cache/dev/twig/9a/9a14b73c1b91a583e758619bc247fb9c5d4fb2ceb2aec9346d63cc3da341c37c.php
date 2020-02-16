<?php

/* Workers/details.html.twig */
class __TwigTemplate_2a3494586c0d2c66a3133b08bce5ae96953e7f45dc0531948bbac357d5152458 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Workers/details.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Workers/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Workers/details.html.twig"));

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
            <h5><i class=\"fas fa-user-tie\"></i> (";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["worker"] ?? $this->getContext($context, "worker")), "id", []), "html", null, true);
        echo ") - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["worker"] ?? $this->getContext($context, "worker")), "firstName", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["worker"] ?? $this->getContext($context, "worker")), "lastName", []), "html", null, true);
        echo "</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"form-group field-integer row offset-2\">
                <label class=\"col-sm-2 control-label\">
                    Imię i Nazwisko
                </label>
                <div class=\"col-sm-6\">
                    <div class=\"form-control\">
                        ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["worker"] ?? $this->getContext($context, "worker")), "firstName", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["worker"] ?? $this->getContext($context, "worker")), "lastName", []), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"form-group field-integer row offset-2\">
                <label class=\"col-sm-2 control-label\">
                    Zatrudniony
                </label>
                <div class=\"col-sm-6\">
                    <div class=\"form-control\">
                        ";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["worker"] ?? $this->getContext($context, "worker")), "hiredAt", []), "Y-m-d"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"form-group field-integer row offset-2\">
                <label class=\"col-sm-2 control-label\">
                    Stanowisko
                </label>
                <div class=\"col-sm-6\">
                    <div class=\"form-control\">
                        ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["worker"] ?? $this->getContext($context, "worker")), "jobTitle", []), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"form-group field-integer row offset-2\">
                <label class=\"col-sm-2 control-label\">
                    Czy jest zatrudniony ?
                </label>
                <div class=\"col-sm-6\">
                    <div class=\"form-control\">
                        ";
        // line 45
        if (($this->getAttribute(($context["worker"] ?? $this->getContext($context, "worker")), "hired", []) === 1)) {
            // line 46
            echo "                            <p>Tak</p>
                        ";
        } else {
            // line 48
            echo "                            <p>Nie</p>
                        ";
        }
        // line 50
        echo "                    </div>
                </div>
            </div>
            <div class=\"form-group field-integer row offset-2\">
                <label class=\"col-sm-2 control-label\">
                    Numery Kart
                </label>
                <div class=\"col-sm-6\">
                    <div class=\"form-control\">
                        <p>
                            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["worker"] ?? $this->getContext($context, "worker")), "cards", []));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 61
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("card_details", ["id" => $this->getAttribute($context["card"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "cardId", []), "html", null, true);
            echo "</a>,
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                        </p>
                    </div>
                </div>
            </div>

            <div class=\"offset-4\">
                <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("worker_edit", ["id" => $this->getAttribute(($context["worker"] ?? $this->getContext($context, "worker")), "id", [])]), "html", null, true);
        echo "\">
                    <button type=\"button\" class=\"btn btn-outline-info\">
                        <i class=\"fas fa-edit\"></i> Edycja
                    </button>
                </a>
                <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("worker_remove", ["id" => $this->getAttribute(($context["worker"] ?? $this->getContext($context, "worker")), "id", [])]), "html", null, true);
        echo "\">
                    <button type=\"button\" class=\"btn btn-outline-danger\">
                        <i class=\"fas fa-user-minus\"></i> Usuń
                    </button>
                </a>
            </div>
        </div>
    </div>

    <br/>

    <div class=\"card\">
        <div class=\"card-body center\">
            <a href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("worker_index");
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
        return "Workers/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 87,  163 => 74,  155 => 69,  147 => 63,  136 => 61,  132 => 60,  120 => 50,  116 => 48,  112 => 46,  110 => 45,  97 => 35,  84 => 25,  69 => 15,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}
    <div class=\"card\">
        <div class=\"card-header\">
            <h5><i class=\"fas fa-user-tie\"></i> ({{ worker.id }}) - {{ worker.firstName }} {{ worker.lastName }}</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"form-group field-integer row offset-2\">
                <label class=\"col-sm-2 control-label\">
                    Imię i Nazwisko
                </label>
                <div class=\"col-sm-6\">
                    <div class=\"form-control\">
                        {{ worker.firstName }} {{ worker.lastName }}
                    </div>
                </div>
            </div>
            <div class=\"form-group field-integer row offset-2\">
                <label class=\"col-sm-2 control-label\">
                    Zatrudniony
                </label>
                <div class=\"col-sm-6\">
                    <div class=\"form-control\">
                        {{ worker.hiredAt|date('Y-m-d') }}
                    </div>
                </div>
            </div>
            <div class=\"form-group field-integer row offset-2\">
                <label class=\"col-sm-2 control-label\">
                    Stanowisko
                </label>
                <div class=\"col-sm-6\">
                    <div class=\"form-control\">
                        {{ worker.jobTitle }}
                    </div>
                </div>
            </div>
            <div class=\"form-group field-integer row offset-2\">
                <label class=\"col-sm-2 control-label\">
                    Czy jest zatrudniony ?
                </label>
                <div class=\"col-sm-6\">
                    <div class=\"form-control\">
                        {% if worker.hired is same as(1) %}
                            <p>Tak</p>
                        {% else %}
                            <p>Nie</p>
                        {% endif %}
                    </div>
                </div>
            </div>
            <div class=\"form-group field-integer row offset-2\">
                <label class=\"col-sm-2 control-label\">
                    Numery Kart
                </label>
                <div class=\"col-sm-6\">
                    <div class=\"form-control\">
                        <p>
                            {% for card in worker.cards %}
                                <a href=\"{{ url('card_details', {'id':card.id}) }}\">{{ card.cardId }}</a>,
                            {% endfor %}
                        </p>
                    </div>
                </div>
            </div>

            <div class=\"offset-4\">
                <a href=\"{{ url('worker_edit', {'id':worker.id}) }}\">
                    <button type=\"button\" class=\"btn btn-outline-info\">
                        <i class=\"fas fa-edit\"></i> Edycja
                    </button>
                </a>
                <a href=\"{{ url('worker_remove', {\"id\":worker.id}) }}\">
                    <button type=\"button\" class=\"btn btn-outline-danger\">
                        <i class=\"fas fa-user-minus\"></i> Usuń
                    </button>
                </a>
            </div>
        </div>
    </div>

    <br/>

    <div class=\"card\">
        <div class=\"card-body center\">
            <a href=\"{{ url('worker_index') }}\">
                <button type=\"button\" class=\"btn btn-outline-dark\">
                    <i class=\"fas fa-arrow-circle-left\"></i> Powrót
                </button>
            </a>
        </div>
    </div>
{% endblock %}", "Workers/details.html.twig", "C:\\wamp64\\www\\rfid\\app\\Resources\\views\\Workers\\details.html.twig");
    }
}
