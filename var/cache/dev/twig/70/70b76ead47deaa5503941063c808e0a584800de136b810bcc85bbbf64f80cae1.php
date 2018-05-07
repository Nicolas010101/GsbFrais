<?php

/* profil/historiqueFrais.html.twig */
class __TwigTemplate_0e6fc840f57580ceeda2e5438040f775777d654b290a83d9aab9e4acd35dfdc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("profil/profil.html.twig", "profil/historiqueFrais.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profil/historiqueFrais.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profil/historiqueFrais.html.twig"));

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
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/styleHistorique.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-4 col-md-3\">
                ";
        // line 10
        $this->displayBlock('menu', $context, $blocks);
        // line 53
        echo "            </div>


            ";
        // line 57
        echo "            <div class=\"col-sm-5 col-md-5\">
                ";
        // line 58
        $this->displayBlock('contenu', $context, $blocks);
        // line 166
        echo "            </div>
            ";
        // line 168
        echo "            <div class=\"col-sm-5 col-md-4\">

                ";
        // line 170
        $this->displayBlock('affichage', $context, $blocks);
        // line 342
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 11
        echo "                    <div class=\"container-fluid\">
                        <div class ='row'>
                            <nav class=\"col-sm hidden-xs-down bg-faded sidebar\">
                                <div id=\"navLateral\">
                                    <ul class=\"nav nav-pills flex-column\">
                                        <li class=\"nav-item\" >
                                            <a class=\"nav-link\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_homepage");
        echo "\">Menu<i class=\"fab fa-elementor\"></i></a>
                                        </li>
                                    </ul>
                                    <hr>

                                    <ul class=\"nav nav-pills flex-column\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_saisie_frais");
        echo "\">Saisie des frais<i class=\"far fa-edit\"></i></a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_afficher_mois");
        echo "\">Fiche du mois <i class=\"fas fa-book\"></i></a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link active\" href=\"href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_historique");
        echo "\"\">Historique<i class=\"fas fa-angle-left\"></i><span class=\"sr-only\">(current)</span></a>
                                        </li>
                                    </ul>

                                    <hr>

                                    <ul class=\"nav nav-pills flex-column\">

                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_frais_edit_mdp");
        echo "\">Changer de mot de passe <i class=\"fas fa-key\"></i></a>
                                        </li>

                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"";
        // line 43
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

    // line 58
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 59
        echo "                    <div style=\"padding: 0.5rem 1rem;\" class=\"jumbotron jumbotron-fluid\">
                        <div class=\"container-fluid contAlign\">
                            <h3>Sélection d'une fiche</h3>
                        </div>
                    </div>


                    ";
        // line 67
        echo "                    ";
        if ((($context["fiches"] ?? $this->getContext($context, "fiches")) == null)) {
            // line 68
            echo "                        ";
            if (($context["form"] ?? $this->getContext($context, "form"))) {
                // line 69
                echo "                            <div class=\"container\">
                                <h4>Recherchez une fiche</h4><br>
                                <div class=\"container-fluid\">
                                    ";
                // line 72
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
                echo "
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                ";
                // line 76
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'row');
                echo "
                                            </div>
                                            <div class=\"col\">
                                                ";
                // line 79
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'row');
                echo "
                                            </div>
                                            <div class=\"col\">
                                                ";
                // line 82
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "search", array()), 'row');
                echo "
                                            </div>
                                        </div>
                                    </div>
                                    ";
                // line 86
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
                echo "
                                </div>
                            </div>
                        ";
            }
            // line 90
            echo "
                        <div class=\"container\">
                            <a class=\"btn btn-outline-success\" href=\"";
            // line 92
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_historique");
            echo "\"> Lister toutes les fiches archivées </a>
                        </div>


                        <br>

                        <div style=\"padding: 5rem 1rem;\" class=\"jumbotron jumbotron-fluid\">
                            <div class=\"container-fluid contAlign\">
                                Aucune fiche
                            </div>
                        </div>
                        ";
            // line 104
            echo "                    ";
        } else {
            // line 105
            echo "                        ";
            if (($context["form"] ?? $this->getContext($context, "form"))) {
                // line 106
                echo "                        <div class=\"container\">
                            <h4>Recherchez une fiche</h4><br>
                            <div class=\"container-fluid\">
                                ";
                // line 109
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
                echo "
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            ";
                // line 113
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'row');
                echo "
                                        </div>
                                        <div class=\"col\">
                                            ";
                // line 116
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'row');
                echo "
                                        </div>
                                        <div class=\"col\">
                                            ";
                // line 119
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "search", array()), 'row');
                echo "
                                        </div>
                                    </div>
                                </div>
                                ";
                // line 123
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
                echo "
                            </div>
                        </div>
                        ";
            }
            // line 127
            echo "
                        <div class=\"container\">
                            <a class=\"btn btn-outline-success\" href=\"";
            // line 129
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_historique");
            echo "\"> Lister toutes les fiches archivées </a>
                        </div>
                        <br>

                        <table class=\"table\">
                            <thead class=\"thead-dark\">
                            <tr>
                                <th scope=\"col\">#</th>
                                <th scope=\"col\">Période</th>
                                <th scope=\"col\">Justificatifs</th>
                                <th scope=\"col\">Montant validé</th>
                                <th scope=\"col\">Dernière modification</th>
                                <th scope=\"col\">Etat</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
            // line 146
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fiches"] ?? $this->getContext($context, "fiches")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["laFiche"]) {
                // line 147
                echo "
                                        <tr id=\"selection\" style=\"cursor: pointer\" onClick=\"location.href='";
                // line 148
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_historique_selection", array("date" => twig_date_format_filter($this->env, $this->getAttribute($context["laFiche"], "date", array(), "array"), "Y-m-d"))), "html", null, true);
                echo "'\">

                                            <th scope=\"row\">";
                // line 150
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
                                            <td>";
                // line 151
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["laFiche"], "date", array(), "array"), "m/Y"), "html", null, true);
                echo "</td>
                                            <td>";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute($context["laFiche"], "nbJustificatif", array(), "array"), "html", null, true);
                echo "</td>
                                            <td>";
                // line 153
                echo twig_escape_filter($this->env, $this->getAttribute($context["laFiche"], "montantValide", array(), "array"), "html", null, true);
                echo "</td>
                                            <td>";
                // line 154
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["laFiche"], "dateModif", array(), "array"), "d/m/Y"), "html", null, true);
                echo "</td>
                                            <td>";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($context["laFiche"], "libelleEtat", array(), "array"), "html", null, true);
                echo "</td>

                                        </tr>

                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['laFiche'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "
                            </tbody>
                        </table>
                    ";
        }
        // line 164
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 170
    public function block_affichage($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "affichage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "affichage"));

        // line 171
        echo "                    <div style=\"padding: 1rem 1rem;\" class=\"jumbotron jumbotron-fluid\">
                        <div class=\"container-fluid contAlign\">
                            <h3>Fiche sélectionnée</h3>
                        </div>
                    </div>

                    ";
        // line 178
        echo "                    ";
        if ((($context["selection"] ?? $this->getContext($context, "selection")) == false)) {
            // line 179
            echo "                        <div style=\"padding: 10rem 1rem;\" class=\"jumbotron jumbotron-fluid\">
                            <div class=\"container-fluid contAlign\">
                                Aucune fiche n'a été sélectionnée pour le moment
                            </div>
                        </div>
                    ";
            // line 185
            echo "                    ";
        } else {
            // line 186
            echo "                        ";
            if (($context["dateModif"] ?? $this->getContext($context, "dateModif"))) {
                // line 187
                echo "                            <div class=\"container2\">
                                ";
                // line 189
                echo "                                <h5>Dernière modification le : ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["dateModif"] ?? $this->getContext($context, "dateModif")), "d/m/Y"), "html", null, true);
                echo "</h5>
                            </div>
                        ";
            }
            // line 192
            echo "                        <div class=\"jumbotron jumbotron-fluid\">

                            <div class=\"container\">
                                <h1> Fiche des frais </h1>
                                <h3>";
            // line 196
            echo twig_escape_filter($this->env, ($context["dateDebut"] ?? $this->getContext($context, "dateDebut")), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, ($context["dateFin"] ?? $this->getContext($context, "dateFin")), "html", null, true);
            echo "</h3>
                                <!--ee-->
                            </div>
                        </div>

                        ";
            // line 202
            echo "                        <table class=\"table\">
                            <tr>
                                <th class=\"table-info\" id=\"bordureLeft\" scope=\"row\">";
            // line 204
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "état "), "html", null, true);
            echo "de la fiche : </th>
                                <td colspan=\"3\" class=\"table-info\" id=\"bordureRight\" >";
            // line 205
            echo twig_escape_filter($this->env, ($context["etat"] ?? $this->getContext($context, "etat")), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <th class=\"table-info\" id=\"bordureLeft\" scope=\"row\">Total des frais : </th>
                                <td class=\"table-info\" id=\"bordureRight\" >";
            // line 209
            echo twig_escape_filter($this->env, ($context["totalFiche"] ?? $this->getContext($context, "totalFiche")), "html", null, true);
            echo "€</td>
                                <th class=\"table-warning\" id=\"bordureLeft\" scope=\"row\">Frais validés : </th>
                                <td class=\"table-warning\" id=\"bordureRight\" >";
            // line 211
            echo twig_escape_filter($this->env, ($context["totalValide"] ?? $this->getContext($context, "totalValide")), "html", null, true);
            echo "€</td>
                            </tr>
                        </table>




                        <br>

                        <div class=\"container\">
                            <h3>Récapitulatif des frais forfaitisés</h3>
                        </div>
                        ";
            // line 224
            echo "                        ";
            if (($context["lesFraisForfaits"] ?? $this->getContext($context, "lesFraisForfaits"))) {
                // line 225
                echo "
                            ";
                // line 227
                echo "                            <table class=\"table\">
                                <thead class=\"thead-light\">
                                <tr>
                                    ";
                // line 231
                echo "                                    <th scope=\"col\">";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "forfait"), "html", null, true);
                echo "</th>
                                    ";
                // line 232
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["lesFraisForfaits"] ?? $this->getContext($context, "lesFraisForfaits")));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["leFraisForfaits"]) {
                    // line 233
                    echo "                                        <th scope=\"col\">";
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["leFraisForfaits"], "libelleFraisForfait", array(), "array")), "html", null, true);
                    echo "</th>
                                    ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 235
                    echo "                                        La liste est Vide
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leFraisForfaits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 237
                echo "                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    ";
                // line 242
                echo "                                    <th scope=\"row\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, "prix unitaire"), "html", null, true);
                echo "</th>
                                    ";
                // line 243
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["lesFraisForfaits"] ?? $this->getContext($context, "lesFraisForfaits")));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["leFraisForfaits"]) {
                    // line 244
                    echo "                                        <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["leFraisForfaits"], "montantFraisForfait", array(), "array"), "html", null, true);
                    echo "€</td>
                                    ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 246
                    echo "                                        La liste est Vide
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leFraisForfaits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 248
                echo "                                </tr>
                                <tr>
                                    ";
                // line 251
                echo "                                    <th scope=\"row\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, "quantité"), "html", null, true);
                echo "</th>
                                    ";
                // line 252
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["lesFraisForfaits"] ?? $this->getContext($context, "lesFraisForfaits")));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["leFraisForfaits"]) {
                    // line 253
                    echo "                                        <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["leFraisForfaits"], "quantite", array(), "array"), "html", null, true);
                    echo "</td>
                                    ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 255
                    echo "                                        La liste est Vide
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leFraisForfaits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 257
                echo "                                </tr>
                                <tr>
                                    ";
                // line 260
                echo "                                    <th scope=\"row\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, "frais"), "html", null, true);
                echo "</th>
                                    ";
                // line 261
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["lesFraisForfaits"] ?? $this->getContext($context, "lesFraisForfaits")));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["leFraisForfaits"]) {
                    // line 262
                    echo "                                        <td>";
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["leFraisForfaits"], "quantite", array(), "array") * $this->getAttribute($context["leFraisForfaits"], "montantFraisForfait", array(), "array")), "html", null, true);
                    echo "€ </td>
                                    ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 264
                    echo "                                        La liste est Vide
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leFraisForfaits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 266
                echo "                                </tr>
                                <tr style=\"background-color: #28a74599\" id=\"bordure\">
                                    ";
                // line 269
                echo "                                    <th scope=\"row\" >";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, "total"), "html", null, true);
                echo "</th>
                                    <td id=\"placeTotal\" colspan=\"";
                // line 270
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["lesFraisForfaits"] ?? $this->getContext($context, "lesFraisForfaits"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["totalFraisForfait"] ?? $this->getContext($context, "totalFraisForfait")), "html", null, true);
                echo "€ </td>
                                </tr>
                                </tbody>
                            </table>
                            ";
                // line 275
                echo "                        ";
            } else {
                // line 276
                echo "                            <div class=\"jumbotron jumbotron-fluid\">
                                <div class=\"container\">

                                    <h4>Aucun frais forfaitaire n'a été ajouté pour le moment</h4>
                                    <!--ee-->
                                </div>
                            </div>
                        ";
            }
            // line 284
            echo "
                        <br><hr><br>

                        <div class=\"container\">
                            <h3>Récapitulatif des frais non forfaitisés</h3>
                        </div>
                        ";
            // line 291
            echo "                        ";
            if (($context["lesFraisHorsForfaits"] ?? $this->getContext($context, "lesFraisHorsForfaits"))) {
                // line 292
                echo "                            ";
                // line 293
                echo "                            <table class=\"table\">
                                <thead class=\"thead-light\">
                                <tr>
                                    ";
                // line 297
                echo "                                    <th scope=\"col\"></th>
                                    <th scope=\"col\">";
                // line 298
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "date"), "html", null, true);
                echo "</th>
                                    <th scope=\"col\">";
                // line 299
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "description"), "html", null, true);
                echo "</th>
                                    <th scope=\"col\">";
                // line 300
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "montant"), "html", null, true);
                echo "</th>
                                </tr>
                                </thead>
                                <tbody>

                                ";
                // line 306
                echo "                                ";
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
                    // line 307
                    echo "                                    <tr>
                                        <th scope=\"row\">";
                    // line 308
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "</th>
                                        <td>";
                    // line 309
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["leFraisHorsForfaits"], "date", array(), "array"), "d/m/Y"), "html", null, true);
                    echo "</td>
                                        <td>";
                    // line 310
                    echo twig_escape_filter($this->env, $this->getAttribute($context["leFraisHorsForfaits"], "libelle", array(), "array"), "html", null, true);
                    echo "</td>
                                        <td>";
                    // line 311
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
                    // line 314
                    echo "                                    La liste est Vide
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leFraisHorsForfaits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 316
                echo "
                                <tr style=\"background-color: #28a74599\" id=\"bordure\">
                                    ";
                // line 319
                echo "                                    <th scope=\"row\" >";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, "total"), "html", null, true);
                echo "</th>
                                    <td id=\"placeTotal\" colspan=\"3\">";
                // line 320
                echo twig_escape_filter($this->env, ($context["totalFraisNonForfait"] ?? $this->getContext($context, "totalFraisNonForfait")), "html", null, true);
                echo "€ </td>
                                </tr>
                                <tr style=\"background-color: #b1575099\" id=\"bordure\">
                                    ";
                // line 324
                echo "                                    <th scope=\"row\" colspan=\"2\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Nombre de justificatifs fournis"), "html", null, true);
                echo "</th>
                                    <td colspan=\"2\">";
                // line 325
                echo twig_escape_filter($this->env, ($context["nbJustificatif"] ?? $this->getContext($context, "nbJustificatif")), "html", null, true);
                echo " </td>
                                </tr>
                                </tbody>
                            </table>
                            ";
                // line 330
                echo "                        ";
            } else {
                // line 331
                echo "                            <div class=\"jumbotron jumbotron-fluid\">
                                <div class=\"container\">

                                    <h4>Aucun frais non forfaitisé n'a été ajouté pour le moment</h4>
                                    <!--ee-->
                                </div>
                            </div>
                        ";
            }
            // line 339
            echo "                    ";
        }
        // line 340
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 347
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 348
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 351
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 352
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profil/historiqueFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  856 => 352,  847 => 351,  834 => 348,  825 => 347,  814 => 340,  811 => 339,  801 => 331,  798 => 330,  791 => 325,  786 => 324,  780 => 320,  775 => 319,  771 => 316,  764 => 314,  748 => 311,  744 => 310,  740 => 309,  736 => 308,  733 => 307,  714 => 306,  706 => 300,  702 => 299,  698 => 298,  695 => 297,  690 => 293,  688 => 292,  685 => 291,  677 => 284,  667 => 276,  664 => 275,  655 => 270,  650 => 269,  646 => 266,  639 => 264,  631 => 262,  626 => 261,  621 => 260,  617 => 257,  610 => 255,  602 => 253,  597 => 252,  592 => 251,  588 => 248,  581 => 246,  573 => 244,  568 => 243,  563 => 242,  557 => 237,  550 => 235,  542 => 233,  537 => 232,  532 => 231,  527 => 227,  524 => 225,  521 => 224,  506 => 211,  501 => 209,  494 => 205,  490 => 204,  486 => 202,  476 => 196,  470 => 192,  463 => 189,  460 => 187,  457 => 186,  454 => 185,  447 => 179,  444 => 178,  436 => 171,  427 => 170,  416 => 164,  410 => 160,  391 => 155,  387 => 154,  383 => 153,  379 => 152,  375 => 151,  371 => 150,  366 => 148,  363 => 147,  345 => 146,  326 => 129,  322 => 127,  315 => 123,  308 => 119,  302 => 116,  296 => 113,  289 => 109,  284 => 106,  281 => 105,  278 => 104,  264 => 92,  260 => 90,  253 => 86,  246 => 82,  240 => 79,  234 => 76,  227 => 72,  222 => 69,  219 => 68,  216 => 67,  207 => 59,  198 => 58,  178 => 43,  171 => 39,  159 => 30,  153 => 27,  147 => 24,  137 => 17,  129 => 11,  120 => 10,  107 => 342,  105 => 170,  101 => 168,  98 => 166,  96 => 58,  93 => 57,  88 => 53,  86 => 10,  81 => 7,  72 => 6,  60 => 4,  55 => 3,  46 => 2,  11 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/styleHistorique.css') }}\">
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
                                            <a class=\"nav-link\" href=\"{{ path('gsb_profil_saisie_frais') }}\">Saisie des frais<i class=\"far fa-edit\"></i></a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"{{ path('gsb_profil_afficher_mois') }}\">Fiche du mois <i class=\"fas fa-book\"></i></a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link active\" href=\"href=\"{{ path('gsb_profil_historique') }}\"\">Historique<i class=\"fas fa-angle-left\"></i><span class=\"sr-only\">(current)</span></a>
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
            <div class=\"col-sm-5 col-md-5\">
                {% block contenu %}
                    <div style=\"padding: 0.5rem 1rem;\" class=\"jumbotron jumbotron-fluid\">
                        <div class=\"container-fluid contAlign\">
                            <h3>Sélection d'une fiche</h3>
                        </div>
                    </div>


                    {#SI PAS DE FICHES POUR L'UTILISATEUR #}
                    {% if fiches == null %}
                        {% if form %}
                            <div class=\"container\">
                                <h4>Recherchez une fiche</h4><br>
                                <div class=\"container-fluid\">
                                    {{ form_start(form) }}
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                {{ form_row(form.month) }}
                                            </div>
                                            <div class=\"col\">
                                                {{ form_row(form.year) }}
                                            </div>
                                            <div class=\"col\">
                                                {{ form_row(form.search) }}
                                            </div>
                                        </div>
                                    </div>
                                    {{ form_end(form) }}
                                </div>
                            </div>
                        {% endif %}

                        <div class=\"container\">
                            <a class=\"btn btn-outline-success\" href=\"{{ path('gsb_profil_historique') }}\"> Lister toutes les fiches archivées </a>
                        </div>


                        <br>

                        <div style=\"padding: 5rem 1rem;\" class=\"jumbotron jumbotron-fluid\">
                            <div class=\"container-fluid contAlign\">
                                Aucune fiche
                            </div>
                        </div>
                        {#SINON AFFICHER LA LISTE DES FICHES #}
                    {% else %}
                        {% if form %}
                        <div class=\"container\">
                            <h4>Recherchez une fiche</h4><br>
                            <div class=\"container-fluid\">
                                {{ form_start(form) }}
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            {{ form_row(form.month) }}
                                        </div>
                                        <div class=\"col\">
                                            {{ form_row(form.year) }}
                                        </div>
                                        <div class=\"col\">
                                            {{ form_row(form.search) }}
                                        </div>
                                    </div>
                                </div>
                                {{ form_end(form) }}
                            </div>
                        </div>
                        {% endif %}

                        <div class=\"container\">
                            <a class=\"btn btn-outline-success\" href=\"{{ path('gsb_profil_historique') }}\"> Lister toutes les fiches archivées </a>
                        </div>
                        <br>

                        <table class=\"table\">
                            <thead class=\"thead-dark\">
                            <tr>
                                <th scope=\"col\">#</th>
                                <th scope=\"col\">Période</th>
                                <th scope=\"col\">Justificatifs</th>
                                <th scope=\"col\">Montant validé</th>
                                <th scope=\"col\">Dernière modification</th>
                                <th scope=\"col\">Etat</th>
                            </tr>
                            </thead>
                            <tbody>
                            {#BOUCLE POUR FAIRE DEFILER LES RAPPORTS ET LES AFFICHERS#}
                                {% for laFiche in fiches %}

                                        <tr id=\"selection\" style=\"cursor: pointer\" onClick=\"location.href='{{ path( 'gsb_profil_historique_selection', {'date': laFiche['date'] | date('Y-m-d')} ) }}'\">

                                            <th scope=\"row\">{{ loop.index }}</th>
                                            <td>{{ laFiche['date'] | date('m/Y') }}</td>
                                            <td>{{ laFiche['nbJustificatif'] }}</td>
                                            <td>{{ laFiche['montantValide'] }}</td>
                                            <td>{{ laFiche['dateModif'] | date('d/m/Y') }}</td>
                                            <td>{{ laFiche['libelleEtat'] }}</td>

                                        </tr>

                                {% endfor %}

                            </tbody>
                        </table>
                    {% endif %}

                {% endblock contenu %}
            </div>
            {# affichage sur le côté droit de la page#}
            <div class=\"col-sm-5 col-md-4\">

                {% block affichage %}
                    <div style=\"padding: 1rem 1rem;\" class=\"jumbotron jumbotron-fluid\">
                        <div class=\"container-fluid contAlign\">
                            <h3>Fiche sélectionnée</h3>
                        </div>
                    </div>

                    {#SI AUCUNE FICHE SELECTIONNEE #}
                    {% if selection == false %}
                        <div style=\"padding: 10rem 1rem;\" class=\"jumbotron jumbotron-fluid\">
                            <div class=\"container-fluid contAlign\">
                                Aucune fiche n'a été sélectionnée pour le moment
                            </div>
                        </div>
                    {#SINON AFFICHER LA FICHE SELECTIONNEE #}
                    {% else %}
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
                                <tr style=\"background-color: #28a74599\" id=\"bordure\">
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
                                    <!--ee-->
                                </div>
                            </div>
                        {% endif %}
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
{% endblock javascripts %}", "profil/historiqueFrais.html.twig", "/var/www/html/GitGsbFrais/app/Resources/views/profil/historiqueFrais.html.twig");
    }
}
