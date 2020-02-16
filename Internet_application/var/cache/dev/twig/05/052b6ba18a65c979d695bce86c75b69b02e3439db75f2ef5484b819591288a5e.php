<?php

/* Workers/index.html.twig */
class __TwigTemplate_f0e2498780faad5230a876427c722ece3211045240611758eeee99b64b760f06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Workers/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Workers/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Workers/index.html.twig"));

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
            <h5><i class=\"fas fa-users\"></i> Lista pracowników</h5>
        </div>
        <div class=\"card-body\">
            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Imię i nazwisko</th>
                    <th scope=\"col\">Stanowisko</th>
                    <th scope=\"col\">Data Zatrudnienia</th>
                    <th scope=\"col\">Pracuje(Aktualnie)</th>
                    <th scope=\"col\">Zatrudniony</th>
                    <th>Akcje [ <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("worker_add");
        echo "\"> <i class=\"fas fa-plus\"></i></a> ]</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["worker"]) {
            // line 23
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "id", []), "html", null, true);
            echo "</th>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "firstName", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "lastName", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "jobTitle", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["worker"], "hiredAt", []), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "working", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "hired", []), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("worker_details", ["id" => $this->getAttribute($context["worker"], "id", [])]), "html", null, true);
            echo "\"><i class=\"fas fa-search\"></i></a> &nbsp
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("worker_remove", ["id" => $this->getAttribute($context["worker"], "id", [])]), "html", null, true);
            echo "\"> <i class=\"fas fa-user-minus\"></i></a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['worker'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
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
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("rfid_index");
        echo "\">
                    <button type=\"button\" class=\"btn btn-outline-dark\">
                        <i class=\"fas fa-home\"></i> Powrót
                    </button>
                </a>

                <div class=\"navigation offset-3\">
                    ";
        // line 54
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
        return "Workers/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 54,  133 => 47,  120 => 36,  110 => 32,  106 => 31,  101 => 29,  97 => 28,  93 => 27,  89 => 26,  83 => 25,  79 => 24,  76 => 23,  72 => 22,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
            <h5><i class=\"fas fa-users\"></i> Lista pracowników</h5>
        </div>
        <div class=\"card-body\">
            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Imię i nazwisko</th>
                    <th scope=\"col\">Stanowisko</th>
                    <th scope=\"col\">Data Zatrudnienia</th>
                    <th scope=\"col\">Pracuje(Aktualnie)</th>
                    <th scope=\"col\">Zatrudniony</th>
                    <th>Akcje [ <a href=\"{{ url('worker_add') }}\"> <i class=\"fas fa-plus\"></i></a> ]</th>
                </tr>
                </thead>
                <tbody>
                {% for worker in pagination %}
                    <tr>
                        <th scope=\"row\">{{ worker.id }}</th>
                        <td>{{ worker.firstName }} {{ worker.lastName }}</td>
                        <td>{{ worker.jobTitle }}</td>
                        <td>{{ worker.hiredAt|date(\"Y-m-d\") }}</td>
                        <td>{{ worker.working }}</td>
                        <td>{{ worker.hired }}</td>
                        <td>
                            <a href=\"{{ url('worker_details', {\"id\":worker.id}) }}\"><i class=\"fas fa-search\"></i></a> &nbsp
                            <a href=\"{{ url('worker_remove', {\"id\":worker.id}) }}\"> <i class=\"fas fa-user-minus\"></i></a>
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
{% endblock %}", "Workers/index.html.twig", "C:\\wamp64\\www\\rfid\\app\\Resources\\views\\Workers\\index.html.twig");
    }
}
