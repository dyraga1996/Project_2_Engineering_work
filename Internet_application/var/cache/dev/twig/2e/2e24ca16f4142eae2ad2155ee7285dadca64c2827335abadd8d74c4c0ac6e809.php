<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_166dbb7a8c212d7eaff12eacc99e1b0368e22ad659b91851585d46ba83ee326d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "

";
        // line 4
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 5
            echo "    <div class=\"alert alert-danger\" role=\"alert\">
        <h4 align=\"center\" class=\"alert-heading\">Wystąpił błąd !</h4>
        <hr/>
        <p>";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", []), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", []), "security"), "html", null, true);
            echo "</p>
    </div>
";
        }
        // line 11
        echo "
<div class=\"card col-8 offset-2\" >
    <article class=\"card-body\">
    <h4 class=\"card-title text-center mb-4 mt-1\">Zaloguj</h4>
    <hr>
    <p class=\"text-success text-center\"></p> <!-- DO WYKORZYSTANIA -->
     <form action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
         ";
        // line 18
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 19
            echo "             <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
         ";
        }
        // line 21
        echo "                 <div class=\"form-group\">
                     <div class=\"input-group\">
                         <div class=\"input-group-prepend\">
                             <span class=\"input-group-text\"> <i class=\"fa fa-user\"></i> </span>
                         </div>
                         <input name=\"_username\" class=\"form-control\" placeholder=\"Login\" type=\"text\" id=\"username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" />
                     </div> <!-- input-group.// -->
                 </div> <!-- form-group// -->
                 <div class=\"form-group\">
                     <div class=\"input-group\">
                         <div class=\"input-group-prepend\">
                             <span class=\"input-group-text\"> <i class=\"fa fa-lock\"></i> </span>
                         </div>
                         <input class=\"form-control\" placeholder=\"Hasło\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
                     </div> <!-- input-group.// -->
                     <br/>
                     <div class=\"form-check\">
                         <input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                         <label class=\"form-check-label\" for=\"remember_me\">Zapamiętaj</label>
                     </div>
                 </div> <!-- form-group// -->
                 <div class=\"form-group col-3 offset-5 text-center\">
                     <input type=\"submit\" class=\"btn btn-primary btn-block\" id=\"_submit\" name=\"_submit\" value=\"Zaloguj\" />
                 </div> <!-- form-group// -->

     </div><!-- card.// -->
     </form>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 26,  62 => 21,  56 => 19,  54 => 18,  50 => 17,  42 => 11,  36 => 8,  31 => 5,  29 => 4,  25 => 2,);
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


{% if error %}
    <div class=\"alert alert-danger\" role=\"alert\">
        <h4 align=\"center\" class=\"alert-heading\">Wystąpił błąd !</h4>
        <hr/>
        <p>{{ error.messageKey|trans(error.messageData, 'security') }}</p>
    </div>
{% endif %}

<div class=\"card col-8 offset-2\" >
    <article class=\"card-body\">
    <h4 class=\"card-title text-center mb-4 mt-1\">Zaloguj</h4>
    <hr>
    <p class=\"text-success text-center\"></p> <!-- DO WYKORZYSTANIA -->
     <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
         {% if csrf_token %}
             <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
         {% endif %}
                 <div class=\"form-group\">
                     <div class=\"input-group\">
                         <div class=\"input-group-prepend\">
                             <span class=\"input-group-text\"> <i class=\"fa fa-user\"></i> </span>
                         </div>
                         <input name=\"_username\" class=\"form-control\" placeholder=\"Login\" type=\"text\" id=\"username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" />
                     </div> <!-- input-group.// -->
                 </div> <!-- form-group// -->
                 <div class=\"form-group\">
                     <div class=\"input-group\">
                         <div class=\"input-group-prepend\">
                             <span class=\"input-group-text\"> <i class=\"fa fa-lock\"></i> </span>
                         </div>
                         <input class=\"form-control\" placeholder=\"Hasło\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
                     </div> <!-- input-group.// -->
                     <br/>
                     <div class=\"form-check\">
                         <input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                         <label class=\"form-check-label\" for=\"remember_me\">Zapamiętaj</label>
                     </div>
                 </div> <!-- form-group// -->
                 <div class=\"form-group col-3 offset-5 text-center\">
                     <input type=\"submit\" class=\"btn btn-primary btn-block\" id=\"_submit\" name=\"_submit\" value=\"Zaloguj\" />
                 </div> <!-- form-group// -->

     </div><!-- card.// -->
     </form>", "@FOSUser/Security/login_content.html.twig", "C:\\wamp64\\www\\rfid\\app\\Resources\\FOSUserBundle\\views\\Security\\login_content.html.twig");
    }
}
