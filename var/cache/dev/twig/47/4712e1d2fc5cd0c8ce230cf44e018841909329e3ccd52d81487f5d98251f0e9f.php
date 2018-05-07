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
    <style>


    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 10
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-4 col-md-3\">
                ";
        // line 13
        $this->displayBlock('menu', $context, $blocks);
        // line 56
        echo "            </div>


            ";
        // line 60
        echo "            <div class=\"col-sm\">
                ";
        // line 61
        $this->displayBlock('contenu', $context, $blocks);
        // line 139
        echo "            </div>
            ";
        // line 141
        echo "            <div class=\"col-sm-5 col-md-5\">
                ";
        // line 142
        $this->displayBlock('affichage', $context, $blocks);
        // line 300
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 14
        echo "                    <div class=\"container-fluid\">
                        <div class ='row'>
                            <nav class=\"col-sm hidden-xs-down bg-faded sidebar\">
                                <div id=\"navLateral\">
                                    <ul class=\"nav nav-pills flex-column\">
                                        <li class=\"nav-item\" >
                                            <a class=\"nav-link\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_homepage");
        echo "\">Menu<i class=\"fab fa-elementor\"></i></a>
                                        </li>
                                    </ul>
                                    <hr>

                                    <ul class=\"nav nav-pills flex-column\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link active\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_saisie_frais");
        echo "\">Saisie des frais<i class=\"fas fa-angle-left\"></i><span class=\"sr-only\">(current)</span></a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_afficher_mois");
        echo "\">Fiche du mois <i class=\"fas fa-book\"></i></a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_historique");
        echo "\">Historique<i class=\"fas fa-history\"></i></a>
                                        </li>
                                    </ul>

                                    <hr>

                                    <ul class=\"nav nav-pills flex-column\">

                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_frais_edit_mdp");
        echo "\">Changer de mot de passe <i class=\"fas fa-key\"></i></a>
                                        </li>

                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"";
        // line 46
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

    // line 61
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 62
        echo "                    <div class=\"jumbotron jumbotron-fluid\">
                        <h1 style=\"text-align: center\">Frais forfaitisés</h1>
                        <div class=\"container-fluid\">
                            ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            ";
        // line 70
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), 1, array()), 'row');
        echo "
                                        </div>
                                        <div class=\"col\">
                                            ";
        // line 74
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), 2, array()), 'row');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            ";
        // line 82
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), 3, array()), 'row');
        echo "
                                        </div>
                                        <div class=\"col\">
                                            ";
        // line 86
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), 4, array()), 'row');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class=\"form-group\">
                                    <div class=\"row\" style=\"padding-left: 5%\">
                                            ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'row');
        echo "

                                            ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cancel", array()), 'row');
        echo "
                                    </div>
                                </div>
                            ";
        // line 98
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                    </div>

                    <div class=\"jumbotron jumbotron-fluid\">
                        <h1  style=\"text-align: center\">Frais non forfaitisés</h1>
                        <div class=\"container-fluid\">
                            ";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form2"] ?? $this->getContext($context, "form2")), 'form_start');
        echo "
                            <div class=\"form-group\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form2"] ?? $this->getContext($context, "form2")), "jour", array()), 'row');
        echo "
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form2"] ?? $this->getContext($context, "form2")), "mois", array()), 'row');
        echo "
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form2"] ?? $this->getContext($context, "form2")), "annee", array()), 'row');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form2"] ?? $this->getContext($context, "form2")), "description", array()), 'row');
        echo "
                            </div>
                            <div class=\"form-group\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form2"] ?? $this->getContext($context, "form2")), "montant", array()), 'row');
        echo "
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form2"] ?? $this->getContext($context, "form2")), "save", array()), 'row');
        echo "
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form2"] ?? $this->getContext($context, "form2")), "cancel", array()), 'row');
        echo "
                                    </div>
                                </div>
                            </div>
                            ";
        // line 135
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form2"] ?? $this->getContext($context, "form2")), 'form_end');
        echo "
                        </div>
                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 142
    public function block_affichage($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "affichage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "affichage"));

        // line 143
        echo "                    ";
        // line 144
        echo "                    ";
        if (($context["dateModif"] ?? $this->getContext($context, "dateModif"))) {
            // line 145
            echo "                        <div class=\"container2\">
                            ";
            // line 147
            echo "                            <h5>Dernière modification le : ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["dateModif"] ?? $this->getContext($context, "dateModif")), "d/m/Y"), "html", null, true);
            echo "</h5>
                        </div>
                    ";
        }
        // line 150
        echo "                    <div class=\"jumbotron jumbotron-fluid\">

                        <div class=\"container\">
                            <h1> Fiche des frais </h1>
                            <h3>";
        // line 154
        echo twig_escape_filter($this->env, ($context["dateDebut"] ?? $this->getContext($context, "dateDebut")), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, ($context["dateFin"] ?? $this->getContext($context, "dateFin")), "html", null, true);
        echo "</h3>
                            <!--ee-->
                        </div>
                    </div>

                    ";
        // line 160
        echo "                    <table class=\"table\">
                        <tr>
                            <th class=\"table-info\" id=\"bordureLeft\" scope=\"row\">";
        // line 162
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "état "), "html", null, true);
        echo "de la fiche : </th>
                            <td colspan=\"3\" class=\"table-info\" id=\"bordureRight\" >";
        // line 163
        echo twig_escape_filter($this->env, ($context["etat"] ?? $this->getContext($context, "etat")), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th class=\"table-info\" id=\"bordureLeft\" scope=\"row\">Total des frais : </th>
                            <td class=\"table-info\" id=\"bordureRight\" >";
        // line 167
        echo twig_escape_filter($this->env, ($context["totalFiche"] ?? $this->getContext($context, "totalFiche")), "html", null, true);
        echo "€</td>
                            <th class=\"table-warning\" id=\"bordureLeft\" scope=\"row\">Frais validés : </th>
                            <td class=\"table-warning\" id=\"bordureRight\" >";
        // line 169
        echo twig_escape_filter($this->env, ($context["totalValide"] ?? $this->getContext($context, "totalValide")), "html", null, true);
        echo "€</td>
                        </tr>
                    </table>




                    <br>

                    <div class=\"container\">
                        <h3>Récapitulatif des frais forfaitisés</h3>
                    </div>
                    ";
        // line 182
        echo "                    ";
        if (($context["lesFraisForfaits"] ?? $this->getContext($context, "lesFraisForfaits"))) {
            // line 183
            echo "
                        ";
            // line 185
            echo "                        <table class=\"table\">
                            <thead class=\"thead-light\">
                            <tr>
                                ";
            // line 189
            echo "                                <th scope=\"col\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "forfait"), "html", null, true);
            echo "</th>
                                ";
            // line 190
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lesFraisForfaits"] ?? $this->getContext($context, "lesFraisForfaits")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["leFraisForfaits"]) {
                // line 191
                echo "                                    <th scope=\"col\">";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["leFraisForfaits"], "libelleFraisForfait", array(), "array")), "html", null, true);
                echo "</th>
                                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 193
                echo "                                    La liste est Vide
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leFraisForfaits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 195
            echo "                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                ";
            // line 200
            echo "                                <th scope=\"row\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "prix unitaire"), "html", null, true);
            echo "</th>
                                ";
            // line 201
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lesFraisForfaits"] ?? $this->getContext($context, "lesFraisForfaits")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["leFraisForfaits"]) {
                // line 202
                echo "                                    <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["leFraisForfaits"], "montantFraisForfait", array(), "array"), "html", null, true);
                echo "€</td>
                                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 204
                echo "                                    La liste est Vide
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leFraisForfaits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            echo "                            </tr>
                            <tr>
                                ";
            // line 209
            echo "                                <th scope=\"row\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "quantité"), "html", null, true);
            echo "</th>
                                ";
            // line 210
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lesFraisForfaits"] ?? $this->getContext($context, "lesFraisForfaits")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["leFraisForfaits"]) {
                // line 211
                echo "                                    <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["leFraisForfaits"], "quantite", array(), "array"), "html", null, true);
                echo "</td>
                                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 213
                echo "                                    La liste est Vide
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leFraisForfaits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "                            </tr>
                            <tr>
                                ";
            // line 218
            echo "                                <th scope=\"row\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "frais"), "html", null, true);
            echo "</th>
                                ";
            // line 219
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lesFraisForfaits"] ?? $this->getContext($context, "lesFraisForfaits")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["leFraisForfaits"]) {
                // line 220
                echo "                                    <td>";
                echo twig_escape_filter($this->env, ($this->getAttribute($context["leFraisForfaits"], "quantite", array(), "array") * $this->getAttribute($context["leFraisForfaits"], "montantFraisForfait", array(), "array")), "html", null, true);
                echo "€ </td>
                                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 222
                echo "                                    La liste est Vide
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leFraisForfaits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 224
            echo "                            </tr>
                            <tr id=\"bordure\" style=\"background-color: #28a74599\">
                                ";
            // line 227
            echo "                                <th scope=\"row\" >";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "total"), "html", null, true);
            echo "</th>
                                <td id=\"placeTotal\" colspan=\"";
            // line 228
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["lesFraisForfaits"] ?? $this->getContext($context, "lesFraisForfaits"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["totalFraisForfait"] ?? $this->getContext($context, "totalFraisForfait")), "html", null, true);
            echo "€ </td>
                            </tr>
                            </tbody>
                        </table>
                        ";
            // line 233
            echo "                    ";
        } else {
            // line 234
            echo "                        <div class=\"jumbotron jumbotron-fluid\">
                            <div class=\"container\">

                                <h4>Aucun frais forfaitaire n'a été ajouté pour le moment</h4>
                                <!--ee-->
                            </div>
                        </div>
                    ";
        }
        // line 242
        echo "
                    <br><hr><br>

                    <div class=\"container\">
                        <h3>Récapitulatif des frais non forfaitisés</h3>
                    </div>
                    ";
        // line 249
        echo "                    ";
        if (($context["lesFraisHorsForfaits"] ?? $this->getContext($context, "lesFraisHorsForfaits"))) {
            // line 250
            echo "                        ";
            // line 251
            echo "                        <table class=\"table\">
                            <thead class=\"thead-light\">
                            <tr>
                                ";
            // line 255
            echo "                                <th scope=\"col\"></th>
                                <th scope=\"col\">";
            // line 256
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "date"), "html", null, true);
            echo "</th>
                                <th scope=\"col\">";
            // line 257
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "description"), "html", null, true);
            echo "</th>
                                <th scope=\"col\">";
            // line 258
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "montant"), "html", null, true);
            echo "</th>
                            </tr>
                            </thead>
                            <tbody>

                            ";
            // line 264
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lesFraisHorsForfaits"] ?? $this->getContext($context, "lesFraisHorsForfaits")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["leFraisHorsForfaits"]) {
                // line 265
                echo "                                <tr>
                                    <th scope=\"row\" onClick=\"location.href='";
                // line 266
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_suppression", array("idHorsForfait" => $this->getAttribute($context["leFraisHorsForfaits"], "id", array(), "array"))), "html", null, true);
                echo "'\">
                                        <img style=\"cursor: pointer\" src=\"";
                // line 267
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/supprIco.png"), "html", null, true);
                echo "\" alt=\"Supprimer\" height=\"42\" width=\"42\">
                                    </th>
                                    <td>";
                // line 269
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["leFraisHorsForfaits"], "date", array(), "array"), "d/m/Y"), "html", null, true);
                echo "</td>
                                    <td>";
                // line 270
                echo twig_escape_filter($this->env, $this->getAttribute($context["leFraisHorsForfaits"], "libelle", array(), "array"), "html", null, true);
                echo "</td>
                                    <td>";
                // line 271
                echo twig_escape_filter($this->env, $this->getAttribute($context["leFraisHorsForfaits"], "montant", array(), "array"), "html", null, true);
                echo "€</td>
                                </tr>
                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 274
                echo "                                La liste est Vide
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leFraisHorsForfaits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 276
            echo "
                            <tr style=\"background-color: #28a74599\" id=\"bordure\">
                                ";
            // line 279
            echo "                                <th scope=\"row\" >";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "total"), "html", null, true);
            echo "</th>
                                <td id=\"placeTotal\" colspan=\"3\">";
            // line 280
            echo twig_escape_filter($this->env, ($context["totalFraisNonForfait"] ?? $this->getContext($context, "totalFraisNonForfait")), "html", null, true);
            echo "€ </td>
                            </tr>
                            <tr style=\"background-color: #b1575099\" id=\"bordure\">
                                ";
            // line 284
            echo "                                <th scope=\"row\" colspan=\"2\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Nombre de justificatifs fournis"), "html", null, true);
            echo "</th>
                                <td colspan=\"2\">";
            // line 285
            echo twig_escape_filter($this->env, ($context["nbJustificatif"] ?? $this->getContext($context, "nbJustificatif")), "html", null, true);
            echo " </td>
                            </tr>
                            </tbody>
                        </table>
                        ";
            // line 290
            echo "                    ";
        } else {
            // line 291
            echo "                        <div class=\"jumbotron jumbotron-fluid\">
                            <div class=\"container\">

                                <h4>Aucun frais non forfaitisé n'a été ajouté pour le moment</h4>
                                <!--ee-->
                            </div>
                        </div>
                    ";
        }
        // line 299
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 305
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 306
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 309
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 310
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
        return array (  733 => 310,  724 => 309,  711 => 306,  702 => 305,  692 => 299,  682 => 291,  679 => 290,  672 => 285,  667 => 284,  661 => 280,  656 => 279,  652 => 276,  645 => 274,  637 => 271,  633 => 270,  629 => 269,  624 => 267,  620 => 266,  617 => 265,  611 => 264,  603 => 258,  599 => 257,  595 => 256,  592 => 255,  587 => 251,  585 => 250,  582 => 249,  574 => 242,  564 => 234,  561 => 233,  552 => 228,  547 => 227,  543 => 224,  536 => 222,  528 => 220,  523 => 219,  518 => 218,  514 => 215,  507 => 213,  499 => 211,  494 => 210,  489 => 209,  485 => 206,  478 => 204,  470 => 202,  465 => 201,  460 => 200,  454 => 195,  447 => 193,  439 => 191,  434 => 190,  429 => 189,  424 => 185,  421 => 183,  418 => 182,  403 => 169,  398 => 167,  391 => 163,  387 => 162,  383 => 160,  373 => 154,  367 => 150,  360 => 147,  357 => 145,  354 => 144,  352 => 143,  343 => 142,  329 => 135,  322 => 131,  316 => 128,  310 => 125,  302 => 120,  294 => 115,  288 => 112,  282 => 109,  275 => 105,  265 => 98,  259 => 95,  254 => 93,  243 => 86,  236 => 82,  225 => 74,  218 => 70,  211 => 65,  206 => 62,  197 => 61,  177 => 46,  170 => 42,  158 => 33,  152 => 30,  146 => 27,  136 => 20,  128 => 14,  119 => 13,  106 => 300,  104 => 142,  101 => 141,  98 => 139,  96 => 61,  93 => 60,  88 => 56,  86 => 13,  81 => 10,  72 => 9,  55 => 3,  46 => 2,  11 => 1,);
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
    <style>


    </style>
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
                                            <a class=\"nav-link\" href=\"{{ path('gsb_profil_homepage') }}\">Menu<i class=\"fab fa-elementor\"></i></a>
                                        </li>
                                    </ul>
                                    <hr>

                                    <ul class=\"nav nav-pills flex-column\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link active\" href=\"{{ path('gsb_profil_saisie_frais') }}\">Saisie des frais<i class=\"fas fa-angle-left\"></i><span class=\"sr-only\">(current)</span></a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"{{ path('gsb_profil_afficher_mois') }}\">Fiche du mois <i class=\"fas fa-book\"></i></a>
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


            {# formulaire au millieur de la page #}
            <div class=\"col-sm\">
                {% block contenu %}
                    <div class=\"jumbotron jumbotron-fluid\">
                        <h1 style=\"text-align: center\">Frais forfaitisés</h1>
                        <div class=\"container-fluid\">
                            {{ form_start(form) }}
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            {# form.1 = Forfait Etape (nuit et repas)#}
                                            {{ form_row(form.1) }}
                                        </div>
                                        <div class=\"col\">
                                            {# form.2 = frais km#}
                                            {{ form_row(form.2) }}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            {# form.3 = Nuitée Hotel#}
                                            {{ form_row(form.3) }}
                                        </div>
                                        <div class=\"col\">
                                            {# form.4 = repas restaurant#}
                                            {{ form_row(form.4) }}
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class=\"form-group\">
                                    <div class=\"row\" style=\"padding-left: 5%\">
                                            {{ form_row(form.save) }}

                                            {{ form_row(form.cancel) }}
                                    </div>
                                </div>
                            {{ form_end(form) }}
                        </div>
                    </div>

                    <div class=\"jumbotron jumbotron-fluid\">
                        <h1  style=\"text-align: center\">Frais non forfaitisés</h1>
                        <div class=\"container-fluid\">
                            {{ form_start(form2) }}
                            <div class=\"form-group\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        {{ form_row(form2.jour) }}
                                    </div>
                                    <div class=\"col\">
                                        {{ form_row(form2.mois) }}
                                    </div>
                                    <div class=\"col\">
                                        {{ form_row(form2.annee) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                {{ form_row(form2.description) }}
                            </div>
                            <div class=\"form-group\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        {{ form_row(form2.montant) }}
                                    </div>
                                    <div class=\"col\">
                                        {{ form_row(form2.save) }}
                                    </div>
                                    <div class=\"col\">
                                        {{ form_row(form2.cancel) }}
                                    </div>
                                </div>
                            </div>
                            {{ form_end(form2) }}
                        </div>
                    </div>
                {% endblock contenu %}
            </div>
            {# affichage sur le côté droit de la page#}
            <div class=\"col-sm-5 col-md-5\">
                {% block affichage %}
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
                                    <th scope=\"row\" onClick=\"location.href='{{ path( 'gsb_suppression', {'idHorsForfait': leFraisHorsForfaits[\"id\"] } ) }}'\">
                                        <img style=\"cursor: pointer\" src=\"{{ asset('assets/img/supprIco.png') }}\" alt=\"Supprimer\" height=\"42\" width=\"42\">
                                    </th>
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
                                <!--ee-->
                            </div>
                        </div>
                    {% endif %}
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
