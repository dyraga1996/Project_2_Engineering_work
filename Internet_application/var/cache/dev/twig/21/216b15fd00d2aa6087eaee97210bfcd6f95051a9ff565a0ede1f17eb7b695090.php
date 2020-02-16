<?php

/* Logs/admin_fragment_old_cards.html.twig */
class __TwigTemplate_25571562e644cd1cffda626212b99f32a2a9179097b94730ccf189240cc112a3 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Logs/admin_fragment_old_cards.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Logs/admin_fragment_old_cards.html.twig"));

        // line 1
        echo "<div class=\"row offset-1\">
    <div class=\"col-sm-5\">
        <p>ID Karty</p>
    </div>
    <div class=\"col-sm-5\">
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("card_details", ["id" => $this->getAttribute(($context["newCard"] ?? $this->getContext($context, "newCard")), "getId", [])]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newObject"] ?? $this->getContext($context, "newObject")), "getCardId", []), "html", null, true);
        echo "</a>
    </div>
    <div class=\"col-sm-5\">
        <p>Poziom Dostępu</p>
    </div>
    <div class=\"col-sm-5\">
        ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newObject"] ?? $this->getContext($context, "newObject")), "accessLevel", []), "html", null, true);
        echo "
    </div>
    ";
        // line 14
        if ( !(($context["oldWorker"] ?? $this->getContext($context, "oldWorker")) === null)) {
            // line 15
            echo "        <div class=\"col-sm-5\">
            <p>Pracownik</p>
        </div>
        <div class=\"col-sm-5\">
            <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("worker_details", ["id" => $this->getAttribute(($context["newWorker"] ?? $this->getContext($context, "newWorker")), "id", [])]), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["newWorker"] ?? $this->getContext($context, "newWorker")), "firstName", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["newWorker"] ?? $this->getContext($context, "newWorker")), "lastName", []), "html", null, true);
            echo "</a>
        </div>
    ";
        }
        // line 22
        echo "</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Logs/admin_fragment_old_cards.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 22,  56 => 19,  50 => 15,  48 => 14,  43 => 12,  32 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row offset-1\">
    <div class=\"col-sm-5\">
        <p>ID Karty</p>
    </div>
    <div class=\"col-sm-5\">
        <a href=\"{{ url('card_details', {\"id\": newCard.getId}) }}\">{{ newObject.getCardId }}</a>
    </div>
    <div class=\"col-sm-5\">
        <p>Poziom Dostępu</p>
    </div>
    <div class=\"col-sm-5\">
        {{ newObject.accessLevel }}
    </div>
    {% if oldWorker is not same as(null) %}
        <div class=\"col-sm-5\">
            <p>Pracownik</p>
        </div>
        <div class=\"col-sm-5\">
            <a href=\"{{ url('worker_details', {\"id\": newWorker.id}) }}\"> {{ newWorker.firstName }} {{ newWorker.lastName }}</a>
        </div>
    {% endif %}
</div>", "Logs/admin_fragment_old_cards.html.twig", "C:\\wamp64\\www\\rfid\\app\\Resources\\views\\Logs\\admin_fragment_old_cards.html.twig");
    }
}
