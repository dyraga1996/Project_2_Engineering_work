<?php

/* rfid/index.html.twig */
class __TwigTemplate_ba0400b147dfcb38a6ec85d4a73019d680f1c0bfee3facff186fd41c677cd2e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rfid/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rfid/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rfid/index.html.twig"));

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
        echo "    <div class=\"card bg-light mb-3\">
    <div class=\"card-header\"><i class=\"fas fa-universal-access\"></i> Witaj !</div>
    <div class=\"card-body\">
        <h5 class=\"card-title\">RFID-Managament</h5>
        <p class=\"card-text\">Strona służy zarządzaniu systemem dostępu do poszczególnych obiektów w budynku.</p>
        <p>Zalogowałeś się na konto z pełnymi uprawnieniami administratorskimi. Masz dostęp do wszystkich paneli.</p>
    </div>
    </div>
    <br/>
    <div class=\"clearfix\"></div>
    <div class=\"row\">
        <div class=\"col-sm-4\">
            <div class=\"card\">
                <div class=\"card-body text-white bg-success\">
                    <h5 class=\"card-title\"><i class=\"fas fa-user-tie\"></i> Pracownicy</h5>
                    <p class=\"card-text\">Przeglądaj zatrudnionych pracowników, zarządzaj nimi.</p>
                    <div align=\"center\">
                        <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("worker_index");
        echo "\" class=\"btn btn-outline-light\">
                            <i class=\"fas fa-arrow-circle-right\"></i> Przejdź
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"card\">
                <div class=\"card-body text-white bg-info\">
                    <h5 class=\"card-title\"><i class=\"fas fa-id-card-alt\"></i> Karty</h5>
                    <p class=\"card-text\">Przeglądaj oraz zarządzaj aktywnymi kartami w systemie</p>
                    <div align=\"center\">
                        <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("cards_index");
        echo "\" class=\"btn btn-outline-light\">
                            <i class=\"fas fa-arrow-circle-right\"></i> Przejdź
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"card\">
                <div class=\"card-body text-white bg-dark\">
                    <h5 class=\"card-title\"><i class=\"fas fa-align-justify\"></i> Logi</h5>
                    <p class=\"card-text\">Przeglądaj ostatnie zdarzenia w systemie</p><br/>
                    <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("logs_cards_index");
        echo "\" class=\"btn btn-outline-light\">
                        <i class=\"fas fa-arrow-circle-right\"></i> Logi kart
                    </a>
                    <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("logs_admin_index");
        echo "\" class=\"btn btn-outline-light\">
                        <i class=\"fas fa-arrow-circle-right\"></i> Logi administracyjne
                    </a>
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
        return "rfid/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 49,  99 => 46,  84 => 34,  68 => 21,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"card bg-light mb-3\">
    <div class=\"card-header\"><i class=\"fas fa-universal-access\"></i> Witaj !</div>
    <div class=\"card-body\">
        <h5 class=\"card-title\">RFID-Managament</h5>
        <p class=\"card-text\">Strona służy zarządzaniu systemem dostępu do poszczególnych obiektów w budynku.</p>
        <p>Zalogowałeś się na konto z pełnymi uprawnieniami administratorskimi. Masz dostęp do wszystkich paneli.</p>
    </div>
    </div>
    <br/>
    <div class=\"clearfix\"></div>
    <div class=\"row\">
        <div class=\"col-sm-4\">
            <div class=\"card\">
                <div class=\"card-body text-white bg-success\">
                    <h5 class=\"card-title\"><i class=\"fas fa-user-tie\"></i> Pracownicy</h5>
                    <p class=\"card-text\">Przeglądaj zatrudnionych pracowników, zarządzaj nimi.</p>
                    <div align=\"center\">
                        <a href=\"{{ url('worker_index') }}\" class=\"btn btn-outline-light\">
                            <i class=\"fas fa-arrow-circle-right\"></i> Przejdź
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"card\">
                <div class=\"card-body text-white bg-info\">
                    <h5 class=\"card-title\"><i class=\"fas fa-id-card-alt\"></i> Karty</h5>
                    <p class=\"card-text\">Przeglądaj oraz zarządzaj aktywnymi kartami w systemie</p>
                    <div align=\"center\">
                        <a href=\"{{ url('cards_index') }}\" class=\"btn btn-outline-light\">
                            <i class=\"fas fa-arrow-circle-right\"></i> Przejdź
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"card\">
                <div class=\"card-body text-white bg-dark\">
                    <h5 class=\"card-title\"><i class=\"fas fa-align-justify\"></i> Logi</h5>
                    <p class=\"card-text\">Przeglądaj ostatnie zdarzenia w systemie</p><br/>
                    <a href=\"{{ url('logs_cards_index') }}\" class=\"btn btn-outline-light\">
                        <i class=\"fas fa-arrow-circle-right\"></i> Logi kart
                    </a>
                    <a href=\"{{ url('logs_admin_index') }}\" class=\"btn btn-outline-light\">
                        <i class=\"fas fa-arrow-circle-right\"></i> Logi administracyjne
                    </a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "rfid/index.html.twig", "C:\\wamp64\\www\\rfid\\app\\Resources\\views\\rfid\\index.html.twig");
    }
}
