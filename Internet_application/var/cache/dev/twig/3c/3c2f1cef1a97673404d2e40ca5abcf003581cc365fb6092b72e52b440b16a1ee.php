<?php

/* Logs/admin_index.html.twig */
class __TwigTemplate_06819ec41cc185041b54cd245718554b7a98b2a55739f6749c2015727cc8a334 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Logs/admin_index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Logs/admin_index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Logs/admin_index.html.twig"));

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
            <h5><i class=\"fas fa-align-justify\"></i> Lista logów administracyjnych</h5>
        </div>
        <div class=\"card-body\">
            <table class=\"table table-hover\" >
                <thead>
                <tr align=\"center\">
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Użytkownik</th>
                    <th scope=\"col\">Czynność</th>
                    <th scope=\"col\">Miejsce</th>
                    <th scope=\"col\">Data</th>
                    <th scope=\"col\">Akcje</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["adminLog"]) {
            // line 22
            echo "                    <tr align=\"center\">
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["adminLog"], "id", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute(($context["usernames"] ?? $this->getContext($context, "usernames")), $this->getAttribute($context["loop"], "index0", []), [], "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["adminLog"], "action", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["adminLog"], "controller", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["adminLog"], "createdAt", []), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("logs_admin_details", ["id" => $this->getAttribute($context["adminLog"], "id", [])]), "html", null, true);
            echo "\"><i class=\"fas fa-search\"></i></a></td>
                    </tr>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adminLog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                </tbody>
            </table>
        </div>
    </div>

    <br/>

    <div class=\"card\">
        <div class=\"card-body center\">
            <div class=\"row\">
                <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("rfid_index");
        echo "\">
                    <button type=\"button\" class=\"btn btn-outline-dark\">
                        <i class=\"fas fa-home\"></i> Powrót
                    </button>
                </a>

                <div class=\"navigation offset-3\">
                    ";
        // line 48
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
        return "Logs/admin_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 48,  137 => 41,  125 => 31,  108 => 28,  104 => 27,  100 => 26,  96 => 25,  92 => 24,  88 => 23,  85 => 22,  68 => 21,  49 => 4,  40 => 3,  11 => 1,);
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
            <h5><i class=\"fas fa-align-justify\"></i> Lista logów administracyjnych</h5>
        </div>
        <div class=\"card-body\">
            <table class=\"table table-hover\" >
                <thead>
                <tr align=\"center\">
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Użytkownik</th>
                    <th scope=\"col\">Czynność</th>
                    <th scope=\"col\">Miejsce</th>
                    <th scope=\"col\">Data</th>
                    <th scope=\"col\">Akcje</th>
                </tr>
                </thead>
                <tbody>
                {% for adminLog in pagination %}
                    <tr align=\"center\">
                        <td>{{ adminLog.id }}</td>
                        <td>{{ usernames[loop.index0] }}</td>
                        <td>{{ adminLog.action }}</td>
                        <td>{{ adminLog.controller }}</td>
                        <td>{{ adminLog.createdAt | date(\"Y-m-d H:i:s\") }}</td>
                        <td><a href=\"{{ url('logs_admin_details', {'id':adminLog.id}) }}\"><i class=\"fas fa-search\"></i></a></td>
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
{% endblock %}", "Logs/admin_index.html.twig", "C:\\wamp64\\www\\rfid\\app\\Resources\\views\\Logs\\admin_index.html.twig");
    }
}
