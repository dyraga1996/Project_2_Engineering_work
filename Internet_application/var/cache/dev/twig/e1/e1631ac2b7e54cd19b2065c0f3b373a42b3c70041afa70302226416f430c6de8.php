<?php

/* Logs/admin_fragment_cards.html.twig */
class __TwigTemplate_d8aef3a8a84c2979aaac3d7f7bf2712fefee2c49219e269cc0ad8ebb6a85a9ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Logs/admin_fragment_cards.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Logs/admin_fragment_cards.html.twig"));

        // line 1
        if ((($context["logAction"] ?? $this->getContext($context, "logAction")) == "edit")) {
            // line 2
            echo "    <div class=\"row offset-1\">
        <div class=\"col-sm-5\">
            <p>ID Karty</p>
        </div>
        <div class=\"col-sm-5\">
            <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("card_details", ["id" => $this->getAttribute(($context["oldCard"] ?? $this->getContext($context, "oldCard")), "getId", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oldObject"] ?? $this->getContext($context, "oldObject")), "getCardId", []), "html", null, true);
            echo "</a>
        </div>
        <div class=\"col-sm-5\">
            <p>Poziom Dostępu</p>
        </div>
        <div class=\"col-sm-5\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oldObject"] ?? $this->getContext($context, "oldObject")), "accessLevel", []), "html", null, true);
            echo "
        </div>
        ";
            // line 15
            if ( !(($context["oldWorker"] ?? $this->getContext($context, "oldWorker")) === null)) {
                // line 16
                echo "            <div class=\"col-sm-5\">
                <p>Pracownik</p>
            </div>
            <div class=\"col-sm-5\">
                <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("worker_details", ["id" => $this->getAttribute(($context["oldWorker"] ?? $this->getContext($context, "oldWorker")), "id", [])]), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["oldWorker"] ?? $this->getContext($context, "oldWorker")), "firstName", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["oldWorker"] ?? $this->getContext($context, "oldWorker")), "lastName", []), "html", null, true);
                echo "</a>
            </div>
        ";
            }
            // line 23
            echo "    </div>
";
        } else {
            // line 25
            echo "    <div class=\"row offset-1\">
        <div class=\"col-sm-5\">
            <p>ID Karty</p>
        </div>
        <div class=\"col-sm-5\">
            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("card_details", ["id" => $this->getAttribute(($context["newObject"] ?? $this->getContext($context, "newObject")), "getId", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["newObject"] ?? $this->getContext($context, "newObject")), "getCardId", []), "html", null, true);
            echo "</a>
        </div>
        <div class=\"col-sm-5\">
            <p>Poziom Dostępu</p>
        </div>
        <div class=\"col-sm-5\">
            ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute(($context["newObject"] ?? $this->getContext($context, "newObject")), "accessLevel", []), "html", null, true);
            echo "
        </div>
        <div class=\"col-sm-5\">
            <p>Pracownik</p>
        </div>
        <div class=\"col-sm-5\">
            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("worker_details", ["id" => $this->getAttribute($this->getAttribute(($context["newObject"] ?? $this->getContext($context, "newObject")), "getWorker", []), "getId", [])]), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["newObject"] ?? $this->getContext($context, "newObject")), "worker", []), "firstName", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["newObject"] ?? $this->getContext($context, "newObject")), "worker", []), "lastName", []), "html", null, true);
            echo "</a>
        </div>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Logs/admin_fragment_cards.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 42,  90 => 36,  79 => 30,  72 => 25,  68 => 23,  58 => 20,  52 => 16,  50 => 15,  45 => 13,  34 => 7,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if logAction == \"edit\" %}
    <div class=\"row offset-1\">
        <div class=\"col-sm-5\">
            <p>ID Karty</p>
        </div>
        <div class=\"col-sm-5\">
            <a href=\"{{ url('card_details', {\"id\": oldCard.getId}) }}\">{{ oldObject.getCardId }}</a>
        </div>
        <div class=\"col-sm-5\">
            <p>Poziom Dostępu</p>
        </div>
        <div class=\"col-sm-5\">
            {{ oldObject.accessLevel }}
        </div>
        {% if oldWorker is not same as(null) %}
            <div class=\"col-sm-5\">
                <p>Pracownik</p>
            </div>
            <div class=\"col-sm-5\">
                <a href=\"{{ url('worker_details', {\"id\": oldWorker.id}) }}\"> {{ oldWorker.firstName }} {{ oldWorker.lastName }}</a>
            </div>
        {% endif %}
    </div>
{% else %}
    <div class=\"row offset-1\">
        <div class=\"col-sm-5\">
            <p>ID Karty</p>
        </div>
        <div class=\"col-sm-5\">
            <a href=\"{{ url('card_details', {\"id\": newObject.getId}) }}\">{{ newObject.getCardId }}</a>
        </div>
        <div class=\"col-sm-5\">
            <p>Poziom Dostępu</p>
        </div>
        <div class=\"col-sm-5\">
            {{ newObject.accessLevel }}
        </div>
        <div class=\"col-sm-5\">
            <p>Pracownik</p>
        </div>
        <div class=\"col-sm-5\">
            <a href=\"{{ url('worker_details', {\"id\": newObject.getWorker.getId}) }}\"> {{ newObject.worker.firstName }} {{ newObject.worker.lastName }}</a>
        </div>
    </div>
{% endif %}", "Logs/admin_fragment_cards.html.twig", "C:\\wamp64\\www\\rfid\\app\\Resources\\views\\Logs\\admin_fragment_cards.html.twig");
    }
}
