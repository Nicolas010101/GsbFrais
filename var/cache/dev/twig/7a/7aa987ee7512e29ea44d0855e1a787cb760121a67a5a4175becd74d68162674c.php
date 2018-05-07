<?php

/* profil/ficheMois.html.twig */
class __TwigTemplate_a8f073e8474127eee344c054e97dfadc57fb955e4fe4ca98d31987be2e9e0985 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("profil/profil.html.twig", "profil/ficheMois.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylsheet' => array($this, 'block_stylsheet'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'menu' => array($this, 'block_menu'),
            'contenu' => array($this, 'block_contenu'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profil/ficheMois.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profil/ficheMois.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayBlock('stylsheet', $context, $blocks);
        // line 7
        echo "
    ";
        // line 8
        $this->displayBlock('header', $context, $blocks);
        // line 11
        echo "    ";
        $this->displayBlock('main', $context, $blocks);
        // line 229
        echo "
    ";
        // line 230
        $this->displayBlock('footer', $context, $blocks);
        // line 233
        echo "
    ";
        // line 234
        $this->displayBlock('javascripts', $context, $blocks);
        // line 237
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_stylsheet($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylsheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylsheet"));

        // line 4
        echo "        ";
        $this->displayParentBlock("stylsheet", $context, $blocks);
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/styleFicheMois.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "        ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 12
        echo "        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-sm-4 col-md-3\">
                    ";
        // line 15
        $this->displayBlock('menu', $context, $blocks);
        // line 58
        echo "                </div>



                <div class=\"col-sm-9\">
                    ";
        // line 63
        $this->displayBlock('contenu', $context, $blocks);
        // line 223
        echo "                </div>


            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 16
        echo "                        <div class=\"container-fluid\">
                            <div class ='row'>
                                <nav class=\"col-sm hidden-xs-down bg-faded sidebar\">
                                    <div id=\"navLateral\">
                                        <ul class=\"nav nav-pills flex-column\">
                                            <li class=\"nav-item\" >
                                                <a class=\"nav-link\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_homepage");
        echo "\">Menu<i class=\"fab fa-elementor\"></i></a>
                                            </li>
                                        </ul>
                                        <hr>

                                        <ul class=\"nav nav-pills flex-column\">
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_saisie_frais");
        echo "\">Saisie des frais<i class=\"far fa-edit\"></i></a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link active\" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_afficher_mois");
        echo "\">Fiche du mois <i class=\"fas fa-angle-left\"></i><span class=\"sr-only\">(current)</span></a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_historique");
        echo "\">Historique<i class=\"fas fa-history\"></i></a>
                                            </li>
                                        </ul>

                                        <hr>

                                        <ul class=\"nav nav-pills flex-column\">

                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_frais_edit_mdp");
        echo "\">Changer de mot de passe <i class=\"fas fa-key\"></i></a>
                                            </li>

                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_frais_accueil_deco");
        echo "\">Se déconnecter <i class=\"fas fa-power-off\"></i></a>

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

    // line 63
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 64
        echo "                        ";
        // line 65
        echo "                        ";
        if (($context["dateModif"] ?? $this->getContext($context, "dateModif"))) {
            // line 66
            echo "                            <div class=\"container2\">
                                ";
            // line 68
            echo "                                <h5>Dernière modification le : ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["dateModif"] ?? $this->getContext($context, "dateModif")), "d/m/Y"), "html", null, true);
            echo "</h5>
                            </div>
                        ";
        }
        // line 71
        echo "                        <div class=\"jumbotron jumbotron-fluid\">

                            <div class=\"container\">
                                <h1> Fiche des frais </h1>
                                <h3>";
        // line 75
        echo twig_escape_filter($this->env, ($context["dateDebut"] ?? $this->getContext($context, "dateDebut")), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, ($context["dateFin"] ?? $this->getContext($context, "dateFin")), "html", null, true);
        echo "</h3>
                                <!--ee-->
                                <a class=\"btn btn-outline-success my-2 my-sm-0\" href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_saisie_frais");
        echo "\"> Modifier la fiche de frais </a>
                            </div>
                        </div>

                        ";
        // line 82
        echo "                        <table class=\"table\">
                            <tr>
                                <th class=\"table-info\" id=\"bordureLeft\" scope=\"row\">";
        // line 84
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "état "), "html", null, true);
        echo "de la fiche : </th>
                                <td colspan=\"3\" class=\"table-info\" id=\"bordureRight\" >";
        // line 85
        echo twig_escape_filter($this->env, ($context["etat"] ?? $this->getContext($context, "etat")), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"table-info\" id=\"bordureLeft\" scope=\"row\">Total des frais : </th>
                                <td class=\"table-info\" id=\"bordureRight\" >";
        // line 89
        echo twig_escape_filter($this->env, ($context["totalFiche"] ?? $this->getContext($context, "totalFiche")), "html", null, true);
        echo "€</td>
                                <th class=\"table-warning\" id=\"bordureLeft\" scope=\"row\">Frais validés : </th>
                                <td class=\"table-warning\" id=\"bordureRight\" >";
        // line 91
        echo twig_escape_filter($this->env, ($context["totalValide"] ?? $this->getContext($context, "totalValide")), "html", null, true);
        echo "€</td>
                            </tr>
                        </table>




                        <br>

                        <div class=\"container\">
                            <h3>Récapitulatif des frais forfaitisés</h3>
                        </div>
                        ";
        // line 104
        echo "                        ";
        if (($context["lesFraisForfaits"] ?? $this->getContext($context, "lesFraisForfaits"))) {
            // line 105
            echo "
                            ";
            // line 107
            echo "                            <table class=\"table\">
                                <thead class=\"thead-light\">
                                    <tr>
                                        ";
            // line 111
            echo "                                        <th scope=\"col\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "forfait"), "html", null, true);
            echo "</th>
                                        ";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lesFraisForfaits"] ?? $this->getContext($context, "lesFraisForfaits")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["leFraisForfaits"]) {
                // line 113
                echo "                                            <th scope=\"col\">";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["leFraisForfaits"], "libelleFraisForfait", array(), "array")), "html", null, true);
                echo "</th>
                                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 115
                echo "                                            La liste est Vide
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leFraisForfaits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        ";
            // line 122
            echo "                                        <th scope=\"row\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "prix unitaire"), "html", null, true);
            echo "</th>
                                        ";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lesFraisForfaits"] ?? $this->getContext($context, "lesFraisForfaits")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["leFraisForfaits"]) {
                // line 124
                echo "                                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["leFraisForfaits"], "montantFraisForfait", array(), "array"), "html", null, true);
                echo "€</td>
                                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 126
                echo "                                            La liste est Vide
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leFraisForfaits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "                                    </tr>
                                    <tr>
                                        ";
            // line 131
            echo "                                        <th scope=\"row\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "quantité"), "html", null, true);
            echo "</th>
                                        ";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lesFraisForfaits"] ?? $this->getContext($context, "lesFraisForfaits")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["leFraisForfaits"]) {
                // line 133
                echo "                                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["leFraisForfaits"], "quantite", array(), "array"), "html", null, true);
                echo "</td>
                                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 135
                echo "                                            La liste est Vide
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leFraisForfaits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "                                    </tr>
                                    <tr>
                                        ";
            // line 140
            echo "                                        <th scope=\"row\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "frais"), "html", null, true);
            echo "</th>
                                        ";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lesFraisForfaits"] ?? $this->getContext($context, "lesFraisForfaits")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["leFraisForfaits"]) {
                // line 142
                echo "                                            <td>";
                echo twig_escape_filter($this->env, ($this->getAttribute($context["leFraisForfaits"], "quantite", array(), "array") * $this->getAttribute($context["leFraisForfaits"], "montantFraisForfait", array(), "array")), "html", null, true);
                echo "€ </td>
                                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 144
                echo "                                            La liste est Vide
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leFraisForfaits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo "                                    </tr>
                                    <tr id=\"bordure\" style=\"background-color: #28a74599\">
                                        ";
            // line 149
            echo "                                        <th scope=\"row\" >";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "total"), "html", null, true);
            echo "</th>
                                        <td id=\"placeTotal\" colspan=\"";
            // line 150
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["lesFraisForfaits"] ?? $this->getContext($context, "lesFraisForfaits"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["totalFraisForfait"] ?? $this->getContext($context, "totalFraisForfait")), "html", null, true);
            echo "€ </td>
                                    </tr>
                                </tbody>
                            </table>
                        ";
            // line 155
            echo "                        ";
        } else {
            // line 156
            echo "                            <div class=\"jumbotron jumbotron-fluid\">
                                <div class=\"container\">

                                    <h4>Aucun frais forfaitaire n'a été ajouté pour le moment</h4>
                                    <a class=\"btn btn-outline-success my-2 my-sm-0\" href=\"";
            // line 160
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_saisie_frais");
            echo "\"> Ajouter des frais </a>
                                    <!--ee-->
                                </div>
                            </div>
                        ";
        }
        // line 165
        echo "
                        <br><hr><br>

                        <div class=\"container\">
                            <h3>Récapitulatif des frais non forfaitisés</h3>
                        </div>
                        ";
        // line 172
        echo "                        ";
        if (($context["lesFraisHorsForfaits"] ?? $this->getContext($context, "lesFraisHorsForfaits"))) {
            // line 173
            echo "                            ";
            // line 174
            echo "                            <table class=\"table\">
                                <thead class=\"thead-light\">
                                <tr>
                                    ";
            // line 178
            echo "                                    <th scope=\"col\"></th>
                                    <th scope=\"col\">";
            // line 179
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "date"), "html", null, true);
            echo "</th>
                                    <th scope=\"col\">";
            // line 180
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "description"), "html", null, true);
            echo "</th>
                                    <th scope=\"col\">";
            // line 181
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "montant"), "html", null, true);
            echo "</th>
                                </tr>
                                </thead>
                                <tbody>

                                    ";
            // line 187
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lesFraisHorsForfaits"] ?? $this->getContext($context, "lesFraisHorsForfaits")));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["leFraisHorsForfaits"]) {
                // line 188
                echo "                                        <tr>
                                            <th scope=\"row\">";
                // line 189
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
                                            <td>";
                // line 190
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["leFraisHorsForfaits"], "date", array(), "array"), "d/m/Y"), "html", null, true);
                echo "</td>
                                            <td>";
                // line 191
                echo twig_escape_filter($this->env, $this->getAttribute($context["leFraisHorsForfaits"], "libelle", array(), "array"), "html", null, true);
                echo "</td>
                                            <td>";
                // line 192
                echo twig_escape_filter($this->env, $this->getAttribute($context["leFraisHorsForfaits"], "montant", array(), "array"), "html", null, true);
                echo "€</td>
                                        </tr>
                                    ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 195
                echo "                                        La liste est Vide
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leFraisHorsForfaits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "
                                    <tr style=\"background-color: #28a74599\" id=\"bordure\">
                                        ";
            // line 200
            echo "                                        <th scope=\"row\" >";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "total"), "html", null, true);
            echo "</th>
                                        <td id=\"placeTotal\" colspan=\"3\">";
            // line 201
            echo twig_escape_filter($this->env, ($context["totalFraisNonForfait"] ?? $this->getContext($context, "totalFraisNonForfait")), "html", null, true);
            echo "€ </td>
                                    </tr>
                                    <tr style=\"background-color: #b1575099\" id=\"bordure\">
                                        ";
            // line 205
            echo "                                        <th scope=\"row\" colspan=\"2\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Nombre de justificatifs fournis"), "html", null, true);
            echo "</th>
                                        <td colspan=\"2\">";
            // line 206
            echo twig_escape_filter($this->env, ($context["nbJustificatif"] ?? $this->getContext($context, "nbJustificatif")), "html", null, true);
            echo " </td>
                                    </tr>
                                </tbody>
                            </table>
                            ";
            // line 211
            echo "                        ";
        } else {
            // line 212
            echo "                            <div class=\"jumbotron jumbotron-fluid\">
                                <div class=\"container\">

                                    <h4>Aucun frais non forfaitisé n'a été ajouté pour le moment</h4>
                                    <a class=\"btn btn-outline-success my-2 my-sm-0\" href=\"";
            // line 216
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_saisie_frais");
            echo "\"> Ajouter des frais </a>
                                    <!--ee-->
                                </div>
                            </div>
                        ";
        }
        // line 221
        echo "
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 230
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 231
        echo "        ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 234
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 235
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profil/ficheMois.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  673 => 235,  664 => 234,  651 => 231,  642 => 230,  631 => 221,  623 => 216,  617 => 212,  614 => 211,  607 => 206,  602 => 205,  596 => 201,  591 => 200,  587 => 197,  580 => 195,  564 => 192,  560 => 191,  556 => 190,  552 => 189,  549 => 188,  530 => 187,  522 => 181,  518 => 180,  514 => 179,  511 => 178,  506 => 174,  504 => 173,  501 => 172,  493 => 165,  485 => 160,  479 => 156,  476 => 155,  467 => 150,  462 => 149,  458 => 146,  451 => 144,  443 => 142,  438 => 141,  433 => 140,  429 => 137,  422 => 135,  414 => 133,  409 => 132,  404 => 131,  400 => 128,  393 => 126,  385 => 124,  380 => 123,  375 => 122,  369 => 117,  362 => 115,  354 => 113,  349 => 112,  344 => 111,  339 => 107,  336 => 105,  333 => 104,  318 => 91,  313 => 89,  306 => 85,  302 => 84,  298 => 82,  291 => 77,  284 => 75,  278 => 71,  271 => 68,  268 => 66,  265 => 65,  263 => 64,  254 => 63,  234 => 48,  227 => 44,  215 => 35,  209 => 32,  203 => 29,  193 => 22,  185 => 16,  176 => 15,  161 => 223,  159 => 63,  152 => 58,  150 => 15,  145 => 12,  136 => 11,  123 => 9,  114 => 8,  102 => 5,  97 => 4,  88 => 3,  77 => 237,  75 => 234,  72 => 233,  70 => 230,  67 => 229,  64 => 11,  62 => 8,  59 => 7,  56 => 3,  47 => 2,  11 => 1,);
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
{% block body %}
    {% block stylsheet %}
        {{ parent() }}
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/styleFicheMois.css') }}\">
    {% endblock %}

    {% block header %}
        {{ parent() }}
    {% endblock header%}
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
                                                <a class=\"nav-link\" href=\"{{ path('gsb_profil_homepage') }}\">Menu<i class=\"fab fa-elementor\"></i></a>
                                            </li>
                                        </ul>
                                        <hr>

                                        <ul class=\"nav nav-pills flex-column\">
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"{{ path('gsb_profil_saisie_frais') }}\">Saisie des frais<i class=\"far fa-edit\"></i></a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link active\" href=\"{{ path('gsb_profil_afficher_mois') }}\">Fiche du mois <i class=\"fas fa-angle-left\"></i><span class=\"sr-only\">(current)</span></a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"{{ path('gsb_profil_historique') }}\">Historique<i class=\"fas fa-history\"></i></a>
                                            </li>
                                        </ul>

                                        <hr>

                                        <ul class=\"nav nav-pills flex-column\">

                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"{{ path('gsb_frais_edit_mdp') }}\">Changer de mot de passe <i class=\"fas fa-key\"></i></a>
                                            </li>

                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"{{ path('gsb_frais_accueil_deco') }}\">Se déconnecter <i class=\"fas fa-power-off\"></i></a>

                                            </li>
                                        </ul>

                                    </div>
                                </nav>
                            </div>
                        </div>
                    {% endblock menu %}
                </div>



                <div class=\"col-sm-9\">
                    {% block contenu %}
                        {# SI FICHE FRAIS N'EST PAS VIDE#}
                        {% if dateModif %}
                            <div class=\"container2\">
                                {#{{ dump(ficheFrais[0]) }}#}
                                <h5>Dernière modification le : {{ dateModif | date(\"d/m/Y\") }}</h5>
                            </div>
                        {% endif %}
                        <div class=\"jumbotron jumbotron-fluid\">

                            <div class=\"container\">
                                <h1> Fiche des frais </h1>
                                <h3>{{ dateDebut }} - {{ dateFin }}</h3>
                                <!--ee-->
                                <a class=\"btn btn-outline-success my-2 my-sm-0\" href=\"{{ path('gsb_profil_saisie_frais') }}\"> Modifier la fiche de frais </a>
                            </div>
                        </div>

                        {#TOTAUX DE LA FICHE#}
                        <table class=\"table\">
                            <tr>
                                <th class=\"table-info\" id=\"bordureLeft\" scope=\"row\">{{ \"état \" | title }}de la fiche : </th>
                                <td colspan=\"3\" class=\"table-info\" id=\"bordureRight\" >{{ etat }}</td>
                            </tr>
                            <tr>
                                <th class=\"table-info\" id=\"bordureLeft\" scope=\"row\">Total des frais : </th>
                                <td class=\"table-info\" id=\"bordureRight\" >{{ totalFiche }}€</td>
                                <th class=\"table-warning\" id=\"bordureLeft\" scope=\"row\">Frais validés : </th>
                                <td class=\"table-warning\" id=\"bordureRight\" >{{ totalValide }}€</td>
                            </tr>
                        </table>




                        <br>

                        <div class=\"container\">
                            <h3>Récapitulatif des frais forfaitisés</h3>
                        </div>
                        {# S'IL Y A DES FRAIS FORFAIT A AFFICHER#}
                        {% if lesFraisForfaits %}

                            {#CREATION TABLE RESPONSIVE#}
                            <table class=\"table\">
                                <thead class=\"thead-light\">
                                    <tr>
                                        {#POUR CHAQUE FRAIS FORFAIT ON AFFICHE L'INTITULE DU FRAIS FORFAIT#}
                                        <th scope=\"col\">{{ \"forfait\" | title }}</th>
                                        {% for leFraisForfaits  in lesFraisForfaits %}
                                            <th scope=\"col\">{{ leFraisForfaits[\"libelleFraisForfait\"] | title }}</th>
                                        {% else %}
                                            La liste est Vide
                                        {% endfor %}
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        {#POUR CHAQUE FRAIS FORFAIT ON AFFICHE LE MONTANT DU FRAIS FORFAIT#}
                                        <th scope=\"row\">{{ \"prix unitaire\" | upper }}</th>
                                        {% for leFraisForfaits  in lesFraisForfaits %}
                                            <td>{{ leFraisForfaits[\"montantFraisForfait\"] }}€</td>
                                        {% else %}
                                            La liste est Vide
                                        {% endfor %}
                                    </tr>
                                    <tr>
                                        {#POUR CHAQUE FRAIS FORFAIT ON AFFICHE LA QUANTITE DU FRAIS FORFAIT#}
                                        <th scope=\"row\">{{ \"quantité\" | upper }}</th>
                                        {% for leFraisForfaits  in lesFraisForfaits %}
                                            <td>{{ leFraisForfaits[\"quantite\"] }}</td>
                                        {% else %}
                                            La liste est Vide
                                        {% endfor %}
                                    </tr>
                                    <tr>
                                        {#POUR CHAQUE FRAIS FORFAIT ON AFFICHE LE TOTAL DES FORFAIT#}
                                        <th scope=\"row\">{{ \"frais\" | upper }}</th>
                                        {% for leFraisForfaits  in lesFraisForfaits %}
                                            <td>{{ leFraisForfaits[\"quantite\"] * leFraisForfaits[\"montantFraisForfait\"] }}€ </td>
                                        {% else %}
                                            La liste est Vide
                                        {% endfor %}
                                    </tr>
                                    <tr id=\"bordure\" style=\"background-color: #28a74599\">
                                        {#POUR CHAQUE FRAIS FORFAIT ON AFFICHE LE TOTAL DES FRAIS FORFAIT#}
                                        <th scope=\"row\" >{{ \"total\" | upper }}</th>
                                        <td id=\"placeTotal\" colspan=\"{{ lesFraisForfaits | length }}\">{{ totalFraisForfait }}€ </td>
                                    </tr>
                                </tbody>
                            </table>
                        {# S'IL N'Y A PAS DE FRAIS FORFAIT A AFFICHER -> proposer renvoie page de saisie #}
                        {% else %}
                            <div class=\"jumbotron jumbotron-fluid\">
                                <div class=\"container\">

                                    <h4>Aucun frais forfaitaire n'a été ajouté pour le moment</h4>
                                    <a class=\"btn btn-outline-success my-2 my-sm-0\" href=\"{{ path('gsb_profil_saisie_frais') }}\"> Ajouter des frais </a>
                                    <!--ee-->
                                </div>
                            </div>
                        {% endif %}

                        <br><hr><br>

                        <div class=\"container\">
                            <h3>Récapitulatif des frais non forfaitisés</h3>
                        </div>
                        {# S'IL Y A DES FRAIS HORS FORFAIT A AFFICHER#}
                        {% if lesFraisHorsForfaits %}
                            {#CREATION TABLE RESPONSIVE#}
                            <table class=\"table\">
                                <thead class=\"thead-light\">
                                <tr>
                                    {#HEADER TABLE#}
                                    <th scope=\"col\"></th>
                                    <th scope=\"col\">{{ \"date\" | title }}</th>
                                    <th scope=\"col\">{{ \"description\" | title }}</th>
                                    <th scope=\"col\">{{ \"montant\" | title }}</th>
                                </tr>
                                </thead>
                                <tbody>

                                    {#POUR CHAQUE FRAIS HORS FORFAIT ON AFFICHE LES INFOS#}
                                    {% for leFraisHorsForfaits  in lesFraisHorsForfaits %}
                                        <tr>
                                            <th scope=\"row\">{{ loop.index }}</th>
                                            <td>{{ leFraisHorsForfaits[\"date\"] | date('d/m/Y') }}</td>
                                            <td>{{ leFraisHorsForfaits[\"libelle\"] }}</td>
                                            <td>{{ leFraisHorsForfaits[\"montant\"] }}€</td>
                                        </tr>
                                    {% else %}
                                        La liste est Vide
                                    {% endfor %}

                                    <tr style=\"background-color: #28a74599\" id=\"bordure\">
                                        {#POUR CHAQUE FRAIS FORFAIT ON AFFICHE LE TOTAL DES FRAIS FORFAIT#}
                                        <th scope=\"row\" >{{ \"total\" | upper }}</th>
                                        <td id=\"placeTotal\" colspan=\"3\">{{ totalFraisNonForfait }}€ </td>
                                    </tr>
                                    <tr style=\"background-color: #b1575099\" id=\"bordure\">
                                        {#POUR CHAQUE FRAIS FORFAIT ON AFFICHE LE TOTAL DES FRAIS FORFAIT#}
                                        <th scope=\"row\" colspan=\"2\">{{ \"Nombre de justificatifs fournis\" | upper }}</th>
                                        <td colspan=\"2\">{{ nbJustificatif }} </td>
                                    </tr>
                                </tbody>
                            </table>
                            {# S'IL N'Y A PAS DE FRAIS HORS FORFAIT A AFFICHER -> proposer renvoie page de saisie #}
                        {% else %}
                            <div class=\"jumbotron jumbotron-fluid\">
                                <div class=\"container\">

                                    <h4>Aucun frais non forfaitisé n'a été ajouté pour le moment</h4>
                                    <a class=\"btn btn-outline-success my-2 my-sm-0\" href=\"{{ path('gsb_profil_saisie_frais') }}\"> Ajouter des frais </a>
                                    <!--ee-->
                                </div>
                            </div>
                        {% endif %}

                    {% endblock contenu %}
                </div>


            </div>
        </div>
    {% endblock %}

    {% block footer %}
        {{ parent() }}
    {% endblock footer %}

    {% block javascripts %}
        {{ parent() }}
    {% endblock javascripts %}

{% endblock %}", "profil/ficheMois.html.twig", "/var/www/html/GitGsbFrais/app/Resources/views/profil/ficheMois.html.twig");
    }
}
