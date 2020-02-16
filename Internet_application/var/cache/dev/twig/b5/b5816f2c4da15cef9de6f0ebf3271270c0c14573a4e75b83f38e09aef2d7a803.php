<?php

/* Workers/edit.html.twig */
class __TwigTemplate_962f686078523cc717be8417af9008ddc87e77d193fa6ac56fbda1d8938bddfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Workers/edit.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Workers/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Workers/edit.html.twig"));

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
            <h5><i class=\"fas fa-user-edit\"></i> ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["worker"] ?? $this->getContext($context, "worker")), "id", []), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["worker"] ?? $this->getContext($context, "worker")), "firstName", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["worker"] ?? $this->getContext($context, "worker")), "lastName", []), "html", null, true);
        echo "</h5>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("worker_details", ["id" => $this->getAttribute(($context["worker"] ?? $this->getContext($context, "worker")), "id", [])]), "html", null, true);
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
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Workers/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 50,  132 => 45,  123 => 39,  118 => 37,  112 => 34,  107 => 32,  99 => 27,  94 => 25,  86 => 20,  81 => 18,  73 => 13,  68 => 11,  63 => 9,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
            <h5><i class=\"fas fa-user-edit\"></i> {{ worker.id }} - {{ worker.firstName }} {{ worker.lastName }}</h5>
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
                    <a href=\"{{ url('worker_details', {\"id\":worker.id}) }}\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-arrow-circle-left\"></i> Powrót
                    </a>
                </div>
                <div class=\"col-sm-2\">
                    {{ form_widget(form.submit, {\"attr\": {\"class\": \"btn-outline-primary\"}}) }}
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "Workers/edit.html.twig", "C:\\wamp64\\www\\rfid\\app\\Resources\\views\\Workers\\edit.html.twig");
    }
}
