<?php

/* profil/saisieFrais.html.twig */
class __TwigTemplate_fb2c118aa730ca412a6468bfe523f107a8fe82ef17c50cf14f3624b281d4c7a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("profil/profil.html.twig", "profil/saisieFrais.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'main' => array($this, 'block_main'),
            'menu' => array($this, 'block_menu'),
            'contenu' => array($this, 'block_contenu'),
            'affichage' => array($this, 'block_affichage'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "profil/profil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profil/saisieFrais.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profil/saisieFrais.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-4 col-md-3\">
                ";
        // line 9
        $this->displayBlock('menu', $context, $blocks);
        // line 52
        echo "            </div>


            ";
        // line 56
        echo "            <div class=\"col-sm\">
                ";
        // line 57
        $this->displayBlock('contenu', $context, $blocks);
        // line 83
        echo "            </div>
            ";
        // line 85
        echo "            <div class=\"col-sm-4 col-md-3\">
                ";
        // line 86
        $this->displayBlock('affichage', $context, $blocks);
        // line 88
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 10
        echo "                    <div class=\"container-fluid\">
                        <div class ='row'>
                            <nav class=\"col-sm hidden-xs-down bg-faded sidebar\">
                                <div id=\"navLateral\">
                                    <ul class=\"nav nav-pills flex-column\">
                                        <li class=\"nav-item\" >
                                            <a class=\"nav-link\" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_homepage");
        echo "\">Menu<i class=\"fas fa-angle-left\"></i></a>
                                        </li>
                                    </ul>
                                    <hr>

                                    <ul class=\"nav nav-pills flex-column\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link active\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_saisie_frais");
        echo "\">Saisie des frais<span class=\"sr-only\">(current)</span><i class=\"far fa-edit\"></i></a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Fiche du mois <i class=\"fas fa-book\"></i></a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Historique</a>
                                        </li>
                                    </ul>

                                    <hr>

                                    <ul class=\"nav nav-pills flex-column\">

                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Changer de mot de passe <i class=\"fas fa-key\"></i></a>
                                        </li>

                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Se déconnecter <i class=\"fas fa-power-off\"></i></a>

                                        </li>
                                    </ul>

                                </div>
                            </nav>
                        </div>
                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 58
        echo "                    <div class=\"jumbotron jumbotron-fluid\">
                        <div class=\"container-fluid\">
                            ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                                <div class=\"form-group\">
                                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prdEngag", array()), 'row');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "repasMidi", array()), 'row');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuitees", array()), 'row');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuitees", array()), 'row');
        echo "
                                </div>

                            <br>
                                <div id=\"divSave\">
                                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'row');
        echo "
                                </div>
                            ";
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                    </div>

                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 86
    public function block_affichage($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "affichage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "affichage"));

        // line 87
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 93
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 94
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profil/saisieFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 98,  286 => 97,  273 => 94,  264 => 93,  254 => 87,  245 => 86,  230 => 78,  225 => 76,  217 => 71,  211 => 68,  205 => 65,  199 => 62,  194 => 60,  190 => 58,  181 => 57,  142 => 23,  132 => 16,  124 => 10,  115 => 9,  102 => 88,  100 => 86,  97 => 85,  94 => 83,  92 => 57,  89 => 56,  84 => 52,  82 => 9,  77 => 6,  68 => 5,  55 => 3,  46 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'profil/profil.html.twig' %}
{% block stylesheet %}
    {{ parent() }}
{% endblock stylesheet %}
{% block main %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-4 col-md-3\">
                {% block menu %}
                    <div class=\"container-fluid\">
                        <div class ='row'>
                            <nav class=\"col-sm hidden-xs-down bg-faded sidebar\">
                                <div id=\"navLateral\">
                                    <ul class=\"nav nav-pills flex-column\">
                                        <li class=\"nav-item\" >
                                            <a class=\"nav-link\" href=\"{{ path('gsb_profil_homepage') }}\">Menu<i class=\"fas fa-angle-left\"></i></a>
                                        </li>
                                    </ul>
                                    <hr>

                                    <ul class=\"nav nav-pills flex-column\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link active\" href=\"{{ path('gsb_profil_saisie_frais') }}\">Saisie des frais<span class=\"sr-only\">(current)</span><i class=\"far fa-edit\"></i></a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Fiche du mois <i class=\"fas fa-book\"></i></a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Historique</a>
                                        </li>
                                    </ul>

                                    <hr>

                                    <ul class=\"nav nav-pills flex-column\">

                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Changer de mot de passe <i class=\"fas fa-key\"></i></a>
                                        </li>

                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Se déconnecter <i class=\"fas fa-power-off\"></i></a>

                                        </li>
                                    </ul>

                                </div>
                            </nav>
                        </div>
                    </div>
                {% endblock menu %}
            </div>


            {# formulaire au millieur de la page #}
            <div class=\"col-sm\">
                {% block contenu %}
                    <div class=\"jumbotron jumbotron-fluid\">
                        <div class=\"container-fluid\">
                            {{ form_start(form) }}
                                <div class=\"form-group\">
                                    {{ form_row(form.prdEngag) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_row(form.repasMidi) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_row(form.nuitees) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_row(form.nuitees) }}
                                </div>

                            <br>
                                <div id=\"divSave\">
                                {{ form_row(form.save) }}
                                </div>
                            {{ form_end(form) }}
                        </div>
                    </div>

                {% endblock contenu %}
            </div>
            {# affichage sur le côté droit de la page#}
            <div class=\"col-sm-4 col-md-3\">
                {% block affichage %}
                {% endblock affichage %}
            </div>
        </div>
    </div>
{% endblock %}

{% block footer %}
    {{ parent() }}
{% endblock footer %}

{% block javascripts %}
    {{ parent() }}
{% endblock javascripts %}", "profil/saisieFrais.html.twig", "/var/www/html/GitGsbFrais/app/Resources/views/profil/saisieFrais.html.twig");
    }
}
