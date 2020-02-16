<?php

/* Workers/add.html.twig */
class __TwigTemplate_2541bb0fa7a7557a0c46be6aa83a751b664c4aa6540ee73ce198ad40f5e2fe85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Workers/add.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Workers/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Workers/add.html.twig"));

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
            <h5><i class=\"fas fa-address-card\"></i> Dodawanie pracownika</h5>
        </div>
        <div class=\"card-body\">
            ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            <div class=\"form-group row offset-2\">
                <label for=\"choiceType\" class=\"col-sm-2 col-form-label\">";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", []), 'label');
        echo "</label>
                <div class=\"col-sm-7\">
                    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", []), 'widget', ["attr" => ["placeholder" => "Imię"]]);
        echo "
                    <small>Podaj imię dodawanego pracownika.</small>
                </div>
            </div>
            <div class=\"form-group row offset-2\">
                <label for=\"choiceType\" class=\"col-sm-2 col-form-label\">";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", []), 'label');
        echo "</label>
                <div class=\"col-sm-7\">
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", []), 'widget', ["attr" => ["placeholder" => "Nazwisko"]]);
        echo "
                    <small>Podaj nazwisko dodawanego pracownika.</small>
                </div>
            </div>
            <div class=\"form-group row offset-2\">
                <label for=\"choiceType\" class=\"col-sm-2 col-form-label\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "jobTitle", []), 'label');
        echo "</label>
                <div class=\"col-sm-7\">
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "jobTitle", []), 'widget');
        echo "
                    <small>Podaj stanowisko dodawanego pracownika.</small>
                </div>
            </div>
            <div class=\"form-group row offset-2\">
                <label for=\"choiceType\" class=\"col-sm-2 col-form-label\">";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hiredAt", []), 'label');
        echo "</label>
                <div class=\"col-sm-3\">
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hiredAt", []), 'widget', ["attr" => ["placeholder" => "Data Zatrudnienia"]]);
        echo "
                    <small>Podaj datę zatrudnienia</small>
                </div>
                <label for=\"choiceType\" class=\"col-sm-1 col-form-label\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hired", []), 'label');
        echo "</label>
                <div class=\"col-sm-3\">
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hired", []), 'widget');
        echo "
                    <small>Czy pracownik rozpoczął już pracę ?</small>
                </div>
            </div>
            <div class=\"form-group row offset-5\">
                <div class=\"col-sm-2\">
                    <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("worker_index");
        echo "\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-arrow-circle-left\"></i> Powrót
                    </a>
                </div>
                <div class=\"col-sm-2\">
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", []), 'widget', ["attr" => ["class" => "btn-outline-primary"]]);
        echo "
                </div>
            </div>
            ";
        // line 53
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
        return "Workers/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 53,  133 => 50,  125 => 45,  116 => 39,  111 => 37,  105 => 34,  100 => 32,  92 => 27,  87 => 25,  79 => 20,  74 => 18,  66 => 13,  61 => 11,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
            <h5><i class=\"fas fa-address-card\"></i> Dodawanie pracownika</h5>
        </div>
        <div class=\"card-body\">
            {{ form_start(form) }}
            <div class=\"form-group row offset-2\">
                <label for=\"choiceType\" class=\"col-sm-2 col-form-label\">{{ form_label(form.firstName) }}</label>
                <div class=\"col-sm-7\">
                    {{ form_widget(form.firstName, {\"attr\": {\"placeholder\": \"Imię\"}}) }}
                    <small>Podaj imię dodawanego pracownika.</small>
                </div>
            </div>
            <div class=\"form-group row offset-2\">
                <label for=\"choiceType\" class=\"col-sm-2 col-form-label\">{{ form_label(form.lastName) }}</label>
                <div class=\"col-sm-7\">
                    {{ form_widget(form.lastName, {\"attr\": {\"placeholder\": \"Nazwisko\"}}) }}
                    <small>Podaj nazwisko dodawanego pracownika.</small>
                </div>
            </div>
            <div class=\"form-group row offset-2\">
                <label for=\"choiceType\" class=\"col-sm-2 col-form-label\">{{ form_label(form.jobTitle) }}</label>
                <div class=\"col-sm-7\">
                    {{ form_widget(form.jobTitle) }}
                    <small>Podaj stanowisko dodawanego pracownika.</small>
                </div>
            </div>
            <div class=\"form-group row offset-2\">
                <label for=\"choiceType\" class=\"col-sm-2 col-form-label\">{{ form_label(form.hiredAt) }}</label>
                <div class=\"col-sm-3\">
                    {{ form_widget(form.hiredAt, {\"attr\": {\"placeholder\": \"Data Zatrudnienia\"}}) }}
                    <small>Podaj datę zatrudnienia</small>
                </div>
                <label for=\"choiceType\" class=\"col-sm-1 col-form-label\">{{ form_label(form.hired) }}</label>
                <div class=\"col-sm-3\">
                    {{ form_widget(form.hired) }}
                    <small>Czy pracownik rozpoczął już pracę ?</small>
                </div>
            </div>
            <div class=\"form-group row offset-5\">
                <div class=\"col-sm-2\">
                    <a href=\"{{ url('worker_index') }}\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-arrow-circle-left\"></i> Powrót
                    </a>
                </div>
                <div class=\"col-sm-2\">
                    {{ form_widget(form.submit, {\"attr\": {\"class\": \"btn-outline-primary\"}}) }}
                </div>
            </div>
            {{ form_end(form) }}

        </div>
    </div>

{% endblock %}", "Workers/add.html.twig", "C:\\wamp64\\www\\rfid\\app\\Resources\\views\\Workers\\add.html.twig");
    }
}
