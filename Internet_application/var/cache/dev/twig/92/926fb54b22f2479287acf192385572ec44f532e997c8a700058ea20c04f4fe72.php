<?php

/* Cards/edit.html.twig */
class __TwigTemplate_b088b97b14622c0fc5c4164525f7bb64273e7d0e418e9c5a7c430531c6b6ac80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Cards/edit.html.twig", 1);
        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cards/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cards/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"card\">
        <div class=\"card-header\">
            <h5><i class=\"fas fa-id-card-alt\"></i> (";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["card"] ?? $this->getContext($context, "card")), "id", []), "html", null, true);
        echo ") - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["card"] ?? $this->getContext($context, "card")), "cardId", []), "html", null, true);
        echo "</h5>
        </div>
        <div class=\"card-body\">
            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            <div class=\"form-group row offset-2\">
                <label for=\"choiceType\" class=\"col-sm-2 col-form-label\">";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cardId", []), 'label');
        echo "</label>
                <div class=\"col-sm-6\">
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cardId", []), 'widget');
        echo "
                    <small>Tutaj pojawi się ID dodawanej karty</small>
                </div>
            </div>
            <div class=\"form-group row offset-2\">
                <label for=\"choiceType\" class=\"col-sm-2 col-form-label\">";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "accessLevel", []), 'label');
        echo "</label>
                <div class=\"col-sm-6\">
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "accessLevel", []), 'widget');
        echo "
                    <small>Poziom dostępu</small>
                </div>
            </div>
            <div class=\"form-group row offset-2\">
                <label for=\"choiceType\" class=\"col-sm-2 col-form-label\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "worker", []), 'label');
        echo "</label>
                <div class=\"col-sm-6\">
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "worker", []), 'widget');
        echo "
                    <small>Poziom dostępu</small>
                </div>
            </div>
            <div class=\"form-group row offset-5\">
                <div class=\"col-sm-2\">
                    <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("card_details", ["id" => $this->getAttribute(($context["card"] ?? $this->getContext($context, "card")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-arrow-circle-left\"></i> Powrót
                    </a>
                </div>
                <div class=\"col-sm-2\">
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", []), 'widget', ["attr" => ["class" => "btn-outline-primary"]]);
        echo "
                </div>
            </div>
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Cards/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 45,  138 => 44,  132 => 41,  124 => 36,  115 => 30,  110 => 28,  102 => 23,  97 => 21,  89 => 16,  84 => 14,  79 => 12,  71 => 9,  67 => 7,  58 => 6,  41 => 3,  11 => 1,);
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

{% block javascripts %}
{% endblock %}

{% block body %}
    <div class=\"card\">
        <div class=\"card-header\">
            <h5><i class=\"fas fa-id-card-alt\"></i> ({{ card.id }}) - {{ card.cardId }}</h5>
        </div>
        <div class=\"card-body\">
            {{ form_start(form) }}
            <div class=\"form-group row offset-2\">
                <label for=\"choiceType\" class=\"col-sm-2 col-form-label\">{{ form_label(form.cardId) }}</label>
                <div class=\"col-sm-6\">
                    {{ form_widget(form.cardId) }}
                    <small>Tutaj pojawi się ID dodawanej karty</small>
                </div>
            </div>
            <div class=\"form-group row offset-2\">
                <label for=\"choiceType\" class=\"col-sm-2 col-form-label\">{{ form_label(form.accessLevel) }}</label>
                <div class=\"col-sm-6\">
                    {{ form_widget(form.accessLevel) }}
                    <small>Poziom dostępu</small>
                </div>
            </div>
            <div class=\"form-group row offset-2\">
                <label for=\"choiceType\" class=\"col-sm-2 col-form-label\">{{ form_label(form.worker) }}</label>
                <div class=\"col-sm-6\">
                    {{ form_widget(form.worker) }}
                    <small>Poziom dostępu</small>
                </div>
            </div>
            <div class=\"form-group row offset-5\">
                <div class=\"col-sm-2\">
                    <a href=\"{{ url('card_details', {\"id\": card.id}) }}\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-arrow-circle-left\"></i> Powrót
                    </a>
                </div>
                <div class=\"col-sm-2\">
                    {{ form_widget(form.submit, {\"attr\": {\"class\": \"btn-outline-primary\"}}) }}
                </div>
            </div>
            {{ form_rest(form) }}
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}", "Cards/edit.html.twig", "C:\\wamp64\\www\\rfid\\app\\Resources\\views\\Cards\\edit.html.twig");
    }
}
