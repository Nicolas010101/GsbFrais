<?php

/* profil/historiqueFrais.html.twig */
class __TwigTemplate_0fe30888a16fe54059ae33455f03180f911374a3c87b94274fdc5335acb6d458 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/styleHistorique.css"), "html", null, true);
        echo "\">
";
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
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
    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
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
    }

    // line 58
    public function block_contenu($context, array $blocks = array())
    {
        // line 59
        echo "                    <div style=\"padding: 0.5rem 1rem;\" class=\"jumbotron jumbotron-fluid\">
                        <div class=\"container-fluid contAlign\">
                            <h3>Sélection d'une fiche</h3>
                        </div>
                    </div>


                    ";
        // line 67
        echo "                    ";
        if ((($context["fiches"] ?? null) == null)) {
            // line 68
            echo "                        ";
            if (($context["form"] ?? null)) {
                // line 69
                echo "                            <div class=\"container\">
                                <h4>Recherchez une fiche</h4><br>
                                <div class=\"container-fluid\">
                                    ";
                // line 72
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
                echo "
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                ";
                // line 76
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", array()), 'row');
                echo "
                                            </div>
                                            <div class=\"col\">
                                                ";
                // line 79
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", array()), 'row');
                echo "
                                            </div>
                                            <div class=\"col\">
                                                ";
                // line 82
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "search", array()), 'row');
                echo "
                                            </div>
                                        </div>
                                    </div>
                                    ";
                // line 86
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
            if (($context["form"] ?? null)) {
                // line 106
                echo "                        <div class=\"container\">
                            <h4>Recherchez une fiche</h4><br>
                            <div class=\"container-fluid\">
                                ";
                // line 109
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
                echo "
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            ";
                // line 113
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", array()), 'row');
                echo "
                                        </div>
                                        <div class=\"col\">
                                            ";
                // line 116
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", array()), 'row');
                echo "
                                        </div>
                                        <div class=\"col\">
                                            ";
                // line 119
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "search", array()), 'row');
                echo "
                                        </div>
                                    </div>
                                </div>
                                ";
                // line 123
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
            $context['_seq'] = twig_ensure_traversable(($context["fiches"] ?? null));
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
    }

    // line 170
    public function block_affichage($context, array $blocks = array())
    {
        // line 171
        echo "                    <div style=\"padding: 1rem 1rem;\" class=\"jumbotron jumbotron-fluid\">
                        <div class=\"container-fluid contAlign\">
                            <h3>Fiche sélectionnée</h3>
                        </div>
                    </div>

                    ";
        // line 178
        echo "                    ";
        if ((($context["selection"] ?? null) == false)) {
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
            if (($context["dateModif"] ?? null)) {
                // line 187
                echo "                            <div class=\"container2\">
                                ";
                // line 189
                echo "                                <h5>Dernière modification le : ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["dateModif"] ?? null), "d/m/Y"), "html", null, true);
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
            echo twig_escape_filter($this->env, ($context["dateDebut"] ?? null), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, ($context["dateFin"] ?? null), "html", null, true);
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
            echo twig_escape_filter($this->env, ($context["etat"] ?? null), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <th class=\"table-info\" id=\"bordureLeft\" scope=\"row\">Total des frais : </th>
                                <td class=\"table-info\" id=\"bordureRight\" >";
            // line 209
            echo twig_escape_filter($this->env, ($context["totalFiche"] ?? null), "html", null, true);
            echo "€</td>
                                <th class=\"table-warning\" id=\"bordureLeft\" scope=\"row\">Frais validés : </th>
                                <td class=\"table-warning\" id=\"bordureRight\" >";
            // line 211
            echo twig_escape_filter($this->env, ($context["totalValide"] ?? null), "html", null, true);
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
            if (($context["lesFraisForfaits"] ?? null)) {
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
                $context['_seq'] = twig_ensure_traversable(($context["lesFraisForfaits"] ?? null));
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
                $context['_seq'] = twig_ensure_traversable(($context["lesFraisForfaits"] ?? null));
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
                $context['_seq'] = twig_ensure_traversable(($context["lesFraisForfaits"] ?? null));
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
                $context['_seq'] = twig_ensure_traversable(($context["lesFraisForfaits"] ?? null));
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
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["lesFraisForfaits"] ?? null)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["totalFraisForfait"] ?? null), "html", null, true);
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
            if (($context["lesFraisHorsForfaits"] ?? null)) {
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
                $context['_seq'] = twig_ensure_traversable(($context["lesFraisHorsForfaits"] ?? null));
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
                echo twig_escape_filter($this->env, ($context["totalFraisNonForfait"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["nbJustificatif"] ?? null), "html", null, true);
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
    }

    // line 347
    public function block_footer($context, array $blocks = array())
    {
        // line 348
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    // line 351
    public function block_javascripts($context, array $blocks = array())
    {
        // line 352
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
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
        return array (  766 => 352,  763 => 351,  756 => 348,  753 => 347,  748 => 340,  745 => 339,  735 => 331,  732 => 330,  725 => 325,  720 => 324,  714 => 320,  709 => 319,  705 => 316,  698 => 314,  682 => 311,  678 => 310,  674 => 309,  670 => 308,  667 => 307,  648 => 306,  640 => 300,  636 => 299,  632 => 298,  629 => 297,  624 => 293,  622 => 292,  619 => 291,  611 => 284,  601 => 276,  598 => 275,  589 => 270,  584 => 269,  580 => 266,  573 => 264,  565 => 262,  560 => 261,  555 => 260,  551 => 257,  544 => 255,  536 => 253,  531 => 252,  526 => 251,  522 => 248,  515 => 246,  507 => 244,  502 => 243,  497 => 242,  491 => 237,  484 => 235,  476 => 233,  471 => 232,  466 => 231,  461 => 227,  458 => 225,  455 => 224,  440 => 211,  435 => 209,  428 => 205,  424 => 204,  420 => 202,  410 => 196,  404 => 192,  397 => 189,  394 => 187,  391 => 186,  388 => 185,  381 => 179,  378 => 178,  370 => 171,  367 => 170,  362 => 164,  356 => 160,  337 => 155,  333 => 154,  329 => 153,  325 => 152,  321 => 151,  317 => 150,  312 => 148,  309 => 147,  291 => 146,  272 => 129,  268 => 127,  261 => 123,  254 => 119,  248 => 116,  242 => 113,  235 => 109,  230 => 106,  227 => 105,  224 => 104,  210 => 92,  206 => 90,  199 => 86,  192 => 82,  186 => 79,  180 => 76,  173 => 72,  168 => 69,  165 => 68,  162 => 67,  153 => 59,  150 => 58,  136 => 43,  129 => 39,  117 => 30,  111 => 27,  105 => 24,  95 => 17,  87 => 11,  84 => 10,  77 => 342,  75 => 170,  71 => 168,  68 => 166,  66 => 58,  63 => 57,  58 => 53,  56 => 10,  51 => 7,  48 => 6,  42 => 4,  37 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profil/historiqueFrais.html.twig", "/var/www/html/GsbFrais/app/Resources/views/profil/historiqueFrais.html.twig");
    }
}
