<?php

/* profil/saisieFrais.html.twig */
class __TwigTemplate_158130d2e8bfb9d0de9b7014951b4cee5107eda38d8f271bf7f542fb21a8fb5b extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <style>


    </style>
";
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
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
    }

    // line 13
    public function block_menu($context, array $blocks = array())
    {
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
    }

    // line 61
    public function block_contenu($context, array $blocks = array())
    {
        // line 62
        echo "                    <div class=\"jumbotron jumbotron-fluid\">
                        <h1 style=\"text-align: center\">Frais forfaitisés</h1>
                        <div class=\"container-fluid\">
                            ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            ";
        // line 70
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), 1, array()), 'row');
        echo "
                                        </div>
                                        <div class=\"col\">
                                            ";
        // line 74
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), 2, array()), 'row');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), 3, array()), 'row');
        echo "
                                        </div>
                                        <div class=\"col\">
                                            ";
        // line 86
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), 4, array()), 'row');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class=\"form-group\">
                                    <div class=\"row\" style=\"padding-left: 5%\">
                                            ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "save", array()), 'row');
        echo "

                                            ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cancel", array()), 'row');
        echo "
                                    </div>
                                </div>
                            ";
        // line 98
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                        </div>
                    </div>

                    <div class=\"jumbotron jumbotron-fluid\">
                        <h1  style=\"text-align: center\">Frais non forfaitisés</h1>
                        <div class=\"container-fluid\">
                            ";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form2"] ?? null), 'form_start');
        echo "
                            <div class=\"form-group\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form2"] ?? null), "jour", array()), 'row');
        echo "
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form2"] ?? null), "mois", array()), 'row');
        echo "
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form2"] ?? null), "annee", array()), 'row');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form2"] ?? null), "description", array()), 'row');
        echo "
                            </div>
                            <div class=\"form-group\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form2"] ?? null), "montant", array()), 'row');
        echo "
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form2"] ?? null), "save", array()), 'row');
        echo "
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form2"] ?? null), "cancel", array()), 'row');
        echo "
                                    </div>
                                </div>
                            </div>
                            ";
        // line 135
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form2"] ?? null), 'form_end');
        echo "
                        </div>
                    </div>
                ";
    }

    // line 142
    public function block_affichage($context, array $blocks = array())
    {
        // line 143
        echo "                    ";
        // line 144
        echo "                    ";
        if (($context["dateModif"] ?? null)) {
            // line 145
            echo "                        <div class=\"container2\">
                            ";
            // line 147
            echo "                            <h5>Dernière modification le : ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["dateModif"] ?? null), "d/m/Y"), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["dateDebut"] ?? null), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, ($context["dateFin"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["etat"] ?? null), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th class=\"table-info\" id=\"bordureLeft\" scope=\"row\">Total des frais : </th>
                            <td class=\"table-info\" id=\"bordureRight\" >";
        // line 167
        echo twig_escape_filter($this->env, ($context["totalFiche"] ?? null), "html", null, true);
        echo "€</td>
                            <th class=\"table-warning\" id=\"bordureLeft\" scope=\"row\">Frais validés : </th>
                            <td class=\"table-warning\" id=\"bordureRight\" >";
        // line 169
        echo twig_escape_filter($this->env, ($context["totalValide"] ?? null), "html", null, true);
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
        if (($context["lesFraisForfaits"] ?? null)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["lesFraisForfaits"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(($context["lesFraisForfaits"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(($context["lesFraisForfaits"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(($context["lesFraisForfaits"] ?? null));
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
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["lesFraisForfaits"] ?? null)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["totalFraisForfait"] ?? null), "html", null, true);
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
        if (($context["lesFraisHorsForfaits"] ?? null)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["lesFraisHorsForfaits"] ?? null));
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
            echo twig_escape_filter($this->env, ($context["totalFraisNonForfait"] ?? null), "html", null, true);
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
            echo twig_escape_filter($this->env, ($context["nbJustificatif"] ?? null), "html", null, true);
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
    }

    // line 305
    public function block_footer($context, array $blocks = array())
    {
        // line 306
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    // line 309
    public function block_javascripts($context, array $blocks = array())
    {
        // line 310
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
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
        return array (  643 => 310,  640 => 309,  633 => 306,  630 => 305,  626 => 299,  616 => 291,  613 => 290,  606 => 285,  601 => 284,  595 => 280,  590 => 279,  586 => 276,  579 => 274,  571 => 271,  567 => 270,  563 => 269,  558 => 267,  554 => 266,  551 => 265,  545 => 264,  537 => 258,  533 => 257,  529 => 256,  526 => 255,  521 => 251,  519 => 250,  516 => 249,  508 => 242,  498 => 234,  495 => 233,  486 => 228,  481 => 227,  477 => 224,  470 => 222,  462 => 220,  457 => 219,  452 => 218,  448 => 215,  441 => 213,  433 => 211,  428 => 210,  423 => 209,  419 => 206,  412 => 204,  404 => 202,  399 => 201,  394 => 200,  388 => 195,  381 => 193,  373 => 191,  368 => 190,  363 => 189,  358 => 185,  355 => 183,  352 => 182,  337 => 169,  332 => 167,  325 => 163,  321 => 162,  317 => 160,  307 => 154,  301 => 150,  294 => 147,  291 => 145,  288 => 144,  286 => 143,  283 => 142,  275 => 135,  268 => 131,  262 => 128,  256 => 125,  248 => 120,  240 => 115,  234 => 112,  228 => 109,  221 => 105,  211 => 98,  205 => 95,  200 => 93,  189 => 86,  182 => 82,  171 => 74,  164 => 70,  157 => 65,  152 => 62,  149 => 61,  135 => 46,  128 => 42,  116 => 33,  110 => 30,  104 => 27,  94 => 20,  86 => 14,  83 => 13,  76 => 300,  74 => 142,  71 => 141,  68 => 139,  66 => 61,  63 => 60,  58 => 56,  56 => 13,  51 => 10,  48 => 9,  37 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profil/saisieFrais.html.twig", "/var/www/html/GsbFrais/app/Resources/views/profil/saisieFrais.html.twig");
    }
}
