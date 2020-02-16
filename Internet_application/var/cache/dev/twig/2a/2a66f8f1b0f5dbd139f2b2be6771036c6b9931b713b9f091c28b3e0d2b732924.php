<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_2bc9d5a35b3e032fcc0568225fbd756afaaafb809696ee355b2d01728949a009 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-9  offset-md-2  toppad\" >
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h2 class=\"card-title\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", []), "html", null, true);
        echo "</h2>
                        <table class=\"table table-user-information \">
                            <tbody>
                            <tr>
                                <td>Adres E-Mail:</td>
                                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", []), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td>Data ostatniego logowania:</td>
                                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "lastlogin", []), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td>Poziom uprawnień:</td>
                                ";
        // line 22
        if (($this->getAttribute($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "roles", []), 0, [], "array") == "ROLE_ADMIN")) {
            // line 23
            echo "                                <td>Administrator</td>
                                ";
        }
        // line 25
        echo "                                ";
        if (($this->getAttribute($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "roles", []), 0, [], "array") == "ROLE_USER")) {
            // line 26
            echo "                                    <td>Użytkownik</td>
                                ";
        }
        // line 28
        echo "                            </tr>
                            </tbody>
                        </table>
                        <div class=\"float-left\">
                            <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_profile_edit");
        echo "\" class=\"btn btn-primary ml-2\">Edytuj dane</a>
                        </div>
                        <div class=\"float-right\">
                            <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_change_password");
        echo "\" class=\"btn btn-primary ml-2\">Zmień Hasło</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 35,  75 => 32,  69 => 28,  65 => 26,  62 => 25,  58 => 23,  56 => 22,  49 => 18,  42 => 14,  34 => 9,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-9  offset-md-2  toppad\" >
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h2 class=\"card-title\">{{ user.username }}</h2>
                        <table class=\"table table-user-information \">
                            <tbody>
                            <tr>
                                <td>Adres E-Mail:</td>
                                <td>{{ user.email }}</td>
                            </tr>
                            <tr>
                                <td>Data ostatniego logowania:</td>
                                <td>{{ user.lastlogin|date('Y-m-d H:i:s') }}</td>
                            </tr>
                            <tr>
                                <td>Poziom uprawnień:</td>
                                {% if user.roles[0] == 'ROLE_ADMIN' %}
                                <td>Administrator</td>
                                {% endif %}
                                {% if user.roles[0] == 'ROLE_USER' %}
                                    <td>Użytkownik</td>
                                {% endif %}
                            </tr>
                            </tbody>
                        </table>
                        <div class=\"float-left\">
                            <a href=\"{{ url('fos_user_profile_edit') }}\" class=\"btn btn-primary ml-2\">Edytuj dane</a>
                        </div>
                        <div class=\"float-right\">
                            <a href=\"{{ url('fos_user_change_password') }}\" class=\"btn btn-primary ml-2\">Zmień Hasło</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "@FOSUser/Profile/show_content.html.twig", "C:\\wamp64\\www\\rfid\\app\\Resources\\FOSUserBundle\\views\\Profile\\show_content.html.twig");
    }
}
