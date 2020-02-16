<?php

/* Logs/admin_details.html.twig */
class __TwigTemplate_1f5b3258e322883b3c190b88e691a2b62f561b9710bac54a3d481cffa88eaa26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Logs/admin_details.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Logs/admin_details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Logs/admin_details.html.twig"));

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
            <h5><i class=\"fas fa-align-justify\"></i> Wyświetl log</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"card\">
                        ";
        // line 12
        if ((($context["logAction"] ?? $this->getContext($context, "logAction")) == "add")) {
            // line 13
            echo "                            <h5 class=\"card-header\"><i class=\"far fa-file\"></i> Nowy objekt</h5>
                        ";
        } else {
            // line 15
            echo "                            <h5 class=\"card-header\"><i class=\"far fa-file\"></i> Przed edycją</h5>
                        ";
        }
        // line 17
        echo "                        <div class=\"card-body\">
                            ";
        // line 18
        if ((($context["place"] ?? $this->getContext($context, "place")) == "cards")) {
            // line 19
            echo "                                ";
            $this->loadTemplate("Logs/admin_fragment_cards.html.twig", "Logs/admin_details.html.twig", 19)->display($context);
            // line 20
            echo "                            ";
        } elseif ((($context["place"] ?? $this->getContext($context, "place")) == "workers")) {
            // line 21
            echo "                                ";
            $this->loadTemplate("Logs/admin_fragment_workers.html.twig", "Logs/admin_details.html.twig", 21)->display($context);
            // line 22
            echo "                            ";
        }
        // line 23
        echo "                        </div>
                    </div>
                </div>
                ";
        // line 26
        if ( !(($context["oldObject"] ?? $this->getContext($context, "oldObject")) === null)) {
            // line 27
            echo "                    <div class=\"col-sm-6\">
                        <div class=\"card\">
                            <h5 class=\"card-header\"><i class=\"fas fa-file\"></i> Po edycji</h5>
                            <div class=\"card-body\">
                                ";
            // line 31
            if ((($context["place"] ?? $this->getContext($context, "place")) == "cards")) {
                // line 32
                echo "                                    ";
                $this->loadTemplate("Logs/admin_fragment_old_cards.html.twig", "Logs/admin_details.html.twig", 32)->display($context);
                // line 33
                echo "                                ";
            } elseif ((($context["place"] ?? $this->getContext($context, "place")) == "workers")) {
                // line 34
                echo "                                    ";
                $this->loadTemplate("Logs/admin_fragment_old_workers.html.twig", "Logs/admin_details.html.twig", 34)->display($context);
                // line 35
                echo "                                ";
            }
            // line 36
            echo "                            </div>
                        </div>
                    </div>
                ";
        } else {
            // line 40
            echo "
                ";
        }
        // line 42
        echo "
            </div>

            <br/>

            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"card\">
                        <h5 class=\"card-header\"><i class=\"fas fa-user\"></i> Użytkownik</h5>
                        <div class=\"card-body\">
                            <div class=\"row offset-1\">
                                <div class=\"col-sm-5\">
                                    <p>Login</p>
                                </div>
                                <div class=\"col-sm-5\">
                                    ";
        // line 57
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "usernameCanonical", [])), "html", null, true);
        echo "
                                </div>
                                <div class=\"col-sm-5\">
                                    <p>Adres E-mail</p>
                                </div>
                                <div class=\"col-sm-5\">
                                    ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "emailCanonical", []), "html", null, true);
        echo "
                                </div>
                                <div class=\"col-sm-5\">
                                    <p>Rola:</p>
                                </div>
                                <div class=\"col-sm-5\">
                                    ";
        // line 69
        if (($this->getAttribute($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "roles", []), 0, [], "array") == "ROLE_ADMIN")) {
            // line 70
            echo "                                        <p>Administrator</p>
                                    ";
        } else {
            // line 72
            echo "                                        <p>Użytkownik</p>
                                    ";
        }
        // line 74
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"card\">
                        <h5 class=\"card-header\"><i class=\"far fa-calendar-alt\"></i> Data</h5>
                        <div class=\"card-body\">
                            <div class=\"row offset-1\">
                                <div class=\"col-sm-5\">
                                    <p>Data</p>
                                </div>
                                <div class=\"col-sm-5\">
                                    ";
        // line 88
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "createdAt", []), "Y-m-d H:i:s"), "html", null, true);
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br/>

            <div class=\"card\">
                <div class=\"card-body center\">
                    <a href=\"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("logs_admin_index");
        echo "\">
                        <button type=\"button\" class=\"btn btn-outline-dark\">
                            <i class=\"fas fa-arrow-circle-left\"></i> Powrót
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <br/>
    <br/>
    <br/>
    <br/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Logs/admin_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 100,  184 => 88,  168 => 74,  164 => 72,  160 => 70,  158 => 69,  149 => 63,  140 => 57,  123 => 42,  119 => 40,  113 => 36,  110 => 35,  107 => 34,  104 => 33,  101 => 32,  99 => 31,  93 => 27,  91 => 26,  86 => 23,  83 => 22,  80 => 21,  77 => 20,  74 => 19,  72 => 18,  69 => 17,  65 => 15,  61 => 13,  59 => 12,  49 => 4,  40 => 3,  11 => 1,);
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
            <h5><i class=\"fas fa-align-justify\"></i> Wyświetl log</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"card\">
                        {% if logAction == \"add\"%}
                            <h5 class=\"card-header\"><i class=\"far fa-file\"></i> Nowy objekt</h5>
                        {% else %}
                            <h5 class=\"card-header\"><i class=\"far fa-file\"></i> Przed edycją</h5>
                        {% endif %}
                        <div class=\"card-body\">
                            {% if place == \"cards\" %}
                                {% include \"Logs/admin_fragment_cards.html.twig\" %}
                            {% elseif place == \"workers\" %}
                                {% include\"Logs/admin_fragment_workers.html.twig\" %}
                            {% endif %}
                        </div>
                    </div>
                </div>
                {% if oldObject is not same as(null) %}
                    <div class=\"col-sm-6\">
                        <div class=\"card\">
                            <h5 class=\"card-header\"><i class=\"fas fa-file\"></i> Po edycji</h5>
                            <div class=\"card-body\">
                                {% if place == \"cards\" %}
                                    {% include \"Logs/admin_fragment_old_cards.html.twig\" %}
                                {% elseif place == \"workers\" %}
                                    {% include \"Logs/admin_fragment_old_workers.html.twig\" %}
                                {% endif %}
                            </div>
                        </div>
                    </div>
                {% else %}

                {% endif %}

            </div>

            <br/>

            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"card\">
                        <h5 class=\"card-header\"><i class=\"fas fa-user\"></i> Użytkownik</h5>
                        <div class=\"card-body\">
                            <div class=\"row offset-1\">
                                <div class=\"col-sm-5\">
                                    <p>Login</p>
                                </div>
                                <div class=\"col-sm-5\">
                                    {{ user.usernameCanonical | capitalize }}
                                </div>
                                <div class=\"col-sm-5\">
                                    <p>Adres E-mail</p>
                                </div>
                                <div class=\"col-sm-5\">
                                    {{ user.emailCanonical }}
                                </div>
                                <div class=\"col-sm-5\">
                                    <p>Rola:</p>
                                </div>
                                <div class=\"col-sm-5\">
                                    {% if user.roles[0] == \"ROLE_ADMIN\" %}
                                        <p>Administrator</p>
                                    {% else %}
                                        <p>Użytkownik</p>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"card\">
                        <h5 class=\"card-header\"><i class=\"far fa-calendar-alt\"></i> Data</h5>
                        <div class=\"card-body\">
                            <div class=\"row offset-1\">
                                <div class=\"col-sm-5\">
                                    <p>Data</p>
                                </div>
                                <div class=\"col-sm-5\">
                                    {{ log.createdAt | date(\"Y-m-d H:i:s\") }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br/>

            <div class=\"card\">
                <div class=\"card-body center\">
                    <a href=\"{{ url('logs_admin_index') }}\">
                        <button type=\"button\" class=\"btn btn-outline-dark\">
                            <i class=\"fas fa-arrow-circle-left\"></i> Powrót
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <br/>
    <br/>
    <br/>
    <br/>
{% endblock %}", "Logs/admin_details.html.twig", "C:\\wamp64\\www\\rfid\\app\\Resources\\views\\Logs\\admin_details.html.twig");
    }
}
