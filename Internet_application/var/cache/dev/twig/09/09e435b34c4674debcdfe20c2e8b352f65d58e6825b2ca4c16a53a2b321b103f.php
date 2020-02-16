<?php

/* Cards/add.html.twig */
class __TwigTemplate_ebde888a000a6c67a4750b0559808f356de84c4608c1b4a0b588103a49db4c43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Cards/add.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cards/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cards/add.html.twig"));

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

        // line 4
        echo "<script>
    \$(document).ready(function () {
        \$('#rfid_cardId').val('NONE');
        setTimeout(ajaxGet, 1000);
    });

    var ajaxGet = function () {
        \$.ajax({
            // The URL for the request
            url: \"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("rfid_temp_get");
        echo "\",

            // The data to send (will be converted to a query string)
            data: {
                id: 2
            },
            // Whether this is a POST or GET request
            type: \"POST\",

            // The type of data we expect back
            dataType : \"json\",
            success: function(data){
                \$('#rfid_cardId').val(data.cardID);
            }
        });
        setTimeout(ajaxGet, 2000);
    };
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "    <div class=\"card\">
        <div class=\"card-header\">
            <h5><i class=\"fas fa-id-card-alt\"></i> Dodawanie RFID</h5>
        </div>
        <div class=\"card-body\">
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            <div class=\"form-group row offset-2\">
                <label for=\"choiceType\" class=\"col-sm-2 col-form-label\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cardId", []), 'label');
        echo "</label>
                <div class=\"col-sm-6\">
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cardId", []), 'widget');
        echo "
                    <small>Tutaj pojawi się ID dodawanej karty</small>
                </div>
            </div>
            <div class=\"form-group row offset-2\">
                <label for=\"choiceType\" class=\"col-sm-2 col-form-label\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "accessLevel", []), 'label');
        echo "</label>
                <div class=\"col-sm-6\">
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "accessLevel", []), 'widget');
        echo "
                    <small>Poziom dostępu</small>
                </div>
            </div>
            <div class=\"form-group row offset-2\">
                <label for=\"choiceType\" class=\"col-sm-2 col-form-label\">";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "worker", []), 'label');
        echo "</label>
                <div class=\"col-sm-6\">
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "worker", []), 'widget');
        echo "
                    <small>Poziom dostępu</small>
                </div>
            </div>
            <div class=\"form-group row offset-5\">
                <div class=\"col-sm-2\">
                    <a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("cards_index");
        echo "\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-arrow-circle-left\"></i> Powrót
                    </a>
                </div>
                <div class=\"col-sm-2\">
                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", []), 'widget', ["attr" => ["class" => "btn-outline-primary"]]);
        echo "
                </div>
            </div>
            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
            ";
        // line 72
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
        return "Cards/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 72,  165 => 71,  159 => 68,  151 => 63,  142 => 57,  137 => 55,  129 => 50,  124 => 48,  116 => 43,  111 => 41,  106 => 39,  99 => 34,  90 => 33,  61 => 13,  50 => 4,  41 => 3,  11 => 1,);
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
<script>
    \$(document).ready(function () {
        \$('#rfid_cardId').val('NONE');
        setTimeout(ajaxGet, 1000);
    });

    var ajaxGet = function () {
        \$.ajax({
            // The URL for the request
            url: \"{{ url('rfid_temp_get') }}\",

            // The data to send (will be converted to a query string)
            data: {
                id: 2
            },
            // Whether this is a POST or GET request
            type: \"POST\",

            // The type of data we expect back
            dataType : \"json\",
            success: function(data){
                \$('#rfid_cardId').val(data.cardID);
            }
        });
        setTimeout(ajaxGet, 2000);
    };
</script>
{% endblock %}

{% block body %}
    <div class=\"card\">
        <div class=\"card-header\">
            <h5><i class=\"fas fa-id-card-alt\"></i> Dodawanie RFID</h5>
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
                    <a href=\"{{ url('cards_index') }}\" class=\"btn btn-outline-secondary\">
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
{% endblock %}", "Cards/add.html.twig", "C:\\wamp64\\www\\rfid\\app\\Resources\\views\\Cards\\add.html.twig");
    }
}
